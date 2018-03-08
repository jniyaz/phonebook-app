<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () { return view('home'); });

Route::get('/{name}', function(){ return redirect('/'); })->where('name', '[A-Za-z]+');

Route::resource('/phonebook', 'PhonebookController');

Route::post('getData', 'PhonebookController@getData');