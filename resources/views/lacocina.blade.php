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
          {{-- @dd($producto) --}}
          <div class="">
            {{$producto->nombreproducto}}
          </div>
          <img src="/storage/productos/{{$producto->imagen}}" alt="">
          <div class="">
            <p>${{$producto->precio1}}</p>
            <p>${{$producto->precio2}}</p>
          </div>
          <div class="">
            {{$producto->descripcion}}
            {{-- <button type="submit">
              Agregar al Carrito
            </button> --}}
          </div>
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
      </div>
    </div>
    <div class="Recetas">
      <div class="receta1">
        {{-- @dd($recetaDetalle) --}}
        @foreach ($recetaDetalle as $receta)
          <div class="">
            {{$receta->titulo}}
          </div>
          <img src="/storage/recetas/{{$receta->foto_producto}}" alt="">
          <div class="">
            {{$receta->ingredientes}}
          </div>
          <div class="">
            {{$receta->materiales}}
          </div>
          <div class="">
            {{$receta->preparacion}}
          </div>
          <form class="" action="/guardarReceta" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$receta->id}}">
            <button type="submit">
              Guardar RECETA
            </button>
          </form>
          @auth
            @if (Auth::user()->rol == 1)
              <a href="/editarReceta/{{$receta->id}}">Editar</a>
            @endif
          @endauth
        @endforeach
      </div>
    </div>

  </section>
@endsection
