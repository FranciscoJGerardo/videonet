<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;    

class RegisterController extends Controller
{
    function index(){
        return view('auth.Register');
    }
    function store(Request $request){
       $request->validate([
              'name'=>'required',
              'email'=>'required|email',
              'password'=>'required|confirmed'
       ]);

         $user = User::create([
              'name'=>$request->name,
              'email'=>$request->email,
              'password'=>Hash::make($request->password)
         ]);
         

            auth()->attempt($request->only('email','password'));
            return redirect()->route('dashboard');
    }

}
