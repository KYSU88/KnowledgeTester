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

// Admin routes
Route::get('admins', 'AdminsController@index');
Route::get('admins/{user}', 'AdminsController@show');
Route::get('admins/{user}/edit', 'AdminsController@edit');
Route::patch('admins/{user}', 'AdminsController@update');
Route::delete('admins/{user}', 'AdminsController@destroy');
// Teacher routes
Route::get('teachers', 'TeachesController@index');

Route::get('/home', 'HomeController@index')->name('home');

