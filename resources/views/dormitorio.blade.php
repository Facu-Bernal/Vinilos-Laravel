@extends('layouts.app')
@extends('header')
@extends('footer')

@section('title', 'Dormitorio')
@section('contenido')
<div class="container" style="margin: 0 auto" ;>
    <div class="row">
        <a href="/dormitorio"><img class="inspirate-seccion" src="img/Dormitorio.png" alt=""></a>
    </div>
    <section class="tarjetas">
      <div class="row">

        @foreach($vinilos as $vinilo)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                  <a data-toggle="modal" data-target="#modal{{$vinilo->id}}"><img src="/storage/{{$vinilo->imagen}}" width="500" height="300"></a>
                    <div class="caption">
                        <h4 style="text-align:center">{{ $vinilo->nombre }}</h4>
                        {{-- <p>{{ str_limit(strtolower($vinilo->descripcion), 50) }}</p> --}}
                        <p style="text-align:center"><strong>Price: </strong>${{ $vinilo->precio }}</p>
                        <p class="btn-holder"><a href="{{ url('add-to-cart/'.$vinilo->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal{{$vinilo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $vinilo->nombre }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <img src="/storage/{{$vinilo->imagen}}" width="500" height="300">
                  </div>
                  <div class="modal-footer">
                    <h6>{{$vinilo->descripcion}}</h6>
                  </div>
                </div>
              </div>
            </div>

        @endforeach
      </div>
    </section>
</div>
@endsection
