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
Route::get('2', 'HomeController@index2');
Route::get('search', 'HomeController@search');
Route::get('kerja', 'HomeController@kerja');
Route::get('kerja/{id}', 'DashboardController@kerja');
Route::get('interview', 'DashboardController@interview');
// Route::get('input-profil', 'DashboardController@input-profil');
Route::get('akun', 'DashboardController@akun');
Route::get('lowongan-saya', 'DashboardController@lowongan_saya');
Route::get('tambah-lowongan', 'DashboardController@tambah_lowongan');
Route::post('tambah-lowongan/tambah', 'DashboardController@store_lowongan');
Route::get('pelamar', 'DashboardController@pelamar');


// Route::get('about', 'HomeController@about');

Auth::routes();
// Route::get('logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');
