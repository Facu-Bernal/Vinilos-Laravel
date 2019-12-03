@extends('layouts.app')
@section('title', 'Register')

@section('contenido')
<main id="background_registro">
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card2">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container2">
            <a href="/home" class=""><img src="img/1.jpg" alt="" id="registro_logo"></a>
          </div>
        </div>
        <div class="d-flex justify-content-center form_container">
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-row mb-4">
              <div class="col">

                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="col">

                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Apellido">
                @error('lastname')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>


            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror mb-4" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">


            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
              Al menos 8 caracteres y 1 dígito
            </small>


            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Password">
            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">

            </small>


            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
              <label class="custom-control-label" for="defaultRegisterFormNewsletter">Suscribite a nuestro newsletter</label>
            </div>


            <button class="btn login_btn" type="submit">Registrate</button>
            <!-- <section>
              <p id="registro">o registráte con:</p>

              <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
              <a href="#" class="mx-2" role="button"><i class="fab fa-instagram light-blue-text"></i></a>
              <a href="#" class="mx-2" role="button"><i class="fab fa-pinterest light-blue-text"></i></a>
              <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
            </section> -->
            <hr class="width=25%">

            <!-- <p>Al hacer clic
              <em>Registrarse</em> acepta nuestros
              <a href="" target="_blank">términos de servicio</a></p> -->

          </form>
        </div>
      </div>
    </div>
  </div>
  <ul class="bubble-boxes">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</main>
@endsection