@extends('plantilla')

@section('cuerpo')
  <div class="containercarrito">
  <h2>Mi carrito</h2>
    <table class="table">
      <thead>
        <tr>
          {{-- <th scope="col">#</th> --}}
          <th scope="col">Producto</th>
          <th scope="col">Cantidad</th>
          <th scope="col"></th>
          <th scope="col">Precio</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($carrito as $compra)
          <tr>
            {{-- <th scope="row">{{$compra->id}}</th> --}}
            <td>{{$compra->name}}</td>
            <td>{{$compra->cant}}</td>
            <td>
              <form class="" action="/borrarProducto" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$compra->id}}">
                <button type="submit" name="button">Eliminar</button>
              </form>
            </td>
            <td>{{$compra->price}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <form class="" action="/compraFinal" method="post">
      @csrf
        <button type="submit">Comprar</button>
    </form>


</div>


@endsection
