<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    	// $admin = 'hallo';
    	// $list_admin = ['ketua','wakil','anggota'];
    	// return view ('coba',['coba1' => $admin ,'coba2' => $list_admin]);
    
    	return view('adminLTE');	
    }

}
