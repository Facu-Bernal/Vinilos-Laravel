@extends('layouts.app')
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

        {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                <div id="formulario" class="d-flex justify-content-center form_container">
                    <form method="POST" action="{{ route('login') }}">
                      @csrf

                      <div class="input-group mb-3 form-group">
                        {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}
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
                        {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}
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
                        {{-- <input type="checkbox" class="custom-control-input" id="customControlInline"> --}}
                        <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customControlInline">Recuerdame</label>
                        {{-- <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label> --}}
                      </div>
        						</div>

                    <div class="d-flex justify-content-center mt-3 login_container">
                      <div class="form-group">
                        <button type="submit" class="btn login_btn">Entrar</button>
                        {{-- <button type="submit" class="btn login_btn">{{ __('Login') }}</button> --}}
                        @if (Route::has('password.request'))
                          <a class="btn btn-link" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?
                                        {{-- {{ __('Forgot Your Password?') }} --}}
                                    </a>
                                @endif
                            </div>
                        </div>
                      </div>
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
