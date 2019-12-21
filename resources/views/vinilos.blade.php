@extends('layouts.app')
@extends('header')

@section('title', 'Vinilos')

@section('contenido')
<div id="articulos" class="container">
  <h3>Articulos</h3>
  <button class="btn btn-info" type="button" name="btnAccion"><a href="agregarVinilo">Agregar</a> </button>
  {{-- <button class="btn btn-danger" type="button" name="btnAccion"><a href="agregarVinilo">Agregar</a> </button> --}}
  <div class="table-responsive">
    <table class="table table-hover table-condensed">
      <thead>
        <tr>
          <th style="width:10%">Articulo</th>
          <th class="text-center" style="width:35%">Imagen</th>
          <th class="text-center" style="width:25%">Descripcion</th>
          <th class="text-center" style="width:20%">Categoria</th>
          <th style="width:10%">Accion</th>
        </tr>
      </thead>
      {{-- Detalle --}}
      <tbody>
        @foreach ($vinilos as $vinilo)
        <tr>
          <td >{{$vinilo->nombre}}</td>
          <td class="text-center"><img src="/storage/{{$vinilo->imagen}}" width="100" height="100"
            class="img-responsive">
          </td>
          <td >{{$vinilo->descripcion}}</td>
          <td class="text-center" >{{"$"}}{{$vinilo->precio}}</td>
          <td >
            {{-- Modificar --}}
            <form action="modificarVinilo" method="POST">
              {{csrf_field()}}
              <input type="hidden" id="id" name="id" value="{{$vinilo->id}}">
              <button class="btn btn-info btn-sm update-cart"><i
                class="fa fa-refresh"></i></button>
            </form>
            {{-- Eliminar --}}
            <form action="eliminarVinilo" method="POST">
              {{csrf_field()}}
              <input type="hidden" id="id" name="id" value="{{$vinilo->id}}">
              <button class="btn btn-danger btn-sm remove-from-cart"><i
                class="fa fa-trash-o"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
window.onload=function(){
  var ul1 = document.querySelector("#ul1");
  ul1.style.display="none";

  var ul2 = document.querySelector("#ul2");
  ul2.style.display="none";

  var navbar = document.querySelector("#nav2");
  navbar.style.display="none";
}
</script>
@endsection