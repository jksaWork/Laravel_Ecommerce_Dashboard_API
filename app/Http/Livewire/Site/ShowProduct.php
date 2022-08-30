<?php

namespace App\Http\Livewire\Site;

use App\Models\Product;
use App\Models\Reviews;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ShowProduct extends Component
{

    public $slug , $quantity = 1;
    public $rating_stars , $name, $commint, $Product;
    public function mount($slug){
        $this->slug = $slug;
    }

    public function RatingProduct(){


        if(!auth()->guard('customers')->check()){
            $this->emit('ErrorMessage', "You Must Have Account To Do This Event");
        }else{
            $reviews = new Reviews;
        $reviews->customer_id = auth()->guard('customers')->user()->id;
        $reviews->customer_name = auth()->guard('customers')->user()->name;
        $reviews->review = $this->rating_stars;
        $reviews->commint = $this->commint;
        $reviews->product_id = $this->Product->id;
        $reviews->save();
        // dd($reviews);
        session()->put('review_id_' . $this->Product->id ,  true);
        $this->emit('RemoveFromCart' , 'Your Review Is Published');
        }
        // dd($this->commint);

        // $this->name =  $this->commit = '';
        // dd($this->commit);
    }
    public function AddToWithList($Product){
        // dd($Product);
        Cart::instance('wishlist')->add($Product['id'], $Product['name'] ,$this->quantity,  $Product['regular_price'])->associate('App\Models\Product');
        // notify('whats do you mean about borsers' , 'done Successful');
        $this->emit('addToCartSuccess');
        // notify('add to card successfuly');
    }
    public function AddToCart($Product){
        // dd($Product);
        Cart::instance('cart')->add($Product['id'], $Product['name'] ,$this->quantity,  $Product['regular_price'])->associate('App\Models\Product');
        // notify('whats do you mean about borsers' , 'done Successful');
        $this->emit('addToCartSuccess');
        // notify('add to card successfuly');
    }



    public function render()
    {
        // notify('whats do you mean about borsers' , 'done Successful');

        $this->Product = Product::with('Category')->where('slug' , $this->slug)->first();

        return view('livewire.site.show-product' ,
        [
            'Product' => $this->Product,
            'Products'=> Product::inRandomOrder()->limit(6)->get(),
        ]
    )->layout('layouts.theme');
    }
}
