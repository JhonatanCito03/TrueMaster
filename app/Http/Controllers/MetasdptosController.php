<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MetasdptosController extends Controller
{
    //
    public function saveData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'Las metas del departamento se guardaron con éxito',
            ]);
    }
    public function updateData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'Las metas del departamento se actualizaron con exito',
            ]);
    }
    public function getData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'Las metas del departamento se cargaron con exito',
            ]);
    }
    public function deleteData(Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'Las metas del departamento se eliminaron con exito',
            ]);
    }
}
