<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comment', function(){
	return '<a href="feedback">Click Me</a>';
});

Route::get('/feedback', function(){
	return 'Thank You';
});

Route::get('/calc/{num1}/{num2}', function($num1, $num2){
	return $num1 + $num2;
});