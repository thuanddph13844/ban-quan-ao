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
Route::get('testAdmin', 'AdminController@view');
Route::get('danhmuc/listdanhmuc', 'AdminController@loadList')->name('route_BackEnd_danh_mucs');
Route::match(['get', 'post'], 'danhmuc/add', 'AdminController@add')->name('route_BackEnd_danh_mucs_Add');
Route::get('danhmuc/detail/{id}', 'AdminController@detail')->name('route_BackEnd_danh_mucs_Detail');
Route::post('/danhmuc/update/{id}', 'AdminController@update')
    ->name('route_BackEnd_danh_mucs_Update');
Route::get('index', 'AdminController@index');
Route::get('shop', 'AdminController@shop');
Route::get('detail', 'AdminController@detailCl');
Route::get('contact', 'AdminController@contact');
Route::get('checkout', 'AdminController@checkout');
Route::get('cart', 'AdminController@cart');
Route::get('testAdmin', 'AdminController@view');
//login
Route::get('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);