{{-- require_once "php/usuarios/validar-login.php"  --}}
@extends('/layout/plantilla')
@extends('header')

@section('title', 'Login')

@section('contenido')
    <div class="container register-form">
      <main>
        <form action="/login" method="post"  autocomplete="off">
          {{csrf_field()}}
          <!-- Email -->
          <div class="form-group">
            <label for="email1">Email</label>
            <input type="email" name="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Introduzca su email">
          </div>
          <!-- Email -->
          <!-- Contraseña -->
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="pass" class="form-control" id="password" placeholder="Introduzca su contraseña">
          </div>
          <!-- Contraseña -->
          <label><input id="rememberme" name="rememberme" value="remember" type="checkbox" /> &nbsp;Remember me</label>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </main>
    </div>
@endsection
