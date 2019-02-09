<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class whatwedo_controller extends Controller
{
    public function index(){
    	return view('whatwedo');
    }
}
