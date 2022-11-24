<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsolasController;
use App\Http\Controllers\VideojuegosController;

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

//Vista de videojuegos
/*
Route::get('/videojuegos', function () {
    return view('videojuegos');
});*/

//Vista de consolas-info
Route::get('/consolas/info', function () {
    return view('consolas/info');
});

Route::get('/consolas', [ConsolasController::class, 'index']);
//cuando llamo al método create de la clase ConsolasController, me devuelve la vista de consolas. --> return view('consolas/create');
Route::get('/consolas/create', [ConsolasController::class, 'create']);

//Vista de videojuegos

Route::get('/videojuegos', [VideojuegosController::class, 'index']);
Route::get('/videojuegos/create', [VideojuegosController::class, 'create']);
