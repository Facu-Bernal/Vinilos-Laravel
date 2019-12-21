@extends('layouts.app')
@extends('header')
@extends('footer')

@section('title', 'Cocina')
@section('contenido')
<div class="container" style="margin: 0 auto" ;>
    <div class="row">
        <a href="#"><img class="inspirate-seccion" src="img/Cocina.png" alt=""></a>
    </div>
    <section class="tarjetas">
        <div class="row">

          @foreach($vinilos as $vinilo)
              <div class="col-xs-18 col-sm-6 col-md-3">
                  <div class="thumbnail">
                      <img src="/storage/{{$vinilo->imagen}}" width="500" height="300">
                      <div class="caption">
                          <h4>{{ $vinilo->nombre }}</h4>
                          <p>{{ str_limit(strtolower($vinilo->descripcion), 50) }}</p>
                          <p><strong>Price: </strong>${{ $vinilo->precio }}</p>
                          <p class="btn-holder"><a href="{{ url('add-to-cart/'.$vinilo->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                      </div>
                  </div>
              </div>

          @endforeach
        </div>
    </section>
</div>
@endsection
