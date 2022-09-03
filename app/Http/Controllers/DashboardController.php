<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Order;

class DashboardController extends Controller
{
    public function index(){
    $data['orders'] = Order::limit(5)->latest()->get();
    $data['customer_count'] = Customer::count();
    $data['order_count'] = Order::count();
    $data['order_income'] = Order::sum('total');
    $data['todays_orders'] = Order::where('created_at', 'like', date('Y-m-d') . "%")->count();
    return view('Admin.index', $data);
    }
}
