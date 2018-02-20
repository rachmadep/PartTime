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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'HomeController@index');
Route::get('1', 'HomeController@index1');
Route::get('search', 'HomeController@search');
Route::get('kerja', 'HomeController@kerja');
Route::get('interview', 'DashboardController@interview');
Route::get('input-profil', 'DashboardController@input-profil');
Route::get('akun', 'DashboardController@akun');
Route::get('buat-lowongan', 'DashboardController@buat-lowongan');


// Route::get('about', 'HomeController@about');

Auth::routes();

Route::get('/home', 'HomeController@index');
