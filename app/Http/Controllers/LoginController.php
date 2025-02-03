<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    function index (){
        return view ('auth.Login');
    }

    function login(Request $req){
        $req->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        
        $credentials = $req->only('email','password');
        if(auth()->attempt($credentials)){
            $req->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->withErrors([
            'email'=>'The provided credentials do not match our records.'
        ]);
    }
}
