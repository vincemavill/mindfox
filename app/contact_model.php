<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class contact_model extends Model
{
    static public function email_receive($form){
    	$name = $form->input('name');
    	$email = $form->input('email');
    	$phone = $form->input('phone');
    	$subject = $form->input('subject');
    	$message = $form->input('message');

    	// echo $name."<br>";
    	// echo $email."<br>";
    	// echo $phone."<br>";
    	// echo $subject."<br>";
    	// echo $message."<br>";

     //    dd($form->all());

    	$query = DB::table('mail_receive')->insert(
		    ['name' => $name,
			'email' => $email,
			'phone' => $phone,
			'subject' => $subject,
			'message' => $message]
		);


    if(DB::connection()->getDatabaseName())
    {
     echo "connected successfully to database ".DB::connection()->getDatabaseName();
    }



        if($query) {
            echo "sent!";
        }
        else {
            echo "failed";
        }
	}


    static public function contact_no(){

        return DB::table('contactno_tbl')->where('type', '1')->get();
    }
    static public function contact_no_b(){

        return DB::table('contactno_tbl')->where('type', '2')->get();
    }

    static public function address(){
        return DB::table('address_tbl')->where('type', '1')->get();
    }

    static public function emails(){
        return DB::table('emails_tbl')->where('type', '1')->get();
    }
}
