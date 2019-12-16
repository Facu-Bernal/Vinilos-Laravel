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
                            <h5 class="author-card-name text-lg"></h5>
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
                {{-- Errores --}}
                <ul style="color:red" class="errors">
                  @foreach ($errors->all() as $error)
                    <li>
                      {{$error}}
                    </li>
                  @endforeach
                </ul>

                {{-- Formulario Update Perfil Usuario --}}
                <form class="row" method="POST" action="/updateData">
                  {{csrf_field()}}
                  <input type="hidden" name="id" id="{{Auth::user()->id}}" value="{{Auth::user()->id}}">

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
                      <label for="email">E-mail</label>
                      <input class="form-control" type="email" name="Email" id="email" value="{{ Auth::user()->email }}" disabled="">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Documento">Documento</label>
                      <input class="form-control" type="text" id="dni" name="Documento" value="" placeholder="{{ Auth::user()->dni }}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Telefono">Telefono</label>
                      <input class="form-control" type="text" name="Telefono" id="Telefono" value="{{ Auth::user()->telefono }}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Provincia">Provincia</label>
                      <input class="form-control" type="text" name="Provincia" id="provincia" value="{{ Auth::user()->provincia }}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Localidad">Localidad</label>
                      <input class="form-control" type="text" name="Localidad" id="localidad" value="{{ Auth::user()->localidad }}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Domicilio">Domicilio</label>
                      <input class="form-control" type="text" name="Domicilio" id="calle" value="{{ Auth::user()->domicilio }}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="Piso/Departamento">Piso/Departamento</label>
                      <input class="form-control" type="text" name="Piso/Departamento" id="pisoDep" value="{{ Auth::user()->pisoDep }}">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="CodigoPostal">Codigo Postal</label>
                      <input class="form-control" type="text" name="CodigoPostal" id="codPostal" value="{{ Auth::user()->codPostal }}">
                    </div>
                  </div>

                  <div class="col-12">
                    <hr class="mt-2 mb-3">
                      <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <button class="btn btn-style-1 btn-info" type="summit" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Actualizar Perfil</button>
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
      var h5 = document.querySelector("h5");
      var nombreCompleto = "{{ Auth::user()->name }}"+" "+"{{ Auth::user()->last_name }}";
      h5.append(nombreCompleto);
    }
    </script>
@endsection
