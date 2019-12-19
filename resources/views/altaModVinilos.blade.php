@extends('layouts.app')
@extends('header')

@section('title', 'Alta/Modificacion Articulos')

@section('contenido')
<div class="conteiner">
 <div class="row new-art-row">
   <div class="new-art-center-column col-sm-12 col-md-5">
     <h1>Agrega tus Vinilos</h1>
     <p>"Complete todos los campos por favor"</p>

     <form class="" action="/guardarVinilo" method="post">
       <div class="new-art">
         <label for="name">Titulo</label>
         <input type="text" name="name" id="name" value="{{$vinilo->nombre}}">
       </div>

       <div class="new-art">
         <label for="img">Imagen</label>
         <input type="text" name="img" id="img" value="{{$vinilo->imagen}}">
       </div>

       <div class="new-art">
         <label for="descript">Descripcion</label>
         <input type="text" name="descript" id="descript" value="{{$vinilo->descripcion}}">
       </div>

       <div class="new-art">
         <label for="descript">Categoria</label>
         <input type="text" name="descript" id="descript" value="{{$vinilo->categoria->nombre}}">
       </div>

       <div class="new-art">
         <label for="precio">Precio</label>
         <input type="text" name="precio" id="precio" value="{{"$"}}{{$vinilo->precio}}">
       </div>

       <input type="submit" name="" value="Guardar">
     </form>
   </div>

  <div class="new-art-img col-md-4">
   <img src="img/18.png" alt="">
  </div>
 </div>
</div>
<script type="text/javascript">
window.onload=function(){
  var navbar = document.querySelector(".shift");
  navbar.style.display="none";
  var topnavbar = document.querySelector("#nav1");
  topnavbar.style.display="none";
}
</script>
@endsection
