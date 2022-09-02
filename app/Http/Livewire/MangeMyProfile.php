<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class MangeMyProfile extends Component
{
    public function render()
    {
        return view('livewire.mange-my-profile', [
            'orders' => Order::where('customer_id', auth()->user()->id)->latest()->get(),
        ])
        ->layout('layouts.customer');
    }
}
