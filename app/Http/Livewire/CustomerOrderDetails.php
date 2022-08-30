<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class CustomerOrderDetails extends Component
{
    public $order;
    public function mount($id){
        $this->order = Order::find($id);
    }
    public function render()
    {
        return view('livewire.customer-order-details',
        [
            'order' => $this->order
        ]
        )->layout('layouts.customer');
    }
}
