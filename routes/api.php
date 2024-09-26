<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;//ok
use App\Http\Controllers\CargosController; //ok
use App\Http\Controllers\MetasoficinasController;//ok
use App\Http\Controllers\MetasmunicipiosController;//ok
use App\Http\Controllers\MetasdptosController;
use App\Http\Controllers\OficinasController;
use App\Http\Controllers\DptosController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\RegionesController;
use App\Http\Controllers\PaisesController;


Route::controller(EmpleadosController::class)->group(function(){
    Route::post('/empleados/save','saveData');
    Route::put('/empleados/update','updateData');
    Route::get('/empleados/get','getData');
    Route::delete('/empleados/delete','deleteData');
});
//ok
Route::controller(CargosController::class)->group(function(){
    Route::post('/cargos/save','saveData');
    Route::put('/cargos/update','updateData');
    Route::get('/cargos/get','getData');
    Route::delete('/cargos/delete','deleteData');
});
//ok
Route::controller(MetasoficinasController::class)->group(function(){
    Route::post('/metasoficinas/save','saveData');
    Route::put('/metasoficinas/update','updateData');
    Route::get('/metasoficinas/get','getData');
    Route::delete('/metasoficinas/delete','deleteData');
});
//ok
Route::controller(MetasmunicipiosController::class)->group(function(){
    Route::post('/metasmunicipios/save','saveData');
    Route::put('/metasmunicipios/update','updateData');
    Route::get('/metasmunicipios/get','getData');
    Route::delete('/metasmunicipios/delete','deleteData');
});
//ok
Route::controller(MetasdptosController::class)->group(function(){
    Route::post('/metasdptos/save','saveData');
    Route::put('/metasdptos/update','updateData');
    Route::get('/metasdptos/get','getData');
    Route::delete('/metasdptos/delete','deleteData');
});
//ok
Route::controller(OficinasController::class)->group(function(){
    Route::post('/oficinas/save','saveData');
    Route::put('/oficinas/update','updateData');
    Route::get('/oficinas/get','getData');
    Route::delete('/oficinas/delete','deleteData');
});
//ok
Route::controller(MunicipiosController::class)->group(function(){
    Route::post('/municipios/save','saveData');
    Route::put('/municipios/update','updateData');
    Route::get('/municipios/get','getData');
    Route::delete('/municipios/delete','deleteData');
});
//ok
Route::controller(DptosController::class)->group(function(){
    Route::post('/dptos/save','saveData');
    Route::put('/dptos/update','updateData');
    Route::get('/dptos/get','getData');
    Route::delete('/dptos/delete','deleteData');
});
//ok
Route::controller(RegionesController::class)->group(function(){
    Route::post('/regiones/save','saveData');
    Route::put('/regiones/update','updateData');
    Route::get('/regiones/get','getData');
    Route::delete('/regiones/delete','deleteData');
});
//ok
Route::controller(PaisesController::class)->group(function(){
    Route::post('/paises/save','saveData');
    Route::put('/paises/update','updateData');
    Route::get('/paises/get','getData');
    Route::delete('/paises/delete','deleteData');
});

