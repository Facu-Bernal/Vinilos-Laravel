@extends('layouts.app')
@extends('header')

@section('title', 'Alta/Modificacion Vinilos')

@section('contenido')
<div class="container mt-3">
  <div class="row">
    <div class="col-md-4">
     <img src="img/18.png" alt="">
    </div>

    <div class="col-lg-8 pb-5">
     <h1 style="text-align:inherit">Agrega tus Vinilos</h1>
     <p>"Complete todos los campos por favor"</p>

     <ul style="color:red" class="errors">
       @foreach ($errors->all() as $error)
         <li>
           {{$error}}
         </li>
       @endforeach
     </ul>

     <form class="row" action="/guardarModiVinilo" method="POST" enctype="multipart/form-data">
       {{csrf_field()}}
       <input type="hidden" name="id" value="{{$vinilo->id}}">
       <div class="col-md-12">
        <div class="form-group">
           <label for="name" style="display:block">Titulo</label>
           <input type="text" name="name" id="name" value="{{$vinilo->nombre}}" >
         </div>
       </div>

       <div class="col-md-12">
         <img src="/storage/{{$vinilo->imagen}}" alt="image">
       </div>

       <div class="col-md-12">
         <div class="form-group">
           <label for="img" style="display:block">Imagen</label>
           <input type="file" name="img" id="img">
         </div>
       </div>

       <div class="col-md-12">
         <div class="form-group">
           <label for="descripcion" style="display:block">Descripcion</label>
           <textarea name="descripcion" id="descripcion" rows="8" cols="80">{{$vinilo->descripcion}}</textarea>
         </div>
       </div>

       <div class="col-md-12">
         <div class="form-group">
           <label for="categoria" style="display:block">Categoria</label>
           <select class="" name="categoria" id="categoria">
             @foreach ($categorias as $categoria)
               <option value="{{$categoria->id}}">
                 {{$categoria->nombre}}
               </option>
             @endforeach
           </select>
         </div>
       </div>

       <div class="col-md-12">
         <div class="form-group">
           <label for="precio" style="display:block">Precio</label>
           <input type="numeric" name="precio" id="precio" value="{{$vinilo->precio}}">
         </div>
       </div>

       <div class="col-12">
         <hr class="mt-2 mb-3">
           <div class="d-flex flex-wrap justify-content-between align-items-center">
             <button class="btn btn-style-1 btn-info" type="summit" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Guardar</button>
           </div>
       </div>
     </form>
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
