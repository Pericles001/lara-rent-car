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

Route::get('/','App\Http\Controllers\CarController@index')->name('index');
Route::resource('/cars','App\Http\Controllers\CarController');
Route::resource('/commands', 'App\Http\Controllers\CommandController');
Route::get('/login','App\Http\Controllers\UsersController@login')->name('users.login');
Route::post('/auth','App\Http\Controllers\UsersController@auth')->name('users.auth');
Route::post('/logout','App\Http\Controllers\UsersController@logout')->name('users.logout');
Route::get('/register','App\Http\Controllers\UsersController@create')->name('users.create');
Route::post('/register','App\Http\Controllers\UsersController@register')->name('users.register');

