<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login()
    {
        $credentials = request()->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->route('welcome');
        }
        else{
            return redirect()->route('login')->withErrors(['email' => 'Email or password is incorrect']);
        }
    }
}
