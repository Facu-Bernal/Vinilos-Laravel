@extends('layouts.plantilla')

@section('title', 'Login')

@section('contenido')
<main id="background_login">
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div  class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<a href="/index" class=""><img src="img/1.jpg" alt="" id="login_logo"></a>
					</div>
				</div>

        <div id="formulario" class="d-flex justify-content-center form_container">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-group mb-3 form-group">

              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>

                <input id="email" type="email" class="form-control input_user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>

            <div class="input-group mb-2 form-group">

              <div class="input-group-append">
          			<span class="input-group-text"><i class="fas fa-key"></i></span>
          		</div>

                <input id="password" type="password" class="form-control input_pass @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
            </div>

            <div class="form-group">
        			<div class="custom-control custom-checkbox form-check">
                <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="customControlInline">{{ __('Recuerdame') }}</label>
              </div>
        		</div>

            <div class="d-flex justify-content-center mt-3 login_container">
              <button type="submit" class="btn login_btn">{{ __('Entrar') }}</button>
            </div>
          </form>
        </div>


        <div class="mt-4">
        	<div class="d-flex justify-content-center links">
            {{ __('¿No tienes cuenta?') }}<a href="{{ route('register') }}" class="ml-2">{{ __('Registrate') }}</a>
        	</div>
  			  <div class="d-flex justify-content-center links">
            @if (Route::has('password.request'))
              <a class="ml-2" href="{{ route('password.request') }}">{{ __('¿Olvidaste tu contraseña?') }}</a>
            @endif
  				</div>
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
