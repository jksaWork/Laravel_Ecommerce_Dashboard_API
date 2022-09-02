<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function Products(){
        return $this->belongsToMany(Product::class,'products_brands', 'brand_id' , 'product_id');
    }
}
