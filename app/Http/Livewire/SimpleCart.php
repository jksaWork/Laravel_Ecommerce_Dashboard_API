<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SimpleCart extends Component
{
    protected $listners = ['addToCartSuccess'];
    public function addToCartSuccess(){
        $this->render();
    }
    public function render()
    {
        return view('livewire.simple-cart');
    }
}
