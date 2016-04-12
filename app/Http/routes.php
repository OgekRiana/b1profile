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
    return view('home');
});

Route::get('/home', ['as'=>'home', function(){
	return View::make('home');
}]);
Route::get('/rate', ['as'=>'rate', function(){
	//return View::make('rate');
}]);
Route::get('/contact', ['as'=>'contact', function(){
	//return View::make('contact');
}]);

