<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Http\Controllers\HomeController;use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     **
    p//rotected $redirectTo = RouteServiceProvider::HOME;

    public function() authenticated()
    {
        if(Auth::user()-> role == '1')// admin
        {
            return redirect('/dashboard');
        }

        else if(Auth::user()-> role == '0')//user
        {
            return redirect('/dashboard-school');
        }

        else
        {
            return redirect('/');
        }

    }    /**
     * Create a new controller instance.
     *
     * @return void
     */
     
}