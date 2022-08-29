<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class OrderDetails extends Component
{
    public $order;
    public function mount($id){
        $this->order = Order::with('OrderItem' , 'Transaction', 'Shiping')->find($id);
        // dd($this->order);
    }
    public function render()
    {
        return view('livewire.order-details', [
            'order' => $this->order,
        ])
        ->layout('layouts.master');
    }
}
