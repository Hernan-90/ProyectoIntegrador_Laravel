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
        @foreach ($productoDetalle as $producto)
          <div class="">
            {{$producto->nombreproducto}}
          </div>
          <img src="/storage/productos/{{$producto->imagen}}" alt="">
          <form class="" action="/agregarAlCarrito" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$producto->id}}">
            <button type="submit">
              Agregar al Carrito
            </button>
          </form>
          @auth
            @if (Auth::user()->rol == 1)
              <a href="/editarProducto/{{$producto->id}}">Editar</a>
            @endif
          @endauth

        @endforeach

  </section>
@endsection
