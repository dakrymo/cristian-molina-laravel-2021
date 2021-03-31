<?php

use App\Models\Empleado;
use Illuminate\Support\Facades\Route;
use App\Models\Empresa;

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

Route::get('testEmpresas', function(){

  /*   consulta 
    $empresa = Empresa::where('nit',959377413)->first();*/

    /* insertar
    $adidas = new Empresa;
    $adidas -> nit = '900000001';
    $adidas -> nombre = 'Adidas SA';
    $adidas -> save(); */

    /* Actualizar
    $adidas = Empresa::find(21);
    $adidas -> nombre = 'Adidas SAS';
    $adidas -> save(); */

    /* imprimir objetos
    dd($adidas); */


});

Route::get('testEmpleados', function () {
    $empleados = Empleado::where('codigo',1191)->first();
    dd($empleados);
});

Route::get('testEmpleados1', function () {
    $empleados1 = Empleado::where('nombre','Cristian Bonilla')->first();
    dd($empleados1);
});


Route::get('testEmpleados2', function () {
    $empleados2 = Empleado::where('lugar_nacimiento',1191)->first();
    dd($empleados2);
});


Route::get('testEmpleados3', function () {
    $empleados3 = Empleado::where('fecha_nacimiento','2005-08-22')->first();
    dd($empleados3);
});


Route::get('testEmpleados4', function () {
    $empleados4 = Empleado::where('telefono',6966759)->first();
    dd($empleados4);
});


Route::get('testEmpleados5', function () {
    $empleados5 = Empleado::where('estado','suspendido')->first();
    dd($empleados5);
});


Route::get('testEmpleados6', function () {
    $empleados6 = Empleado::where('empresa_id',7)->first();
    dd($empleados6);
});


Route::get('testEmpleados7', function () {
    $empleados7 = Empleado::where('id',76)->first();
    dd($empleados7);
});


Route::get('testEmpleados8', function () {
    $empleados8 = Empleado::where('cargo','officia')->first();
    dd($empleados8);
});


Route::get('testEmpleados9', function () {
    $empleados9 = Empleado::where('codigo',57624)->first();
    dd($empleados9);
});
