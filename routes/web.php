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

Route::get("/cuentas", "CuentasController@index")->name('cuentas');

Route::get("/lacocina", "lacocinaController@index");
Route::post("/agregarAlCarrito", "CarritoController@store")->middleware("auth");
Route::post("/guardarReceta", "RecetarioController@store")->middleware("auth");

Route::get("/recetario", "RecetarioController@index")->middleware("auth");

Route::get("/contacto", function(){
  return view("contacto");
});

Route::get("/perfil", "CarritoController@historial")->middleware("auth");

Route::get("/carrito", "CarritoController@index")->middleware("auth");
Route::post("/compraFinal", "CarritoController@cierreCompra");
Route::post("/borrarProducto", "CarritoController@delete");

// ACA SE CREAN NUEVOS PRODUCTOS Y RECETAS
Route::get("/nuevoProducto", "ProductoController@create")->middleware("auth")->middleware('roles');
Route::post("/nuevoProducto", "ProductoController@store");
Route::get("/nuevaReceta", "RecetaController@create")->middleware("auth")->middleware('roles');
Route::post("/nuevaReceta", "RecetaController@store");

// ACA SE EDITAN LOS PRODUCTOS Y RECETAS
Route::get("/editarProducto/{id}", "ProductoController@edit")->middleware("auth")->middleware('roles');
Route::post("/editarProducto/{id}", "ProductoController@update");
Route::get("/editarReceta/{id}", "RecetaController@edit")->middleware("auth")->middleware('roles');
Route::post("/editarReceta/{id}", "RecetaController@update");

// ACA SE ELIMINAN LOS PRODUCTOS Y RECETAS
Route::get("/borrarProducto/{id}", "ProductoController@delete")->middleware("auth")->middleware('roles');
Route::get("/borrarReceta/{id}", "RecetaController@delete")->middleware("auth")->middleware('roles');
