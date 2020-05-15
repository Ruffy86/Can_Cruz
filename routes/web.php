<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::resource('client', 'ClientController')->middleware('auth');

Route::get('/client', 'ClientController@index')->name('client.index')->middleware('auth');
Route::get('/client/create', 'ClientController@create')->name('client.create');
Route::post('/client/store', 'ClientController@store')->name('client.store');
Route::get('/client/{client}/edit', 'ClientController@edit')->name('client.edit')->middleware('auth');
Route::put('/client/{client}', 'ClientController@update')->name('client.update')->middleware('auth');
Route::get('/client/{client}', 'ClientController@show')->name('client.show')->middleware('auth');
Route::delete('/client/{client}', 'ClientController@index')->name('client.destroy')->middleware('auth');

Route::get('/client/reservation', 'ClientController@reservation')->name('client.reservation');
Route::get('/room/{client}/selectRoom', 'ClientController@selectRoom')->name('client.selectRoom');
Route::get('/room/{client}/liberateRoom', 'ClientController@liberateRoom')->name('client.liberateRoom');