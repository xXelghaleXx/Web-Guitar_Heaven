<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login()
    {
        $credentials = request()->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            request()->session()->regenerate();
            return redirect('/');

        }
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('main');
    }

    public function register(Request $request){

        User::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/');
    }
}
