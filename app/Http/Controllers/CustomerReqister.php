<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerReqister extends Controller
{
    public function registerCustomer(Request $request){
        $validaor =  $request->validate(
            [
                'f_name' => 'required',
                'l_name' => 'required',
                'email' => 'required|email|unique:customers,email',
                'password' => 'required',
                'phone' => 'required',
            ]);
            $validaor['name'] = $request->f_name . ' ' . $request->l_name;
            $customer = Customer::create($validaor);
            Auth::loginUsingId($customer->id);
            notify()->success('You Account Has Register Now  You Can Shop And Rateing The Product');
            return \redirect()->to('/');
            // if($validaor->hasError()) return
        }
}
