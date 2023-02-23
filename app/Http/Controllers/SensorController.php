<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function create($sensor, $valor)
    {
        try {
            $obj = ['sensor' => $sensor, 'valor' => $valor];
            $newObj = Sensor::create($obj);
            return response()->json($newObj);

        } catch (\Exception $ex) {
            return response()->json($ex->getMessage());
        }
    }

    public function all(){
        $data = Sensor::all();
        return response()->json($data);
    }
}