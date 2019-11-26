<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("productos");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('/nuevoProducto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
      $rules = [
      "nombreproducto" => "required|string|min:1|unique:productos,nombreproducto",
      "precio1" => "required|integer|min:1",
      "precio2" => "nullable|integer",
      "categoria_id" => "required|integer",
      "descripcion" => "required|string|min:1|max:250",
      "destacado" => "required|integer",
      "imagen" => "required|image",
      "ingredientes" => "required|string|min:1"
    ];
    $messages = [
      "string" => "El campo :attribute debe ser texto.",
      "min" => "El campo :attribute tiene un minimo de :min”.",
      "max" => "El campo :attribute tiene un máximo de :max",
      "integer" => "El campo :attribute debe ser un numero.",
      "unique" => "El campo :attribute se encuentra repetido.",
      "required" => "El campo :attribute debe estar completo."
    ];

    $this->validate($req, $rules, $messages);
    $ruta = $req->file('imagen')->store('public/productos');
    $nombreImg = basename($ruta);

    $producto = new Producto();
    $producto->nombreproducto = $req['nombreproducto'];
    $producto->precio1 = $req['precio1'];
    $producto->precio2 = $req['precio2'];
    $producto->categoria_id = $req['categoria_id'];
    $producto->descripcion = $req['descripcion'];
    $producto->destacado = $req['destacado'];
    $producto->ingredientes = $req['ingredientes'];
    $producto->imagen = $nombreImg;
    $producto->save();
    return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
