<?php

namespace App\Models;

use App\Traits\ChangeStatusTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getImageAttribute($key)
    {
        return asset('assets/images/images/blogs/'. $key);
    }

    public function getStatusAttribute($key)
    {
        // dd($key);
        return $key == 1 ? '<span class="badge badge-success"> active</span>' : "<span class='badge badge-warning'> not active </span>";
    }
}
