@extends('layouts.app')
@extends('header')
@extends('footer')

@section('title', 'Cocina')
@section('contenido')
<div class="container" style="margin: 0 auto" ;>
    <div class="row inspirate-seccion">
        <img src="img/Cocina.png" alt="">
    </div>
    <section class="tarjetas">
        <div class="card-deck row">
            @foreach ($vinilos as $vinilo)
            <div class="col-xs-12 col-sm-6 col-md-4" style="padding-bottom: 3%;">
                <div class="card">
                    <div class="tarjeta" class="view overlay">
                        <img class="card-img-top" src="{{ $vinilo->imagen }}" alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $vinilo->nombre }}</h4>
                        <h5 class="card-title">${{ $vinilo->precio }}</h5>
                        <form action="" method="post">
                            <input type="hidden" name="id" id="id" value="{{ $vinilo->id }}">
                            <input type="hidden" name="descripcion" id="descripcion" value="{{ $vinilo->descripcion }}">
                            <input type="hidden" name="precio" id="precio" value="{{ $vinilo->precio }}">
                            <input type="hidden" name="cantidad" id="cantidad" value="{{ 1 }}">
                            <button class="btn btn-info" name="btnAccion" value="Agregar" type="submit">
                                <i class="fas fa-cart-plus"></i>
                            </button>
                        </form>
                        <button type="button" class="btn btn-info d-flex" data-toggle="modal" data-target="#cocina1">
                        <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    <div id="cocina1" class="modal fade " tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <img src="img/cocina 1.jpg" class="img-100 img-fluid">
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection