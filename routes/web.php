<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MapeadoAlmussafesController;
use App\Http\Controllers\SugerenciaController;

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

//Home
Route::get('/', [HomeController::class, 'showHome'])->name('home');

//Mapeado
Route::get('/mapeado', [MapeadoAlmussafesController::class, 'showMapeadoAlmussafes'])->name('mapeado');

//Muestra una área detallada
Route::get('/areas/{id}', [MapeadoAlmussafesController::class, 'showArea'])
      ->whereNumber('id')          // opcional: asegura que sea numérico
      ->name('showarea');


//Sugerencias
Route::get('/sugerencias', function () {
    return view('sugerencias'); // tu vista con el formulario
})->name('sugerencias.index');

Route::post('/sugerencias', [SugerenciaController::class, 'store'])->name('sugerencias.store');