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
Route::get('testAdmin','AdminController@view');
Route::get('listdanhmuc','AdminController@loadList');
Route::match(['get','post'],'add', 'AdminController@add') ->name('route_BackEnd_danh_mucs_Add');

