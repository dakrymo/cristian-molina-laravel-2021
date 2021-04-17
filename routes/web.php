<?php

use App\Http\Controllers\ProductoController;
use App\Models\categoria;
use Illuminate\Support\Facades\Route;
use App\Models\cliente;
use App\Models\producto;
use App\Models\ordene;

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

Route::get('/contact', function () {
    return view('pages.contact');
});

/* prueba consulta base de datos
Route::get('testEcommerce', function () {
    $producto = producto::find(2);
    dd($producto->categoria);
}); */

Route::resource('productos',ProductoController::class);