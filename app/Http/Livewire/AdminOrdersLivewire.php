<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminOrdersLivewire extends Component
{
    public function UpdateOrderStatus($id , $status){
        $order = Order::find($id);
        $order->status = $status;
        if($status == 'deliverd'){
            $order->deliverd_at = now();
        }else{
            $order->canceled_at =now();
        }
        $order->save();
    }
    public function render()
    {
        $orders = Order::paginate(10);
        return view('livewire.admin-orders-livewire',
        ['orders' => $orders]
        )->layout('layouts.master');
    }
}
