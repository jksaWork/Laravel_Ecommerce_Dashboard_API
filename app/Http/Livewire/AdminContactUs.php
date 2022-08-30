<?php

namespace App\Http\Livewire;

use App\Models\Contant;
use Livewire\Component;

class AdminContactUs extends Component
{
    public function Delete($id){
        Contant::find($id)->delete();
    }
    public function render()
    {
        return view(
            'livewire.admin-contact-us',
            [
                'contact' => \App\Models\Contant::paginate(12),
            ]
        )->layout('layouts.master');
    }
}
