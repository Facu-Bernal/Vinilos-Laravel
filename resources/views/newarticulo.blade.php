@extends('/layout/plantilla')
@extends('header')

@section('title', 'New Article')

@section('contenido')
      <div class="row new-art-row">
        <div class="new-art-center-column col-sm-12 col-md-5">
          <h1>Crea tus articulos</h1>
          <p>"Complete todos los campos por favor"</p>
          <form class="" action="newarticulo.php" method="post">
            <div class="new-art">
              <label for="name">Titulo</label>
              <input type="text" name="name" id="name" value="">
            </div>
            <div class="new-art">
              <label for="img">Imagen</label>
              <input type="text" name="img" id="img" value="">
            </div>
            <div class="new-art">
              <label for="precio">Precio</label>
              <input type="text" name="precio" id="precio" value="">
            </div>
            <div class="new-art">
              <label for="descript">Descripcion</label>
              <input type="text" name="descript" id="descript" value="">
            </div>
            <input type="submit" name="" value="Guardar">
          </form>
        </div>
        <div class="new-art-img col-md-4">
          <img src="img/18.png" alt="">
        </div>
      </div>
@endsection
