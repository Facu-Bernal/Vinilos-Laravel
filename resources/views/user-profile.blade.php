@extends('plantilla')
@extends('header')
@extends('footer')

@section('user-profile')
    <div class="container mt-6">
        <div class="row">
            <div class="col-lg-4 pb-5">
                <!-- Account Sidebar-->
                <div class="author-card pb-3">
                    <div class="author-card-cover" style="background-image: url(img/1.jpg);"></div>
                    <div class="author-card-profile">
                        <div class="author-card-avatar"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Daniel Adams">
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
                        <a class="list-group-item active" href="#"><i class="fe-icon-user text-muted"></i>Mis Datos</a>
                        <a class="list-group-item" href="#perf-datosPersonales"><i class="fe-icon-map-pin text-muted"></i>Datos Personales</a>
                        <a class="list-group-item" href="#perf-datosDeEnvio"><i class="fe-icon-map-pin text-muted"></i>Datos de Envio</a>
                        <a class="list-group-item" href="#perf-articulos"><i class="fe-icon-map-pin text-muted"></i>Articulos</a>
                    </nav>
                </div>
            </div>
            <!-- Profile Settings-->
          <div >
            <div class="col-lg-8 pb-5" id="perf-datosPersonales">
                <form class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-fn">Nombre</label>
                            <input class="form-control" type="text" id="account-fn" value="" require_onced="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-fn">Apellido</label>
                            <input class="form-control" type="text" id="account-fn" value="" require_onced="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-email">E-mail</label>
                            <input class="form-control" type="email" id="account-email" value="" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-phone">Telefono</label>
                            <input class="form-control" type="text" id="account-phone" value="" require_onced="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-pass">Contraseña Nueva</label>
                            <input class="form-control" type="password" id="account-pass">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-confirm-pass">Confirmar Contraseña</label>
                            <input class="form-control" type="password" id="account-confirm-pass">
                        </div>
                    </div>
                    <div class="col-12">
                        <hr class="mt-2 mb-3">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                          <button class="btn btn-style-1 btn-primary" type="button" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Actualizar Perfil</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-8 pb-5" id="perf-datosDeEnvio">
                <form class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-fn">Nombre</label>
                            <input class="form-control" type="text" id="account-fn" value="" require_onced="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-fn">Apellido</label>
                            <input class="form-control" type="text" id="account-fn" value="" require_onced="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-email">E-mail</label>
                            <input class="form-control" type="email" id="account-email" value="" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-phone">Telefono</label>
                            <input class="form-control" type="text" id="account-phone" value="" require_onced="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-pass">Contraseña Nueva</label>
                            <input class="form-control" type="password" id="account-pass">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-confirm-pass">Confirmar Contraseña</label>
                            <input class="form-control" type="password" id="account-confirm-pass">
                        </div>
                    </div>
                    <div class="col-12">
                        <hr class="mt-2 mb-3">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                          <button class="btn btn-style-1 btn-primary" type="button" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Actualizar Perfil</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-8 pb-5" id="perf-articulos">
                <form class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-fn">Nombre</label>
                            <input class="form-control" type="text" id="account-fn" value="" require_onced="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-fn">Apellido</label>
                            <input class="form-control" type="text" id="account-fn" value="" require_onced="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-email">E-mail</label>
                            <input class="form-control" type="email" id="account-email" value="" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-phone">Telefono</label>
                            <input class="form-control" type="text" id="account-phone" value="" require_onced="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-pass">Contraseña Nueva</label>
                            <input class="form-control" type="password" id="account-pass">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account-confirm-pass">Confirmar Contraseña</label>
                            <input class="form-control" type="password" id="account-confirm-pass">
                        </div>
                    </div>
                    <div class="col-12">
                        <hr class="mt-2 mb-3">
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                          <button class="btn btn-style-1 btn-primary" type="button" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Actualizar Perfil</button>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
    </div>
@endsection
