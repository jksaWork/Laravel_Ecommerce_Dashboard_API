<?php

namespace App\Http\Livewire;

use App\Models\Brands;
use Livewire\Component;

class HomeProductWithBrands extends Component
{
    public $brands;
    public function mount()
    {
        $this->brands = Brands::with(
            ['products']
        )->limit(3)->get();
    }
    public function render()
    {
        return view(
            'livewire.home-product-with-brands',
            ['brands' => $this->brands]
        );
    }
}
