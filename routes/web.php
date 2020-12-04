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
    return view('login');
});


Route::get('/admin', 'App\Http\Controllers\AdminController@index'); 


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



