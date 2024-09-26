<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{
    //
    public function saveData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'El municipio se guardó con éxito',
            ]);
    }
    public function updateData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'El municipio se actualizó con exito',
            ]);
    }
    public function getData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'El municipio se cargó con exito',
            ]);
    }
    public function deleteData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'El municipio se eliminó con exito',
            ]);
    }
}
