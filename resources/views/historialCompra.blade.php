@extends('plantilla')

@section('cuerpo')

  <h2>Mis compras</h2>
    @foreach ($historial as $carritoNumero => $carr)
      <p>Carrito numero: {{$carritoNumero}}</p>
      <ul>
      @foreach ($carr as $item)
          <li>Producto: {{$item->name}}</li>
        @empty
<p>No hay productos para este carrito.</p>
      @endforeach
    </ul>
  @empty
    <p>No hay compras.</p>
    @endforeach


@endsection
