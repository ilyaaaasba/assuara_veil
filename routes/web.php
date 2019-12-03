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

Route::get('/', 'PageController@home');
Route::get('/login', 'PageController@login');
Route::get('/registration', 'PageController@registration');
Route::get('/detail/{stock}', 'stock_controller@show');
Route::get('/home/{user}', 'PageController@home_login');
Route::get('/cara_pesan.php', 'PageController@cara_pesan');

Route::post('/cek_regis', 'PageController@cek_regis');
Route::post('/cek_login', 'PageController@cek_login');
Route::post('/delete', 'PageController@delete');
Route::post('/admin_edit', 'PageController@admin_edit');
