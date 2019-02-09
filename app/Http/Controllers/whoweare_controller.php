<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class whoweare_controller extends Controller
{
    public function index(){
    	return view('whoweare');
    }
}
