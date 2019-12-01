@extends('plantilla')

@section('cuerpo')
  <div class="historial">
    <h2>Mis compras</h2>
      @foreach ($historial as $carritoNumero => $carr)
        <p>Carrito numero: {{$carritoNumero}}</p>
        @forelse ($carr as $key => $value)
          <p>{{$value->name}}</p>
          <p>{{$value->price}}</p>
          <p>{{$value->description}}</p>
        @empty
          <p>No hay productos para este carrito.</p>
        @endforelse
      @endforeach
  </div>
@endsection
