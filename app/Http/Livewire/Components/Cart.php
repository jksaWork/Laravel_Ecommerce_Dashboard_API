<?php

namespace App\Http\Livewire\Components;

use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
use Livewire\Component;
use App\Traits\CartTrats;

class Cart extends Component
{
    use CartTrats;

    public function render()
    {
        return view('livewire.components.cart')
        ->layout('layouts.theme');
    }
}
