<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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
        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }


    public function getStatusAttribute($key)
    {
        // dd($key);
        return $key == 1 ? '<span class="badge badge-success"> active</span>' : "<span class='badge badge-warning'> not active </span>";
    }
    public function Parent(){
        return $this->belongsTo(Self::class, 'parent_id');
    }

    public function IsParent(){
        return Self::where('parent_id' , $this->id)->count() > 0 ? true : false;
    }

    public function Childs(){
        return $this->hasMany(Self::class, 'parent_id');
    }

    public function scopeNotChild(Builder $query){
        return  $query->where('parent_id' , null);
    }
}
