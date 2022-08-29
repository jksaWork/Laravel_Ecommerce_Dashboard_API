<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class AdminOrdersLivewire extends Component
{
    public function render()
    {
        $orders = Order::paginate(10);
        return view('livewire.admin-orders-livewire',
        ['orders' => $orders]
        )->layout('layouts.master');
    }
}
