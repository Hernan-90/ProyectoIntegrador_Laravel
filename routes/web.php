<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get("/", "HomeController@index");

Route::get("/cuentas", "CuentasController@index")->name('cuentas') ;

Route::get("/contacto", function(){
  return view("contacto");
});

Route::get("/lacocina", "lacocinaController@index");
Route::get("/lacocina", "ProductoController@show");

Route::get("/carrito", "CarritoController@index")->middleware("auth");
Route::get("/historialCompra", "CarritoController@historial")->middleware("auth");

Route::get("/nuevoProducto", "ProductoController@create")->middleware("auth")->middleware('roles');
Route::post("/nuevoProducto", "ProductoController@store");

Route::get("/nuevaReceta", "RecetaController@create")->middleware("auth")->middleware('roles');
Route::post("/nuevaReceta", "RecetaController@store");
