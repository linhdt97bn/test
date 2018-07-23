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

Route::get('/', ['as' => 'trang-chu', 'uses' => 'PageController@getTrangChu']);

Route::post('dang-ky-khach', ['as' => 'dang-ky-khach', 'uses' => 'PageController@postDangKyKhach']);
Route::post('dang-ky-hdv', ['as' => 'dang-ky-hdv', 'uses' => 'PageController@postDangKyHDV']);
Route::post('dang-nhap', ['as' => 'dang-nhap', 'uses' => 'PageController@postDangNhap']);
Route::get('dang-xuat', ['as' => 'dang-xuat', 'uses' => 'PageController@getDangXuat']);
