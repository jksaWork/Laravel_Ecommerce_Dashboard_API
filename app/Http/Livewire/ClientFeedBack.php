<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ClientFeedBack extends Component
{
    public function render()
    {

        return view('livewire.client-feed-back',
        [
        'Feeds' => \App\Models\Contant::limit(5)->get(),
        ]
    );
    }
}
