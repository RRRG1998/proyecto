<?php

use App\Http\Controllers\EstadoController;
use Illuminate\Support\Facades\Route;

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

Route::get('home', function () {
    return view('welcome');
})->name('home');

Route::get('estado/registrar', [EstadoController::class, 'create'])->name('estado.create');
Route::post('estado/guardar', [EstadoController::class, 'store'])->name('estado.store');
Route::get('estado/index', [EstadoController::class, 'index'])->name('estado.index');
