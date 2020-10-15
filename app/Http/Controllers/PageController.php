<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Shoe;

class PageController extends Controller
{
    function login(){
        return view('login');
    }

    function register(){
        return view('register');
    }

    function insertShoe(){
        return view('addShoe');
    }
}
