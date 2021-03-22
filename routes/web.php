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
    return view('layout');
});

Route::view('/contact', 'contact');


// controllers restfull

Route::get('/clients', 'ClientsController@index');
//add
Route::get('/clients/create', 'ClientsController@create');
//save
Route::post('/clients', 'ClientsController@store');
//detail
Route::get('/clients/{client}', 'ClientsController@show');
//edit
Route::get('/clients/{client}/edit', 'ClientsController@edit');
//update
Route::patch('/clients/{client}', 'ClientsController@update');
//delete
Route::get('/clients/{client}/delete', 'ClientsController@destroy');

//
//Route::ressource('/clients','ClientsController');
