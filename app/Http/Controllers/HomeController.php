<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoe;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if($request->search){
            $shoes = Shoe::where('name', 'LIKE', '%' . $request->search . '%')->paginate(6);
        }
        else{
            $shoes = Shoe::paginate(6);
        }
        // dd($shoes);
        return view('home')->with("shoes", $shoes);
    }
}
