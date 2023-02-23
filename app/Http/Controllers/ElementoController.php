<?php

namespace App\Http\Controllers;

use App\Models\Elemento;
use Illuminate\Http\Request;

class ElementoController extends Controller
{
    public function updateEstatus($nombre, $estatus){

    }

    public function getEstatus(){
        $elementos = Elemento::all();
        $obj = [];
        foreach ($elementos as $elemento) {
            $obj[$elemento->nombre] = $elemento->estatus;
        }
        return response()->json($obj);
    }


function updateStatus($elementName, $status) {
    $elemento = Elemento::where('nombre', '=', $elementName)->first();
    //dd($elementName, $status, $elemento);
    $elemento->estatus = ($status =='true') ? 1 : 0;
    $elemento->save();
    return response()->json('true');
}
    
    

}
