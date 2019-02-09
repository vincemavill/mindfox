<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin_model;
use Session;

class admin_controller extends Controller {
    public function login(){
    	return view('login');
    }

    public function admin(Request $form){

    	$result = admin_model::check_user($form);


    	if($result == 1){
            Session::put('session_account', $form->all());

            $address = admin_model::get_address();
            $emails = admin_model::get_emails();


            return view('admin', compact('address','emails'));
    	}
    	else {
    		return view('login');
    	}

    }

    public function remove_data(Request $form){
        
        admin_model::delete_data($form);
        
    }

    public function add_data(Request $form){

        admin_model::new_data($form);


   
    }
}
