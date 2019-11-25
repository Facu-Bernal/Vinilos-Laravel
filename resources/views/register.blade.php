 {{-- require_once "php/usuarios/validar-register.php" ?> --}}
@extends('/layout/plantilla')
@extends('header')
@extends('footer')

@section('title', 'Register')

@section('contenido')
    <div class="container register-form">
      <main>
        <form action="register.php" method="post"  autocomplete="off">
          {{csrf_field()}}
          <!-- Nombre completo -->
          <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Introduzca su nombre">
          </div>
          <div class="form-group">
            <label for="lastname">Apellido</label>
            <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Introduzca su apellido">
          </div>
          <!-- Nombre completo -->
          <!-- Email -->
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Introduzca su email">
            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
          </div>
          <!-- Email -->
          <!-- Contraseña -->
          <div class="form-group">
            <label for="password1">Password</label>
            <input type="password" name="pass" class="form-control" id="password1" placeholder="Introduzca contraseña">
          </div>
          <!-- Contraseña -->
          <!-- Verificar Contraseña -->
          <div class="form-group">
            <label for="password2">Confirmar Password</label>
            <input type="password" name="passv" class="form-control" id="password2" placeholder="Confirme contraseña">
          </div>
          <!-- Verificar Contraseña -->
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </main>
    </div>
@endsection
