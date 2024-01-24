<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('product')->group(function () {
    Route::get('/', function () {
        return "Todos";
    });

    Route::get('/{id}', function ($id) {
        return "Unico ".$id;
    });

    Route::post('/', function () {
        return "Creado";
    });

    Route::put('/{id}', function ($id) {
        return "Unico actualizar ".$id;
    });

    Route::delete('/{id}', function ($id) {
        return "Eliminado ".$id;
    });
 
});
