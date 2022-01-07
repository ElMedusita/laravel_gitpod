<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ConciertoController;
use App\Http\Controllers\SesionController;

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


Route::get('reservas/pdf', [App\Http\Controllers\ReservaController::class, 'pdf'] )->name('reservas.pdf');
Route::get('artistas/pdf', [App\Http\Controllers\ArtistaController::class, 'pdf'] )->name('artistas.pdf');
Route::get('conciertos/pdf', [App\Http\Controllers\ConciertoController::class, 'pdf'] )->name('conciertos.pdf');


Route::resource('/artistas', ArtistaController::class);
Route::resource('/conciertos', ConciertoController::class);
Route::resource('/reservas', ReservaController::class);
Route::resource('/sesions', SesionController::class);

