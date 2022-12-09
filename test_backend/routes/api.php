<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PeticionController;
use App\Http\Controllers\CategoriaController;

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

Route::get('/usuarios', [UsuarioController::class, 'obtener']);
Route::get('/usuarios/{id}', [UsuarioController::class, 'mostrar']);
Route::post('/usuarios', [UsuarioController::class, 'crear']);
Route::put('/usuarios/{id}', [UsuarioController::class, 'actualizar']);
Route::delete('/usuarios/{id}', [UsuarioController::class, 'eliminar']);

Route::get('/categorias', [CategoriaController::class, 'obtener']);
Route::get('/categorias/{id}', [CategoriaController::class, 'mostrar']);
Route::post('/categorias', [CategoriaController::class, 'crear']);
Route::put('/categorias/{id}', [CategoriaController::class, 'actualizar']);
Route::delete('/categorias/{id}', [CategoriaController::class, 'eliminar']);

Route::get('/peticiones', [PeticionController::class, 'obtener']);
Route::get('/peticiones/{id}', [PeticionController::class, 'mostrar']);
Route::post('/peticiones', [PeticionController::class, 'crear']);
Route::put('/peticiones/{id}', [PeticionController::class, 'actualizar']);
Route::delete('/peticiones/{id}', [PeticionController::class, 'eliminar']);
