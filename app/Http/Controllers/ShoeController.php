<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Shoe;

class ShoeController extends Controller
{
    function insertShoe(Request $request){
        $validatedData = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required', 'min:100'],
            'image' => ['required', 'image|mimes:jpeg,png,jpg,gif,svg'],
        ]);

        
        $uploadedFile = $request->image;
        $filename = $uploadedFile->store('images');

        if ($validatedData->fails())
        {
            return redirect()->back()->withErrors($validatedData->errors());
        }

        Image::make($file)->save();
        Shoe::create(array(
            "name" => $request["name"],
            "description" => $request["description"],
            "price" => $request["price"],
            "image" => storage_path('app/images/' . $filename),
        ));

        return redirect('home');
    }

    function shoeDetail(Request $request){
        $id = $request->id;
        $shoe = Shoe::where('id', '=', $id)->get();
        dd($shoe);
        return view('shoeDetail', ["shoe", $shoe]);
    }

}
