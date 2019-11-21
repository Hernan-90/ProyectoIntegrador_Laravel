@extends('plantilla')

@section('cuerpo')

  <h2>Mis compras</h2>
    @forelse ($historial as $carritoNumero => $carr)
      <p>Carrito nº: {{$carritoNumero}}</p>
      <ul>
      @forelse ($carr as $item)
        <li>Producto: {{$item->name}}</li>
      @empty
        <p>No hay productos para este carrito.</p>
      @endforelse
      </ul>
    @empty
      <p>No hay compras.</p>
    @endforelse

@endsection
