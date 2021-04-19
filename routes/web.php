<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ProductoController;
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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/contact', function () {
    return view('pages.contact');
});

/* prueba consulta base de datos
Route::get('testEcommerce', function () {
    $producto = producto::find(2);
    dd($producto->categoria);
}); */

Route::resource('productos',ProductoController::class);
Route::resource('carrito',CarritoController::class);