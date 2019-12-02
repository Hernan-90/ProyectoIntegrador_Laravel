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
              @Auth
                  <h1>Bienvenido/a {{Auth::user()->name}}</h1>
                  <p>
                    Nuestra pasión es cocinar y queremos que nuestros comensales se sientan a gusto.<br>
                    Te invitamos a descubrir nuestras delicias!<br>
                  </p>
                @else
                  <h1>Bienvenidos a nuestra cocina!</h1>
                  <p>
                    Nuestra pasión es cocinar y queremos que nuestros comensales se sientan a gusto.<br>
                    Te invitamos a descubrir nuestras delicias!<br>
                  </p>
              @endauth
            <button type="" name="button">
              <a href="/lacocina">Haga su Pedido</a>
            </button>
            </div>
          </div>
        </aside>
      </main>
    </div>
@endsection
