<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class CustomerOrder extends Component
{
    public function CancelOrder($id){
        $order = Order::find($id);
        $order->status = 'canceld';
        // dd($order);
        $order->canceled_at = now();
        $order->save();
        $this->emit('RemoveFromCart' ,  'Order Was Canceld SccuessFul');
        // $this->render();
    }
    public function render()
    {
        $orders = Order::where('customer_id', auth()->user()->id)->get();
        return view('livewire.customer-order', [
            'orders' => $orders,
        ])->layout('layouts.customer');
    }
}
