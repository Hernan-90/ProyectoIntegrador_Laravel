<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="widht=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato|Libre+Baskerville&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/stylesheet.css">
</head>
  <body>
    <header class="">
        <div class="menu">
          <ul class="nav">
            <li>
              <a href="/">HOME</a>
            </li>
            <li>
              <a href="/lacocina">LA COCINA</a>
            </li>
            <li>
              @auth
                <a href="/recetas">RECETAS</a>
              @else
                <a href="/contacto">NOSOTROS</a>
              @endauth
            </li>
          </ul>
        </div>
        <div class="logo">
          <a href="/">
            <img src="/images/Products/boceto.png" alt="">
          </a>
        </div>
        <div class="menu_cuentas">
            <ul>
              <li class="cuentas">
                @Auth
                  @if (Auth::user()->rol == 1)
                    <a href="/nuevoProducto">NUEVO PRODUCTO</a>
                    <a href="/nuevaReceta">NUEVA RECETA</a>
                    <a href="/cuentas" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('LOGOUT') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                  @elseif (Auth::user()->rol == 0)
                    <a href="/perfil">PERFIL</a>
                    <a href="/carrito">CARRITO</a>
                    <a href="/cuentas" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  {{ __('LOGOUT') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                  @endif
                @else
                  <a href="/cuentas">LOGIN / REGISTRO</a>
                @endauth
              </li>
            </ul>
        </div>
    </header>
    @yield('cuerpo')
    <footer>
      <div class="divisiones">
        <div class="contact_form">
          <h4>Formulario de contacto</h4>
          <form class="" action="/" method="post">
            <label for="">Nombre</label>
            <input type="text" name="contact_name" value="">
            <label for="">Email</label>
            <input type="text" name="contact_mail" value="">
            <label for="">Mensaje</label>
            <input type="text" name="coment" value="">
            <button type="submit" name="button">Enviar</button>
          </form>
        </div>
        <div class="redes">
          <h4>Redes y Contacto</h4>
          <br>
            <ul class="iconos_redes">
              <li>
                <a id="tw" href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a id="fb" href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a id="insta" href="#"><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
            <br>
            <a href="#">Email: cuentafalsa@gmail.com</a>
            <a href="#">Tel: 11 1234 5678</a>
        </div>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26270.199593640067!2d-58.440136068060625!3d-34.60985192797749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca5e41da17ff%3A0xebce9fad2698f23f!2sAlmagro%2C%20CABA!5e0!3m2!1ses-419!2sar!4v1574340564290!5m2!1ses-419!2sar" width="600" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="legales">
        All copyright rigths are reserved to Leti's Bakery.
      </div>
    </footer>
  </body>
</html>
