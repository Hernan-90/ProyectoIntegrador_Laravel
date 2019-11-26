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
        {{-- @dd($productoDetalle) --}}
        @foreach ($productoDetalle as $producto)
          <div class="">
            {{$producto->nombreproducto}}
          </div>
          <img src="/storage/productos/{{$producto->imagen}}" alt="">
          <button type="submit" name="button">
            Agregar al Carrito
          </button>
        @endforeach

  </section>
@endsection
