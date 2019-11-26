<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class lacocinaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $productoDetalle = Producto::all();
      return view("lacocina", compact('productoDetalle'));
    }
}
