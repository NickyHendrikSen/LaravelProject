<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    
    function login(Request $request){
        $credentials = $request->only('email', 'password');
        $remember = $request->remember == null ? false : true;
        if (Auth::attempt($credentials, $remember)) {
            // Authentication passed...
            return redirect('home');
        }
        else{
            return redirect('login')->with('error', 'Email or Password is wrong!');
        }
    }

    function register(Request $request){
        $validatedData = $request->validate([
            'username' => ['required'],
            'email' => ['required', 'unique:users','email'],
            'password' => ['required', 'min:3'],
            'confirm_password' => ['same:password', 'required']
        ]);

        if ($validatedData->fails())
        {
            return redirect()->back()->withErrors($validatedData->errors());
        }

        User::create(array(
            "username" => $request["username"],
            "email" => $request["email"],
            "password" => bcrypt($request["password"])
        ));
        return redirect('home');
    }

    function logout(){
        Auth::logout();
        return redirect('login')->with('error', 'Logged out!');
    }
}
