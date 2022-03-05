<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Traits\CartTrats;
use Livewire\Component;
use Livewire\WithPagination;
class HomeLivewire extends Component
{
    use WithPagination , CartTrats;
    public $PaginateZise = 12;
    public $SortBy;
    public $public_id;
    public $search;

    public function mount(){
        $this->fill(request()->only('search'));
    }


    public function ProductWithCategoryId($id){
        $this->public_id = $id;
    }


    public function render()
    {
        // dd();

       if(!$this->public_id){
        $Products =  Product::when($this->SortBy , function($q , $SortBy){
            return  $q->orderBy($SortBy, 'DESC');
        })
        ->when($this->search , function($q , $search){
            // dd($search);
            return $q->where('name', 'like' ,"%{$search}%")
                ->orWhere('short_description', 'like', "%{$search}%")
                ->orWhere('description', 'like' , "%{$search}%");
        })
        ->paginate($this->PaginateZise);
       }else{
        $Products =  Product::where('category_id', $this->public_id)->when($this->SortBy , function($q , $SortBy){
            return  $q->orderBy($SortBy, 'DESC');
        })->paginate($this->PaginateZise);
       }


        return view('livewire.home-livewire',
        [
            'products' => $Products ,
            'Categories'=> Category::get(),
        ]
        )->layout('layouts.theme');
    }
}
