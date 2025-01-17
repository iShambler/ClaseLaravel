<?php

use App\Models\Juego;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MiController;
use \App\Http\Controllers\TareasController;
use \App\Http\Controllers\JuegosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mipagina',[MiController::class,'inicio']); 
Route::get('/mistareas',[TareasController::class,'index']); //Ruta - clase - metodo

Route::get('/Juegos', [JuegosController::class, 'index'])->name('listajuegos');
Route::get('/Juegos/{id}', [JuegosController::class, 'show'])->name('mostrarjuego');

#Route::resource('/Juegos', [JuegosController::class]);asi te hace todo el crud.



