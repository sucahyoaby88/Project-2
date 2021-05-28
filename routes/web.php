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

Route::get('/home', 'PageController@home');

Route::get('/mobil', 'mobilcontroller@mobil');
Route::get('mobil/create', 'mobilcontroller@create');
Route::post('mobil', 'mobilcontroller@store');
Route::get('mobil/{mobil}', 'mobilcontroller@show');
Route::get('mobil/{mobil}/edit', 'mobilcontroller@edit');
Route::post('mobil/{mobil}/update', 'mobilcontroller@update');
Route::get('mobil/{mobil}/delete', 'mobilcontroller@delete');
Route::get('mobil_cetak', 'mobilcontroller@cetak_pdf');

Route::get('/admin', 'admincontroller@admin');
Route::get('admin/{admin}/editadmin', 'admincontroller@edit');
Route::post('admin/{admin}/update', 'admincontroller@update');
Route::get('admin/{admin}/delete', 'admincontroller@delete');
Route::get('admin_cetak', 'admincontroller@cetak_pdf');

Route::get('/user', 'usercontroller@user');
Route::get('user/{user}/edituser', 'usercontroller@edit');
Route::post('user/{user}/update', 'usercontroller@update');
Route::get('user/{user}/delete', 'usercontroller@delete');
Route::get('user_cetak', 'usercontroller@cetak_pdf');

Route::get('/datamobil', 'mobilcontroller@datamobil');
Route::get('/datamobil', 'mobilcontroller@datamobil');

Route::get('datamobil/{mobil}/form', 'mobilcontroller@formbuy');
Route::post('datamobil/formbuy2', 'mobilcontroller@store2');
Route::get('datamobil/formbuy2', 'mobilcontroller@formbuy2');
Route::post('datamobil/transaksi', 'mobilcontroller@store3');
Route::get('datamobil/transaksi', 'mobilcontroller@transaksi');

Route::get('penjualan_cetak/{penjualan}', 'mobilcontroller@struk');

Auth::routes();

Route::get('/logout', 'auth\LoginController@logout');