<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SignInRequest;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function signin(SignInRequest $signInRequest)
    {
        $credentials = $signInRequest->only('email', 'password');
        $signinAttempt = auth()->attempt($credentials);

        if ($signinAttempt) {
            $user = User::where('email', $signInRequest->email)->first();
            if($user->is_admin){
                return redirect('/history');
            }
            return redirect()->intended('/mainhome');
        }

        return redirect('/mainhome')->withError('Username / password salah!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login')->withSuccess('Berhasil logout!');
    }
}
