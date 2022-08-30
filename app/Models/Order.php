<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
   public  $orderStatus = ['ordered' =>  'badge-info' , 'deliverd' => 'badge-success' , 'canceld' => 'badge-danger'];
   public  $orderCustomer = ['ordered' =>  'badge--processing' , 'deliverd' => 'badge--shipped' , 'canceld' => 'badge--delivered'];
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

    public function OrderBadgeClass():string{
        return $this->orderCustomer[$this->status];
    }
}
