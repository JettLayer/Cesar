<?php

use App\Http\Livewire\Contador;
use App\Http\Livewire\UserIndex;
use App\Http\Livewire\UserCreate;
use App\Http\Livewire\UserUpdate;
use App\Http\Livewire\UserMostrar;
use App\Http\Livewire\CategoriaIndex;
use App\Http\Livewire\PeticionCreate;
use App\Http\Livewire\PeticionUpdate;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CategoriaCreate;
use App\Http\Livewire\CategoriaUpdate;
use App\Http\Livewire\PeticionMostrar;
use App\Http\Livewire\CategoriaMostrar;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AmiiboController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'login']);
Route::get('/users', [UsuarioController::class, 'index']);
Route::get('/productos', [ProductoController::class, 'productoIndex']);
Route::get('/todos', [AmiiboController::class, 'amiibo']);
Route::get('/asset', [AssetController::class, 'index']);
Route::get('/contador', Contador::class);
Route::get('/index', UserIndex::class);

Route::get('/usuarios', UserCreate::class);
Route::get('/usuarios/{id}', UserUpdate::class);
Route::get('/usuarios/{id}/mostrar', UserMostrar::class);

Route::get('/categorias', CategoriaCreate::class);
Route::get('/categorias/{id}', CategoriaUpdate::class);
Route::get('/categorias/{id}/mostrar', CategoriaMostrar::class);

Route::get('/peticiones', PeticionCreate::class);
Route::get('/peticiones/{id}', PeticionUpdate::class);
Route::get('/peticiones/{id}/mostrar', PeticionMostrar::class);
