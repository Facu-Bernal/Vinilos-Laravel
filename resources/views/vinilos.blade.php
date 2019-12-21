@extends('layouts.app')
@extends('header')

@section('title', 'Vinilos')

@section('contenido')
  <div class="container mt-3">
      <div class="row">
<div class="row" id="perf-articulos">
  <h3>Articulos</h3>
  <button class="btn btn-danger" type="button" name="btnAccion"><a href="agregarVinilo">Agregar</a> </button>
  <div class="table-responsive">
    @foreach ($vinilos as $vinilo)
    <table class="table table-bordered">
      <tbody>
        {{-- Titulos --}}
        <tr>
          <th class="text-center">Nombre</th>
          <th class="text-center">Imagen</th>
          <th class="text-center">Descripcion</th>
          <th class="text-center">Categoria</th>
          <th class="text-center">Precio</th>
          <th class="text-center">---</th>
        </tr>
          {{-- Detalle --}}
        <tr>
          <td class="text-center">{{$vinilo->nombre}}</td>
          <td class="text-center"><img src="/storage/{{$vinilo->imagen}}" alt="image" style="width:255px; height:255px"></td>
          <td class="text-center">{{$vinilo->descripcion}}</td>
          <td class="text-center">{{$vinilo->categoria->nombre}}</td>
          <td class="text-center">{{"$"}}{{$vinilo->precio}}</td>
          <td class="text-center">
            {{-- Modificar --}}
          <form action="modificarVinilo" method="POST">
            {{csrf_field()}}
            <input type="hidden" id="id" name="id" value="{{$vinilo->id}}">
            <button class="btn btn-danger" type="submit" name="btnAccion">
               Modificar
             </button>
          </form>
            {{-- Eliminar --}}
          <form action="eliminarVinilo" method="POST">
            {{csrf_field()}}
            <input type="hidden" id="id" name="id" value="{{$vinilo->id}}">
            <button class="btn btn-danger" type="submit" name="btnAccion">
              Eliminar
            </button>
          </form>
          </td>
        </tr>
      </tbody>
    </table>
    @endforeach
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