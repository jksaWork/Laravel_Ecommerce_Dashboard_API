<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    // Overwrite Boot Model Function -----------------------
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            $post->slug = Str::slug($post->name);
            // $post->save();
        });
    }


    public function getStatusAttribute($key)
    {
        // dd($key);
        return $key == 1 ? '<span class="badge badge-success"> active</span>' : "<span class='badge badge-warning'> not active </span>";
    }
}
