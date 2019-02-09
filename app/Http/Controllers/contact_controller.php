<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact_model;

use App\Mail\mail_respond;

use App\Mail\client_inquiry;

use Mail;
use DB;

class contact_controller extends Controller
{
    public function index(){

        $contactno = contact_model::contact_no();
        $contactno_b = contact_model::contact_no_b();
        $address = contact_model::address();
        $emails = contact_model::emails();


    	return view('contact', compact('contactno','contactno_b','address','emails'));
    }
    public function email_submit(Request $form){
    	
    	
    	$client_name = $form->input('name');
    	$client_email = $form->input('email');
    	$phone = $form->input('phone');
    	$subject = $form->input('subject');
    	$mymessage = $form->input('message');


        contact_model::email_receive($form);


        $contentmail = "Name: ".$client_name."
                        Email: ".$client_email."
                        Phone: ".$phone."
                        Message: ".$mymessage;


        $admin_email = 'mindfoxwebsite@gmail.com';

        $admin_name = 'Mindfox Admin';



      

// EMAIL RESPONDER

       Mail::send(new mail_respond());

       Mail::send(new client_inquiry());

        
        echo "last part";


    // if(DB::connection()->getDatabaseName())
    // {
    //  echo "connected successfully to database ".DB::connection()->getDatabaseName();
    // }

    	
    	
    }
}
