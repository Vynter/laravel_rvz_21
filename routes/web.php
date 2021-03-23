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
//Route::delete("/clients/client",'ClientsController@destroy'); ca marche avec la methode('delete') dans un formulaire
Route::get('/clients/{client}/delete', 'ClientsController@destroy');
//pour tt regroupé //Route::resource('/clients', 'ClientsController');
// Contacte
Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');