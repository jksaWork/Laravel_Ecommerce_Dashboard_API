<?php
/*
*   ----------------------- admin route here -------------------------
*
*/

use App\Http\Controllers\AdminAdminDashBoard;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\ProductController;
use App\Models\HomeSlider;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route ;

Route::get('admin-dashboard' ,[AdminAdminDashBoard::class, 'index'])
    ->name('admin.dashboard'); # get  admin dashboard --------------------
// Route::post;
Route::resource('categories', CategoryController::class); # all category oprations -------------
Route::resource('products', ProductController::class ); # all Product Route -------------
Route::resource('homeSlider' , HomeSliderController::class);# all Home Slider Controller ---------------
