@extends('plantilla')

@section('cuerpo')
  <div class="historial">
    <h2>Mis Recetas</h2>

      @foreach ($favorito as $receta)
        {{-- @forelse ($receta as $key => $value) --}}
          {{-- @dd($key) --}}
          <p>Nombre:{{$receta->titulo}}</p>
          <p>{{$receta->ingredientes}}</p>
          <p>{{$receta->materiales}}</p>
          <p>{{$receta->preparacion}}</p>
          <img src="/storage/recetas/{{$receta->foto_producto}}" alt="">
        {{-- @empty
          <p>No hay recetas guardadas.</p>
        @endforelse --}}
      @endforeach
  </div>
@endsection
