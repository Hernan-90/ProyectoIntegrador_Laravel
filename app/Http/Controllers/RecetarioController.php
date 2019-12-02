<?php

namespace App\Http\Controllers;

use App\Recetario;
use App\Receta;
use Auth;
use Illuminate\Http\Request;

class RecetarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $favorito = Recetario::where("user_id", Auth::user()->id)
                          ->where("favorito", 1)
                          ->get();
      return view("recetario", compact("favorito"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
      $recetaGuardada = Receta::find($req->id);
      $recetaFavoria = new Recetario;

      $recetaFavoria->titulo = $recetaGuardada->titulo;
      $recetaFavoria->ingredientes = $recetaGuardada->ingredientes;
      $recetaFavoria->materiales = $recetaGuardada->materiales;
      $recetaFavoria->preparacion = $recetaGuardada->preparacion;
      $recetaFavoria->foto_producto = $recetaGuardada->foto_producto;
      $recetaFavoria->user_id = Auth::user()->id;
      $recetaFavoria->favorito = 1;

      $recetaFavoria->save();

      return redirect("/lacocina");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recetario  $recetario
     * @return \Illuminate\Http\Response
     */
    public function show(Recetario $recetario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recetario  $recetario
     * @return \Illuminate\Http\Response
     */
    public function edit(Recetario $recetario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recetario  $recetario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recetario $recetario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recetario  $recetario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recetario $recetario)
    {
        //
    }
}
