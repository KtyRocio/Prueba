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

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba/{nombre}' , 'PruebaController@prueba');

Route::resource('/trainers' , 'TrainerController');





Route::get ('/name/{name}/lastname/{lastname?}', function($name,$lastname='Grovas'){
	return 'Hi ... !!!!'. $name .$lastname; 
});

Route::get ('/mi_primera_ruta', function(){
	return ('Hi!!!!');
});