<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminContactUs extends Component
{
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
