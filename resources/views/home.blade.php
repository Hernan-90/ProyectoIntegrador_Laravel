@extends('plantilla')

@section('cuerpo')
    <div class="webbody">
      <main>
        <section class="image">
          <img src="/images/Products/masadepan.jpg" alt="">
        </section>
        <aside class="welcome">
          <div class="cuadradoa">
            <div class="cuadradob">
            <h1>Bienvenidos a nuestra cocina!</h1>
            <p>
              Nuestra pasión es cocinar y queremos que nuestros comensales se sientan a gusto.<br>
              Te invitamos a descubrir nuestras delicias!<br>
            </p>
            <button type="" name="button">
              <a href="#">Haga su Pedido</a>
            </button>
            </div>
          </div>
        </aside>
      </main>
      <div class"separador">
        <img src="" alt="">
      </div>
      <div class="">
        <a href="/nuevoProducto">Nuevo Producto</a>
      </div>
      <div class="">
        <a href="/nuevaReceta">Nueva Receta</a>
      </div>
    </div>
@endsection
