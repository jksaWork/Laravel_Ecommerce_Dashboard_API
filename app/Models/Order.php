<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
   public  $orderStatus = ['ordered' =>  'badge-info' , 'deliverd' => 'badge-success' , 'canceld' => 'badge-success'];
    // methods
    public function getStatusWithSpan(){
        return "<span class='badge {$this->orderStatus[$this->status]} '> $this->status</span>";
    }

    public function OrderItem(){
        return $this->hasMany(OrderItem::class);
    }

    public function Shiping(){
        return $this->hasMany(Shiping::class);
    }

    public function Transaction(){
        return $this->hasOne(Transaction::class);
    }
}
