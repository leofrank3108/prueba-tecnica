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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'UserController@user')->name('home');
Route::delete('/home/{user}', 'UserController@destroy')->name('home.destroy');
Route::get('/edit/{user}', 'UserController@edit')->name('home.edit');
Route::put('/edit/{user}', 'UserController@update')->name('home.update');
