@extends('plantilla')

@section('cuerpo')
  {{-- <section class="lacocina">
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
    </div> --}}
    {{-- <div class="productos_destacados">

        <div class="cat1">
          <h3>Dulces</h3>
        </div>
        <div class="cat2">
          <h3>Salados</h3>
        </div>
        <div class="cat3">
          <h3>Tortas</h3>
        </div>
        <div class="cat4">
          <h3>Panaderia</h3>
        </div>

    </div>
    <div class="categorias">

        <div class="cat1">
          <h3>Dulces</h3>
        </div>
        <div class="cat2">
          <h3>Salados</h3>
        </div>
        <div class="cat3">
          <h3>Tortas</h3>
        </div>
        <div class="cat4">
          <h3>Panaderia</h3>
        </div>

    </div> --}}
    <div class="contenedor_items">
      <div class="productos">
        <div class="cuadrado1">
          <div class="cuadrado2">
            <h1>PRODUCTOS</h1>
          </div>
        </div>
        <div class="productos_container">
          @foreach ($productoDetalle as $producto)
            <div class="productos_box">
              <div class="">
                {{$producto->nombreproducto}}
              </div>
              <img class="img_product" src="/storage/productos/{{$producto->imagen}}" alt="">
              <div class="">
                <p>${{$producto->precio1}}</p>
                  {{--<p>${{$producto->precio2}}</p>--}}
              </div>
              <div class="">
                {{$producto->descripcion}}
              </div>
              <form class="" action="/agregarAlCarrito" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$producto->id}}">
                <button class="carritoMas1" type="submit">
                  Agregar al Carrito
                </button>
              </form>
              @auth
                @if (Auth::user()->rol == 1)
                  <a href="/editarProducto/{{$producto->id}}">Editar</a>
                  <a href="/borrarProducto/{{$producto->id}}">Eliminar</a>
                @endif
              @endauth
            </div>
          @endforeach
        </div>
      </div>
      <div class="recetas">
        <div class="cuadrado3">
          <div class="cuadrado4">
            <h1>RECETAS</h1>
          </div>
        </div>
        <div class="recetas_container">
          @foreach ($recetaDetalle as $receta)
            <div class="recetas_box">
              <div class="">
                {{$receta->titulo}}
              </div>
              <img class="img_receta" src="/storage/recetas/{{$receta->foto_producto}}" alt="">
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
                <button class="guarda_Receta" type="submit">
                  Guardar RECETA
                </button>
              </form>
              @auth
                @if (Auth::user()->rol == 1)
                  <ul>
                    <li>
                    <a href="/editarReceta/{{$receta->id}}">Editar</a>
                   </li>
                    <li>
                    <a href="/borrarReceta/{{$receta->id}}">Eliminar</a>
                    </li>
                  </ul>
                @endif
              @endauth
            </div>
          @endforeach
        </div>
      </div>
    </div>

  </section>
@endsection
