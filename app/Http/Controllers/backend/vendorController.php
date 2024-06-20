<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vendorController extends Controller
{
    
    public function dashboard(){

        return view('vendor.dashboard');
    }
}
