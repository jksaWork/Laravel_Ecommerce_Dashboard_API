<?php
/*
*   ----------------------- admin route here -------------------------
*
*/

use App\Http\Controllers\AdminAdminDashBoard;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\AdminContactUs;
use App\Http\Livewire\AdminOrdersLivewire;
use App\Http\Livewire\OrderDetails;
use App\Http\Livewire\SettingLivewire;
use App\Models\HomeSlider;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route ;

Route::get('admin-dashboard' ,[DashboardController::class, 'index'])
    ->name('admin.dashboard'); # get  admin dashboard --------------------
// Route::post;
Route::resource('categories', CategoryController::class); # all category oprations -------------
Route::resource('products', ProductController::class ); # all Product Route -------------
Route::resource('homeSlider' , HomeSliderController::class);# all Home Slider Controller ---------------
Route::resource('customers' , CustomerController::class); #All Customer Routes
Route::resource('Coupons', CouponsController::class);
// orders
Route::get('orders' , AdminOrdersLivewire::class)->name('orders');
Route::get('order-details/{id}' , OrderDetails::class)->name('order.details');
// aAdmin contact us
Route::get('contact-us' , AdminContactUs::class)->name('admin.contact.us');
Route::get('setting' , SettingLivewire::class)->name('admin.setting');


