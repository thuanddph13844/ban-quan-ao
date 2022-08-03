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
Route::get('testAdmin', 'DanhMucController@view');
Route::get('index', 'AdminController@index');
Route::get('shop', 'AdminController@shop');
Route::get('detail', 'AdminController@detailCl');
Route::get('contact', 'AdminController@contact');
Route::get('checkout', 'AdminController@checkout');
Route::get('cart', 'AdminController@cart');

//login
Route::get('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);
Route::middleware(['auth'])->group(
    function () {
        Route::get('danhmuc/listdanhmuc', 'DanhMucController@loadList')->name('route_BackEnd_danh_mucs');
        Route::match(['get', 'post'], 'danhmuc/add', 'DanhMucController@add')->name('route_BackEnd_danh_mucs_Add');
        Route::get('danhmuc/detail/{id}', 'DanhMucController@detail')->name('route_BackEnd_danh_mucs_Detail');
        Route::post('/danhmuc/update/{id}', 'DanhMucController@update')
            ->name('route_BackEnd_danh_mucs_Update');
        Route::get('danhmuc/delete/{id}', 'DanhMucController@delete')->name('route_BackEnd_danh_mucs_Delete');
    }
);
//đăng xuẩt
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@getLogout']);