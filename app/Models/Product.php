<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            $post->slug = Str::slug($post->name);
            $post->description = $post->description ? $post->description : 'jksa altignai osma';
            $post->sale_price = random_int(1, 100);
            // $post->save();
        });
    }
    protected $guarded = [];
    public function getImageAttribute($key)
    {
        return asset('assets/images/images/products/'. $key);
    }
    public function getSalePriceAttribute($key)
    {
        return number_format($key, 2);
    }

    public function getRegularPriceAttribute($key)
    {
        return number_format($key, 2);
    }
    public function Category(){
        return $this->belongsTo(Category::class);
    }

    public function Reviews(){
        return $this->hasMany(Reviews::class);
    }

    public function getStatusAttribute($key)
    {
        // dd($key);
        return $key == 1 ? '<span class="badge badge-success"> active</span>' : "<span class='badge badge-warning'> not active </span>";
    }
    public function getStockAttribute($key)
    {
        // dd($key);
        return $key == 'inStock' ? '<span class="badge badge-success"> in stock </span>' : "<span class='badge badge-warning'> out of stock </span>";
    }

    public function Brands(){
        return $this->belongsToMany(Brands::class, 'products_brands', 'product_id',  'brand_id');
    }

}
