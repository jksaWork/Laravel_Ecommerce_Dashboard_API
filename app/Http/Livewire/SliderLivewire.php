<?php

namespace App\Http\Livewire;

use App\Models\HomeSlider;
use Livewire\Component;

class SliderLivewire extends Component
{
    public function render()
    {
        return view('livewire.slider-livewire' , [
            'Sliders' => HomeSlider::latest()->limit(5)->get(),
        ]);
    }
}
