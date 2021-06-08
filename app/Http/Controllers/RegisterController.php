<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class RegisterController extends Controller
{
    public function register(Request $request){
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password) ,
            'is_admin'=> 0
        ]);

        return redirect('/login')->with('success', 'berhasil regist!');
    }
}
