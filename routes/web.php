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
    return view('umum/welcome');
});

Auth::routes();


//Login
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'],function(){


Route::get('/admin', function () {
    return view('/admin/menuawal');
})->name('admin');

Route::get('/user', function () {
    return view('/admin/master/datauser');
})->name('user');

Route::get('/shift', function () {
    return view('/admin/master/datashift');
})->name('shift');


Route::get('/pegawai', function () {
    return view('/admin/master/datapegawai');
})->name('pegawai');


Route::get('/inputabsensi', function () {
    return view('/admin/transaksi/inputabsensi');
})->name('inputabsensi');




Route::get('/laporanabsen', function () {
    return view('/admin/laporan/laporanabsensi');
})->name('laporanabsen');

Route::get('/laporangaji', function () {
    return view('/admin/laporan/laporangaji');
})->name('laporangaji');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/testpdf', 'HomeController@cobapdf');
