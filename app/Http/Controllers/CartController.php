<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(){
        return view("mycart");
    }

    public function update($id){
        return view("editcart");
    }
}
