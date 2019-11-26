@extends('plantilla')

@section('cuerpo')
  <section class="lacocina">
    <div class="formularios">
      <div class="login">
        <div class="cuadrado1">
          <div class="cuadrado2">
            <h1>Productos</h1>
          </div>
        </div>
      </div>
      <div class="register">
        <div class="cuadrado3">
          <div class="cuadrado4">
            <h1>Recetas</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="productos_destacados">
      <div class="producto1">
        @dd($productoDetalle)
        <img src="/storage/productos/{{$productoDetalle->imagen}}" alt="">
      </div>
      <div class="producto2">
        <img src="" alt="">
      </div>
      <div class="producto3">
        <img src="" alt="">
      </div>
      <div class="producto4">
        <img src="" alt="">
      </div>
    </div>
    <div class="productos">
      <div class="producto1">

      </div>

    </div>
    <div class="recetas">
      <div class="producto1">

      </div>
    </div>
  </section>
@endsection
