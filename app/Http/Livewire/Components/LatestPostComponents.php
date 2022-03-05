<?php

namespace App\Http\Livewire\Components;

use App\Models\Product;
use Livewire\Component;

class LatestPostComponents extends Component
{
    public function render()
    {
        return view('livewire.components.latest-post-components',
        [
            'Prodcuts' => Product::latest()->limit(6)->get(),
        ]);
    }
}
