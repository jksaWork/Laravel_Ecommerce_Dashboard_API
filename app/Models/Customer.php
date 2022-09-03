<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Customer extends Authenticatable
{
    use HasFactory;
    public $Status = ['badge-danger','badge-success'];
    protected $fillable = [
        'name',
        'email',
        'phone',
        'photo',
        'password',
    ];

    public function  Orders(){
        return $this->hasMany(Order::class);
    }

    public function getStatusWithSpan(){
        $statusString = $this->status ? 'Active' :'Not Active';
        return "<span class='badge {$this->Status[$this->status ?? 0]} '> $statusString </span>";
    }

}
