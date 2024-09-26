<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    //
    public function saveData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'Empleado guardado con éxito',
            ]);
    }
    public function updateData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'El empleado actualizó con exito',
            ]);
    }
    public function getData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'Los datos del empleado se cargaron con exito',
            ]);
    }
    public function deleteData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'los datos del empleado se eliminaron con exito',
            ]);
    }
}
