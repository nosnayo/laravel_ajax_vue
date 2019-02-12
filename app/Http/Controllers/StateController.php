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

        //otra forma de envio sin revisar
        //return view('index')->with('states', $states)
        //Otra forma arreglo
        /*return view('index')->with([
            'states' => 'el estado es',
            'otro' => 'el otro'
        ]);*/
    }

    public function getTowns(Request $request, $id){

        //Request o peticion mediante ajax
        //dd($id);
        if($request->ajax()){
            //llamada ak metodo del modelo(clase)
            $id_busqueda = $id + 1;
            $towns = Town::towns($id_busqueda);
            //respuesta en tipo json
            return response()->json($towns);

        }
    }

}
