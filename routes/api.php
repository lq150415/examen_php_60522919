<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('autores', AutorController::class);

Route::apiResource('clientes', ClienteController::class);

Route::apiResource('libros', LibroController::class);

Route::apiResource('prestamos', PrestamoController::class);
