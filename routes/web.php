<?php

use Illuminate\Support\Facades\Route;
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

// Ruta por defecto, si no entra en otra
Route::fallback(function (){
    return "<h1> Esta ruta no existe </h1>";
});

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::view("productos","productos");

Route::view("familia","familia");

Route::view("home","home");

Route::resource("tiendas", \App\Http\Controllers\TiendaController::class );

Route::resource("productos", ProductoController::class );

require __DIR__.'/auth.php';
