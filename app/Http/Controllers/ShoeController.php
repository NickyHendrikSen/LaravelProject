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
        
        if ($validatedData->fails())
        {
            return redirect()->back()->withErrors($validatedData->errors());
        }

        $uploadedFile = $request->image;
        $filename = $uploadedFile->store('images','public');

        // Image::make($file)->save();
        Shoe::create(array(
            "name" => $request["name"],
            "description" => $request["description"],
            "price" => $request["price"],
            "image" => $filename
        ));

        return redirect()->back()->with("success","saved");
    }

    function detail(Request $request){
        $id = $request->id;
        $shoe = Shoe::where('id', '=', $id)->first();
        // dd($shoe);
        return view('shoeDetail')->with("shoe", $shoe);
    }
    function cart($id){
        $shoe = Shoe::where("id","=",$id);

        if($shoe->exists()){
            $shoe = $shoe->first();
            return view("cart")->with("shoe", $shoe);
        }
        return abort(404);
    }

    function delete(Request $request){
        $id = $request->id;
        Storage::delete($filename);
        Item::where('id', $id)->delete();
        return redirect()->back();
    }

    function update(Request $request){
        $name = $request->name;
        $price = $request->price;
        $description = $request->description;
        Shoe::where('id',  $request->id)->update([
            "name" => $name,
            "price" => $price,
            "description" => $description
        ]);
        return redirect()->back()->with("success","saved");
    }

    function add(){
        return view("addshoe");
    }

    function updateform($id){
        $shoe = Shoe::where('id', $id)->first();
        return view("updateshoe")->with('shoe', $shoe);
    }

}
