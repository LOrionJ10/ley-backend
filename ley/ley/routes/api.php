<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*login*/
Route::post('/login', [App\Http\Controllers\LoginController::class, 'store']);


/*Articulo*/
Route::post('/ArticuloAgregar', [App\Http\Controllers\ArticuloController::class, 'store']);

Route::delete('/ArticuloEliminar/{id}', [App\Http\Controllers\ArticuloController::class, 'destroy']);

Route::get('/ArticuloConsultar/{id}', [App\Http\Controllers\ArticuloController::class, 'show']);
/*fin*/

/*Pasillo*/
Route::post('/PasilloAgregar', [App\Http\Controllers\PasilloController::class, 'store']);

Route::delete('/PasilloEliminar/{id}', [App\Http\Controllers\PasilloController::class, 'destroy']);

Route::get('/PasilloConsultar/{id}', [App\Http\Controllers\PasilloController::class, 'show']);

Route::post('/PasilloEditar/{id}', [App\Http\Controllers\PasilloController::class, 'update']);

/*fin*/

/*Reporte*/
Route::get('/ReporteConsultar/{id}', [App\Http\Controllers\ReporteController::class, 'show']);
/*fin*/

/*Load*/
Route::post('/LoadAgregar', [App\Http\Controllers\LoadController::class, 'store']);

Route::get('/LoadConsultar/{id}', [App\Http\Controllers\LoadController::class, 'show']);

Route::delete('/LoadEliminar/{id}', [App\Http\Controllers\LoadController::class, 'destroy']);

Route::post('/LoadEditar/{id}', [App\Http\Controllers\LoadController::class, 'update']);
/*fin*/

/*Tarea*/
Route::post('/TareaAgregar', [App\Http\Controllers\TareaController::class, 'store']);

Route::delete('/TareaEliminar/{id}', [App\Http\Controllers\TareaController::class, 'destroy']);
/*fin*/

/*Ubicacion*/

/*fin*/

/*Reserva*/
Route::get('/ReservaConsultar/{id}', [App\Http\Controllers\ReservaController::class, 'show']);

Route::post('/ReservaEditar/{id}', [App\Http\Controllers\ReservaController::class, 'update']);

/*fin*/
