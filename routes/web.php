<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\TestLivewire;
use App\Http\Livewire\HomeLivewire;
// use App\Http\Livewire\ShowProduct;
use App\Http\Controllers\CustomerLoginController;
use App\Http\Controllers\CustomerReqister;
use App\Http\Livewire\CheckOutLiverWire;
use App\Http\Livewire\Components\WishListComponenets;
use App\Http\Livewire\ContantUs;
use App\Http\Livewire\CustomerOrder;
use App\Http\Livewire\CustomerOrderDetails;
use App\Http\Livewire\Site\ShowProduct;

// use App\Http\Livewire\HomeLivewire;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('register-cusstomer' ,  [CustomerReqister::class , 'registerCustomer'])->name('register_customer');

Route::get('customer/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('test-livewire' ,  TestLivewire::class);
Route::get('products' , HomeLivewire::class)->name('products');
Route::post('products' , HomeLivewire::class)->name('products.post');

Route::get('product/{slug}' , ShowProduct::class)->name('show.product');
Route::get('cart' , App\Http\Livewire\Components\Cart::class)->name('cart');
Route::get('wishlist' , WishListComponenets::class)->name('wishlist');
Route::get('check-out' , CheckOutLiverWire::class)->name('checkout')->middleware('auth:customers');
Route::get('contact-us' , ContantUs::class)->name('contact');

Route::post('customer-login', [CustomerLoginController::class, 'Login'])->name('customer.login');

// protected Routd
Route::prefix('account')->group( function(){
    Route::middleware('auth:customers')->group(function(){
    Route::get('/my-orders', CustomerOrder::class)->name('my.ordres');
    Route::get('my-orders/{id}' ,CustomerOrderDetails::class)->name('customer.details');
    });
});
// Route::group('')
