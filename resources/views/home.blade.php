  {{-- include_once 'carrito2.php' --}}
@extends('/layout/plantilla')
@extends('header')
@extends('footer')

@section('title', 'Home')

@section('contenido')
    <div class = "container">
      <main>
        <div class="container text-center my-3">
          <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
              <div class="carousel-item row no-gutters active">
                <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid" src="img/Carrousel/14a.png"></a></div>
                <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid" src="img/Carrousel/19.png"></a></div>
                <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid" src="img/Carrousel/20.png"></a></div>
                <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid" src="img/Carrousel/8a.png"></a></div>
              </div>
              <div class="carousel-item row no-gutters">
                <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid" src="img/Carrousel/13a.png"></a></div>
                <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid" src="img/Carrousel/17a.png"></a></div>
                <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid" src="img/Carrousel/16a.png"></a></div>
                <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid" src="img/Carrousel/5a.png"></a></div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="row inspirate">
          <h2>Inspirate!</h2>
          <a href="index-art.php"><img class="btn" src="img/Living.png" alt=""></a>
          <a href="index-art.php"><img class="btn" src="img/Dormitorio.png" alt=""></a>
          <a href="index-art.php"><img class="btn" src="img/Infantil.png" alt=""></a>
          <a href="index-art.php"><img class="btn" src="img/Cocina.png" alt=""></a>
        </div>
@endsection
