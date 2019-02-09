<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class admin_model extends Model
{
	static public function check_user($form){
    	$username = $form->input('username');
    	$password = $form->input('password');

    	$query = DB::select("SELECT * FROM admin_tbl 
    						WHERE BINARY username = '".$username."'
    						AND BINARY password = '".$password."'");

        return count($query);



    }

    static public function get_address(){
    	return DB::table('address_tbl')->where('type', '1')->get();
    }

    static public function get_emails(){
    	return DB::table('emails_tbl')->where('type', '1')->get();
    }

    static public function delete_data($form){
        $delid =  $form->iddel;
        $table = $form->table;

        $query = DB::table($table)->where('id', $delid)->delete();

        if($query){
            echo "success";
        }
        
    }

    static public function new_data($form){
        $addinput =  $form->addinput;
        $table = $form->table;
        $column = $form->column;
        $type = $form->type;


        $query = DB::table($table)->insert([$column => $addinput, 'type' => $type]);

        if($query){
            echo "success";
        }
    }


}
