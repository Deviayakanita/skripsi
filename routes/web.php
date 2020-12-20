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
    return view('auth/login');
});

Route::get('/regis', 'App\Http\Controllers\InsertRegister@insert');


Auth::routes(); 

Route::get('/admin', 'App\Http\Controllers\AdminController@index') -> middleware('auth');

//route peserta didik crud
Route::resource('pesertadidik', 'App\Http\Controllers\PesertadidikController');
Route::get('list', 'App\Http\Controllers\PesertadidikController@list');	
Route::get('editpesertadidik/edit/{id}', 'App\Http\Controllers\PesertadidikController@edit');	
Route::patch('pesertadidikedit/{id}', 'App\Http\Controllers\PesertadidikController@editpesertadidik');	
//route orang tua crud
Route::resource('orangtua', 'App\Http\Controllers\OrangtuaController');

//route mutasi masuk crud
Route::resource('mutasimasuk', 'App\Http\Controllers\MutasimasukController');

//route mutasi keluar crud
Route::resource('mutasikeluar', 'App\Http\Controllers\MutasikeluarController');

//route alumni crud
Route::resource('alumni', 'App\Http\Controllers\AlumniController');


//Route user admin
//Route user kepala sekolah


//Route peserta didik oleh admin
//Route orang tua oleh admin
//Route mutasi masuk oleh admin
//Route mutasi keluar oleh admin
//Route alumni oleh admin


//Route peserta didik oleh kepala sekolah
//Route orang tua oleh kepala sekolah
//Route mutasi masuk didik oleh kepala sekolah
//Route mutasi keluar oleh kepala sekolah
//Route alumni oleh kepala sekolah
//Route statistik oleh kepala sekolah


//Route statistik peserta didik 
//Route statistik mutasi  
//Route statistik alumni 

//Route E-Report peserta didik 
//Route E-Report orang tua 
//Route E-Report mutasi masuk
//Route E-Report mutasi keluar
//Route E-Repor alumni




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
