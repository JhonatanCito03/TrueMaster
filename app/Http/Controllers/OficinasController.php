<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OficinasController extends Controller
{
    //
    public function saveData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'La oficina se guardó con éxito',
            ]);
    }
    public function updateData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'La oficina se actualizó con exito',
            ]);
    }
    public function getData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'La oficina se cargó con exito',
            ]);
    }
    public function deleteData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'La oficina se eliminó con exito',
            ]);
    }
}
