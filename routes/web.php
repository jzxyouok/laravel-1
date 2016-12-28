<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Teacher;
use App\Student;

Route::get('/', function () {
	// $var = Student::find(3)->teachers->first();
	// print_r($var);
	// var_dump($var);
	// return $var->name;
    // dd($var);
    return view('welcome',compact('var'));
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin/{pg?}', 'AdminController@index');