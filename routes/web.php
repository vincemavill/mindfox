<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', 'home_controller@commingsoon');
Route::get('testing/', 'home_controller@index');
Route::get('testing/home', 'home_controller@index');
// Route::get('/who_we_are', 'whoweare_controller@index');
Route::get('testing/what_we_do', 'whatwedo_controller@index');
Route::get('testing/contact', 'contact_controller@index');
Route::get('testing/blog', 'blog_controller@index');


Route::post('testing/send_mail','contact_controller@email_submit');

// ADMIN
Route::get('login', 'admin_controller@login');

Route::group(['middleware' => 'check_account'], function () {

	Route::get('admin', 'admin_controller@admin');
	Route::get('admin/delete', 'admin_controller@remove_data');
	Route::get('admin/add', 'admin_controller@add_data');

});



Route::post('admin', 'admin_controller@admin');



