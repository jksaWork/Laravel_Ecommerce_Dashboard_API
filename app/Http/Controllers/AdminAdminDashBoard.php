<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAdminDashBoard extends Controller
{
    public function index(){
        return view('Admin.index');
    }
}
