<?php

namespace App\Http\Livewire\Components;

use App\Traits\CartTrats;
use Livewire\Component;

class WishListComponenets extends Component
{
    use CartTrats;
    public function render()
    {
        return view('livewire.components.wish-list-componenets')
            ->layout('layouts.theme');
    }
}
