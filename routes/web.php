<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\ConcesionController;
use App\Http\Controllers\FormularioController;

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


Route::get('provincias', [ProvinciaController::class, 'index']);
Route::get('concesiones', [ConcesionController::class, 'index']);
Route::get('/', [FormularioController::class, 'index']);
Route::post('formulario', [FormularioController::class, 'store'])->name('formulario.store');
