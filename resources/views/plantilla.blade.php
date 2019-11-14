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
          <ul>
            <li>
              <a href="/">HOME</a>
            </li>
            <li>
              <a href="/lacocina">LA COCINA</a>
            </li>
            <li>
              <a href="/contacto">CONTACTO</a>
            </li>
            <li>
              @if (Auth::user()!== null)
                <a href="/cuentas" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
              @else
                <a href="/cuentas">CUENTAS</a>
              @endif
            </li>
            <!-- <li>
              <a href="#">CHEF's</a>
            </li> -->
          </ul>
        </div>
        <div class="logo">
          <a href="/">
            <img src="/images/Products/boceto.png" alt="">
          </a>
        </div>
        <div class="redes">
            <ul>
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
        </div>
    </header>
    @yield('cuerpo')
    <footer>
      <div class="redes">
          <ul>
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
      </div>
    </footer>
  </body>
</html>
