<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegionesController extends Controller
{
    //
    public function saveData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'La Región se guardó con éxito',
            ]);
    }
    public function updateData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'La Región se actualizó con exito',
            ]);
    }
    public function getData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'La Región se cargó con exito',
            ]);
    }
    public function deleteData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'La Región se eliminó con exito',
            ]);
    }
}
