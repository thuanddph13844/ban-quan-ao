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
Route::get('index', 'AdminController@index');
Route::get('shop', 'AdminController@shop');
Route::get('detail', 'AdminController@detail');
Route::get('contact', 'AdminController@contact');
Route::get('checkout', 'AdminController@checkout');
Route::get('cart', 'AdminController@cart');