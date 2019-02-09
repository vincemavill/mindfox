<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blog_controller extends Controller
{
    public function index(){
    	return view('blog');
    }
}
