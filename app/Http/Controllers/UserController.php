<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;

use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    
    function login(Request $request){
        $credentials = $request->only('email', 'password');
        $remember = $request->remember == null ? false : true;
        if (Auth::attempt($credentials, $remember)) {
            $rememberTokenExpireMinutes = 120;

            $rememberTokenName = Auth::getRecallerName();

            Cookie::queue($rememberTokenName, Cookie::get($rememberTokenName), $rememberTokenExpireMinutes);

            $request->session()->regenerate();
            return redirect('home');
        }
        else{
            return redirect('login')->with('error', 'Email or Password is wrong!');
        }
    }

    function register(Request $request){
        $validatedData = Validator::make($request->all(), [
            'username' => ['required'],
            'email' => ['required', 'unique:users','email'],
            'password' => ['required', 'min:3'],
            'confirm_password' => ['same:password', 'required']
        ]);

        if ($validatedData->fails())
        {
            return redirect()->back()->withErrors($validatedData->errors());
        }

        $a = User::create(array(
            "username" => $request["username"],
            "email" => $request["email"],
            "password" => bcrypt($request["password"]),
            "role" => "User",
        ));
        // dd($a);
        return redirect('login');
    }

    function logout(){
        Auth::logout();
        return redirect('login')->with('error', 'Logged out!');
    }
}
