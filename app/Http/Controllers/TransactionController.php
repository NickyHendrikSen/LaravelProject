<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\TransactionDetail;
use App\Cart;
use Auth;

class TransactionController extends Controller
{
    public function history(){
        $transactions = Transaction::where("user_id", Auth::user()->id)->get();

        return view("transaction")->with("transactions", $transactions);
    }

    public function all(){
        $transactions = Transaction::get();

        return view("admintransaction")->with("transactions", $transactions);
    }

    public function checkout(){
        $user_id = Auth::user()->id; //Sudah ada middleware no need validation

        $date = now();

        //Insert header
        $transaction_id = Transaction::create(array(
            "user_id" => $user_id,
            "date" => $date
        ))->id;
        
        //Get cart
        $carts = Cart::where('user_id', $user_id)->get();

        foreach($carts as $cart){
            TransactionDetail::create(array(
                "transaction_id" => $transaction_id,
                "shoe_id" => $cart->shoe_id,
                "quantity" => $cart->quantity
            ));
        }
        
        //finally delete all cart items with such user
        Cart::where('user_id', $user_id)->delete();

        return redirect()->back();
    }
}
