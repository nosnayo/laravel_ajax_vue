<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\State;
use App\Town;

class StateController extends Controller
{
    public function index()
    {
        $states = State::all();
       	return view('index',compact('states'));
        


        //$products = \App\Product::paginate();
        //return view('home', compact('products'));

        //
        
        //return view('index',compact('state'));
        //return response()->json($data);
    }

}
