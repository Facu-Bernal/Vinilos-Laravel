@extends('layouts.app')
@extends('header')

@section('title', 'User-profile')

@section('contenido')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4 pb-5">
                <!-- Account Sidebar-->
                <div class="author-card pb-3">
                    <div class="author-card-cover" style="background-image: url(img/1.jpg);"></div>
                    <div class="author-card-profile">
                        <div class="author-card-avatar"><img class="perfil" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Daniel Adams">
                        </div>
                        <div class="author-card-details">
                            <h5 class="author-card-name text-lg">Daniel Adams</h5>
                            <!-- <span class="author-card-position">Admin. Septiembre 05, 2019</span> -->
                        </div>
                    </div>
                </div>
                <div class="wizard">
                    <nav class="list-group list-group-flush">
                        <a class="list-group-item" href="#"></a>
                        <a class="list-group-item" href="#"><i class="fe-icon-user text-muted"></i>Mis Datos</a>
                        <a class="list-group-item" href="#perf-articulos"><i class="fe-icon-map-pin text-muted"></i>Mis Articulos</a>
                    </nav>
                </div>
            </div>
            <!-- Profile Settings-->
            <div class="col-lg-8 pb-5">
              <div  id="perf-datosPersonales">
                <form class="row" method="POST" action="/updateData">
                  @csrf
                  <input type="hidden" name="" value="{{Auth::user()->id}}">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="account-fn">Nombre</label>
                        <input id="name" type="text" class="form-control" value="{{ Auth::user()->name }}" disabled="">
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-fn">Apellido</label>
                            <input class="form-control" type="text" id="last_name" value="{{ Auth::user()->last_name }}" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-email">E-mail</label>
                            <input class="form-control" type="email" id="email" value="{{ Auth::user()->email }}" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="account-phone">Documento</label>
                        <input class="form-control  @error('dni') is-invalid @enderror" type="text" id="dni" value="{{ Auth::user()->dni }}" require_onced="">
                        @error('dni')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="account-pass">Telefono</label>
                          <input class="form-control  @error('telefono') is-invalid @enderror" type="number" id="telefono" {{ Auth::user()->telefono }}>
                          @error('telefono')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="account-confirm-pass">Provincia</label>
                        <input class="form-control @error('provincia') is-invalid @enderror" type="text" id="provincia" {{ Auth::user()->provincia }}>
                          @error('provincia')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="account-confirm-pass">Localidad</label>
                        <input class="form-control @error('localidad') is-invalid @enderror" type="text" id="localidad" {{ Auth::user()->localidad }}>
                          @error('localidad')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="account-confirm-pass">Calle</label>
                        <input class="form-control @error('calle') is-invalid @enderror" type="text" id="calle" {{ Auth::user()->calle }}>
                          @error('calle')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                    </div>  <div class="col-md-6">
                      <div class="form-group">
                        <label for="account-confirm-pass">Numero</label>
                        <input class="form-control @error('numero') is-invalid @enderror" type="number" id="numero" {{ Auth::user()->numero }}>
                        </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="account-confirm-pass">Piso/Departamento</label>
                              <input class="form-control @error('pisoDep') is-invalid @enderror" type="text" id="pisoDep" {{ Auth::user()->pisoDep }}>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="account-confirm-pass">Codigo Postal</label>
                              <input class="form-control @error('codPostal') is-invalid @enderror" type="text" id="codPostal" {{ Auth::user()->codPostal }}>
                          </div>
                      </div>

                    <div class="col-12">
                        <hr class="mt-2 mb-3">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                          <button class="btn btn-style-1 btn-info" type="button" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Actualizar Perfil</button>
                        </div>
                    </div>
                </form>
              </div>
            </div>
        </div>
      </div>
    <script type="text/javascript">
    window.onload=function(){
      var barra = document.querySelector(".shift");
      barra.style.display="none";
    }
    </script>
@endsection
