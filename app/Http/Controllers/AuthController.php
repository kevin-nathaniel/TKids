<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login-admin');
    }

    public function login(Request $request)
    {
        
        $username = $request->input('username');

        if($username == "admin")
        {
            return redirect()->intended('/dashboard');
        }

        else 
        {
            return redirect()->intended('/dashboard-school');
        }



        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     if (Auth::user()->isAdmin()) {
        //         return redirect()->intended('/dashboard');
        //     }

        //     return redirect()->intended('/dashboard-school');
        // }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}