@extends('layouts.app')
@extends('header')
@extends('footer')

@section('title', 'Home')
@section('contenido')
<div class="container" style="margin: 0 auto" ;>
    <img src="img/Cocina.png" alt="">

    <section class="tarjetas">
        <div class="card-deck row">
            @foreach ($vinilos as $vinilo)
            <div class="col-xs-12 col-sm-6 col-md-4" style="padding-bottom: 3%;">
                <div class="card">
                    <div class="tarjeta" class="view overlay">
                        <img class="card-img-top" src="{{ $vinilo->imagen }}" alt="Card image cap">
                        <img class="nuevo" src="img/img-nuevo2.png" alt="">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $vinilo->nombre }}</h4>
                        <form action="" method="post">
                            <input type="hidden" name="id" id="id" value="{{ $vinilo->id }}">
                            <input type="hidden" name="descripcion" id="descripcion" value="{{ $vinilo->descripcion }}">
                            <input type="hidden" name="precio" id="precio" value="{{ $vinilo->precio }}">
                            <input type="hidden" name="cantidad" id="cantidad" value="{{ 1 }}">
                            <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
                              Agregar
                            </button>
                          </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection