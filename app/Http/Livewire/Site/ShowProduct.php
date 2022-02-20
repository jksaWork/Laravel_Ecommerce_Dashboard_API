<?php

namespace App\Http\Livewire\Site;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ShowProduct extends Component
{

    public $slug , $quantity = 1;

    public function mount($slug){
        $this->slug = $slug;
    }


    public function AddToCart($Product){
        // dd($Product);
        Cart::add($Product['id'], $Product['name'] ,$this->quantity,  $Product['regular_price'])->associate('App\Models\Product');
        // notify('whats do you mean about borsers' , 'done Successful');
        $this->emit('addToCartSuccess');
        // notify('add to card successfuly');
    }



    public function render()
    {
        // notify('whats do you mean about borsers' , 'done Successful');

        $Product = Product::with('Category')->where('slug' , $this->slug)->first();

        return view('livewire.site.show-product' ,
        [
            'Product' => $Product,
            'Products'=> Product::inRandomOrder()->limit(6)->get(),
        ]
    )->layout('layouts.theme');
    }
}
