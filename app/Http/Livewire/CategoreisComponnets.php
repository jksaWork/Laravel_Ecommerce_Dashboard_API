<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoreisComponnets extends Component
{
    public function render()
    {
        $Categories = Category::NotChild()->get();
        return view('livewire.categoreis-componnets',
        [
            'Categories' => $Categories,
        ]);
    }
}
