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
require 'auth/admin.php';

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/conta', 'UserController@profile')->name('profile')->middleware('auth');
Route::post('/conta/atualizar', 'UserController@profileUpdate')->name('profile.update')->middleware('auth');
