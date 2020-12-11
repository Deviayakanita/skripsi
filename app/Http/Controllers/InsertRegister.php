<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InsertRegister extends Controller
{
    public function insert()
    {
        User::create([
            'username' => 'adminn',
            'password' => Hash::make('qwerty123'),
            'level' => 0,
        ]);
        User::create([
            'username' => 'permatadmc',
            'password' => Hash::make('password'),
            'level' => 1,
        ]);
    }
}