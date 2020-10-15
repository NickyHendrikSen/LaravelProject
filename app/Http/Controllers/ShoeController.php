<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Shoe;
use Validator;

class ShoeController extends Controller
{
    function insertShoe(Request $request){
        
        $validatedData = Validator::make($request->all(), [
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required', 'numeric', 'min:100'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);
        // dd("test");
        
        $uploadedFile = $request->image;
        $filename = $uploadedFile->store('images');
        $onlyname = $uploadedFile->hashName();
        if ($validatedData->fails())
        {
            return redirect()->back()->withErrors($validatedData->errors());
        }

        // Image::make($file)->save();
        Shoe::create(array(
            "name" => $request["name"],
            "description" => $request["description"],
            "price" => $request["price"],
            "image" => 'images/' . $onlyname,
        ));

        return redirect('home');
    }

    function detail(Request $request){
        $id = $request->id;
        $shoe = Shoe::where('id', '=', $id)->first();
        // dd($shoe);
        return view('shoeDetail')->with("shoe", $shoe);
    }
    function cart($id){
        return view("cart");
    }

    function delete(Request $request){
        $id = $request->id;
        Storage::delete($filename);
        Item::where('id', $id)->delete();
        return redirect()->back();
    }

    function update(Request $request){
        return redirect()->back();
    }

    function add(){
        return view("addshoe");
    }

    function updateform($id){
        return view("updateshoe");
    }

}
