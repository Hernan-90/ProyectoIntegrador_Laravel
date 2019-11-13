@extends('plantilla')

@section('cuerpo')
    <section class="formularios">
      <div class="login">
        <h1>Iniciar sesión</h1>
        <div class="new">
            <p>Eres un nuevo usuario?
              <a class="crear" href="registroproyecto.php"><strong>Crear una cuenta</strong></a>
            </p>
        </div>
        <div class="cuadrado1">
          <div class="cuadrado2">
            <form class="log" action="cuentas.php" method="post">
              <div class="form-group">
                <label for="email">Dirección de email</label>
              </div>
              <div class="input email">
                <input id="email" type="text" name="email" value="">
              </div>
              <div class="">
                @error('exists')
                    <small class="">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
              </div>
              <div class="input pass">
                <input id="password" type="password" name="password" value="">
              </div>
              <div class="">
                @error('name')
                    <small class="">{{ $message }}</small>
                @enderror
              </div>
              <div class="remember">
                  <input id="recordarme" type="checkbox" name="recordarme" value="">
                  <label for="recordarme">Recordarme</label>
              </div>
                  <input type="hidden" name="login" value="">
                  <button class="submit" type="submit" name="button">Iniciar sesión</button>
            </form>
          </div>
        </div>
      </div>
      <div class="register">
        <h1>Registro</h1>
        <div class="new">
          <p>¿Ya tienes una cuenta?
              <a class="inicia" href="/cuentas"><strong>Inicia sesión</strong></a>
          </p>
        </div>
        <div class="cuadrado3">
          <div class="cuadrado4">
            <form class="reg" action="register" method="post" enctype="multipart/form-data">
              @csrf
              <div class="name">
                <label for="name">Nombre</label>
              </div>
              <div>
                  <input id="name" type="text" name="name" value="{{old('name')}}">
              </div>
              <div>
                @error('name')
                    <small class="">{{ $message }}</small>
                @enderror
              </div>
              <div class="email">
                <label for="email">Dirección de email</label>
              </div>
              <div>
                <input id="email" type="email" name="email" value="">
              </div>
              <div>
                @error('email')
                    <small class="">{{ $message }}</small>
                @enderror
              </div>
              <div class="phone">
                <label for="phone">Teléfono (opcional)</label>
              </div>
              <div>
                <input id="phone" type="phonenumber" name="phone" value="">
              </div>
              <div class="picture">
                <label for="avatar">Imagen de perfil</label>
              </div>
              <div>
                <input type="file" id="avatar" class="Picture" name="avatar">
                <span class="small text-danger"></span>
              </div>
              <div>
                @error('avatar')
                    <small class="">{{ $message }}</small>
                @enderror
              </div>
              <div class="pass">
                <label for="password">Contraseña</label>
              </div>
              <div>
                <input id="password" type="password" name="password" value="">
              </div>
              <div>
                @error('password')
                    <small class="">{{ $message }}</small>
                @enderror
              </div>
              <div class="pass2">
                <label for="confirmation">Confirmar Contraseña</label>
              </div>
              <div>
                <input id="confirmation" type="password" name="confirmation" value="">
              </div>
              <div>
                @error('confirmation')
                    <small class="">{{ $message }}</small>
                @enderror
              </div>
              <input type="hidden" name="register" value="">
              <button class="submit" type="submit" name="button">Crear cuenta</button>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
