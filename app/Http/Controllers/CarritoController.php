<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Producto;
use Auth;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $carrito = Carrito::where("user_id", Auth::user()->id)->where("estadoCompra", 0)->get();
      return view("carrito", compact("carrito"));
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
      $productoSeleccionado = Producto::find($req->id);
      $compra = new Carrito;

      $compra->name = $productoSeleccionado->nombreproducto;
      $compra->price = $productoSeleccionado->precio1;
      $compra->description = $productoSeleccionado->descripcion;
      $compra->picture = $productoSeleccionado->imagen;
      $compra->carritoNumero = $productoSeleccionado->carritoNumero;
      $compra->user_id = Auth::user()->id;
      $compra->estadoCompra = 0;


      $compra->save();

      return redirect("/lacocina");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $carrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrito $carrito)
    {
        //
    }

    public function delete(Request $req){
      $productoBorrado = Carrito::find($req->id);
      $productoBorrado->delete();
      return redirect("/carrito");
    }

    public function cierreCompra(Request $req){
      $compra = Carrito::where("user_id", Auth::user()->id)
                        ->where("estadoCompra", 0)
                        ->get();
      $carritoNumero = Carrito::max("carritoNumero") + 1;


      foreach ($compra as $item) {
        $item->estadoCompra = 1;
        $item->carritoNumero = $carritoNumero;
        $item->save();
      }

      return redirect("/");
    }

    public function historial() {
      $historial = Carrito::where("user_id", Auth::user()->id)
                            ->where("estadoCompra",1)
                            ->get()
                            ->groupBy("carritoNumero");

      return view("perfil", compact("historial"));
    }

}
