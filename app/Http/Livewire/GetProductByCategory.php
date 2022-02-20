<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class GetProductByCategory extends Component
{
    public $PublicId;

    public function GetByCategoryId($id){
        $this->PublicId = $id;
    }
    public function render()
    {

            $Prodcuts = Product::with('Category')->when($this->PublicId , function($q , $PublicId){
                return $q->where('category_id', $PublicId);
            })->limit(8)->get();

        return view('livewire.get-product-by-category', [
            'Categories'=> Category::get(),
            'Prodcuts'=> $Prodcuts,
        ]);
    }
}
