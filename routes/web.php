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
Route::get('danhmuc/listdanhmuc','AdminController@loadList') -> name('route_BackEnd_danh_mucs');
Route::match(['get','post'],'danhmuc/add', 'AdminController@add') ->name('route_BackEnd_danh_mucs_Add');
Route::get('danhmuc/detail/{id}','AdminController@detail') ->name('route_BackEnd_danh_mucs_Detail');
Route::post('/danhmuc/update/{id}', 'AdminController@update')
    ->name('route_BackEnd_danh_mucs_Update');
