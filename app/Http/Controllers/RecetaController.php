<?php

namespace App\Http\Controllers;

use App\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("recetas");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('/nuevaReceta');
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
        "titulo" => ['required', 'string', 'max:255'],
        "ingredientes" => ['required', 'string', 'max:255'],
        "materiales" => ['required', 'string', 'max:255'],
        "preparacion" => ['required', 'string', 'max:255'],
        "foto_producto" => ["file", "image"],
      ];

      $messages = [
        "required" => "El campo :attribute no puede estar vacio."
      ];

      $this->validate($req, $rules, $messages); //Si validamos tenemos que mostrar los errores al usuario.

      $ruta = $req->file('foto_producto')->store('public/recetas');
      $nombreImg = basename($ruta);

      $receta = new Receta();

      $receta->titulo = $req['titulo'];
      $receta->ingredientes = $req['ingredientes'];
      $receta->materiales = $req['materiales'];
      $receta->preparacion = $req['preparacion'];
      $receta->foto_producto = $nombreImg;

      $receta->save();

      return redirect('/lacocina');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $receta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta, $id)
    {
      $recetaAEditar = Receta::find($id);
      return view("editarReceta", compact("recetaAEditar"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
      $rules = [
        "titulo" => ['required', 'string', 'max:255'],
        "ingredientes" => ['required', 'string', 'max:255'],
        "materiales" => ['required', 'string', 'max:255'],
        "preparacion" => ['required', 'string', 'max:255'],
        "foto_producto" => ["file", "image"],
      ];

      $messages = [
        "required" => "El campo :attribute no puede estar vacio."
      ];

      $this->validate($req, $rules, $messages);
      $ruta = $req->file('foto_producto')->store('public/recetas');
      $nombreImg = basename($ruta);

      $receta = Receta::find($req->id);
      $receta->titulo = $req['titulo'];
      $receta->ingredientes = $req['ingredientes'];
      $receta->materiales = $req['materiales'];
      $receta->preparacion = $req['preparacion'];
      $receta->foto_producto = $nombreImg;
      $receta->save();
      return redirect('/lacocina');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        //
    }
}
