<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PageController extends Controller
{
    function login(){

        if(Auth::check()){
            return redirect('home');
        }
        return view('login');
    }

    function register(){

        if(Auth::check()){
            return redirect('home');
        }
        return view('register');
    }
}
