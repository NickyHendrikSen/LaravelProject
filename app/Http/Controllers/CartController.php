<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cart;
use Validator;

class CartController extends Controller
{
    public function show(){
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $total = 0;
        foreach($carts as $cart){
            $total += $cart->Shoe->price*$cart->quantity;
        }
        return view("mycart")->with("carts", $carts)->with("total", $total);
        // return view("mycart");
    }

    public function update($id){
        $cart = Cart::where('id', $id)->first();
        return view("editcart")->with('cart', $cart);
    }

    public function addCart(Request $request){
        $user_id = Auth::user()->id; // Ga usah di check lagi, udah pake middleware
        $quantity = $request->quantity;
        $shoe_id = $request->id;
        
        $validatedData = Validator::make($request->all(), [
            'quantity' => ['required', 'numeric', 'min:1']
        ]);
        
        if ($validatedData->fails())
        {
            return redirect()->back()->withErrors($validatedData->errors());
        }

        $check = Cart::where("shoe_id","=",$shoe_id)->where("user_id","=",$user_id);
        if($check->exists()){
            $cart = $check->first();
            $cart->quantity += $quantity;
            $cart->save();
        }
        else{
            Cart::create(array(
                "user_id" => $user_id,
                "quantity" => $quantity,
                "shoe_id" => $shoe_id
            ));
        }
        return redirect('home')->with("success","saved");
    }

    public function updateCart(Request $request){
        $validatedData = Validator::make($request->all(), [
            'quantity' => ['required', 'numeric', 'min:1']
        ]);
        
        if ($validatedData->fails())
        {
            return redirect()->back()->withErrors($validatedData->errors());
        }

        Cart::where('id', $request->id)->update(array(
            "quantity" => $request->quantity
        ));
        return redirect('cart')->with("success","saved");
    }
    
    public function delete(Request $request){
        $id = $request->id;
        $item = Cart::where('id','=',$id);
        if($item->exists()){
            $item->delete();
        }
        return redirect('cart')->with("success","saved");
    }
}
