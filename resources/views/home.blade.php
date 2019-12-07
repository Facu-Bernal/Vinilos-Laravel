@extends('layouts.app')
@extends('header')
@extends('footer')

@section('title', 'Home')
@section('contenido')
<div class="container">
  <main class="main_home">
    <section class="carrusel">
      <h1>Lorem ipsum dolor sit.</h1>
      <div class="container text-center my-3">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item row no-gutters active">
              <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid"
                    src="img/Carrousel/14a.png"></a></div>
              <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid"
                    src="img/Carrousel/19.png"></a></div>
              <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid"
                    src="img/Carrousel/20.png"></a></div>
              <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid"
                    src="img/Carrousel/8a.png"></a></div>
            </div>
            <div class="carousel-item row no-gutters">
              <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid"
                    src="img/Carrousel/13a.png"></a></div>
              <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid"
                    src="img/Carrousel/17a.png"></a></div>
              <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid"
                    src="img/Carrousel/16a.png"></a></div>
              <div class="col-3 float-left"><a href="index-art.php"><img class="img-fluid"
                    src="img/Carrousel/5a.png"></a></div>
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
    </section>
    <h2>Lorem ipsum dolor sit.</h2>
    <hr class="rgba-white-light width=100%">
    <section class="tarjetas">
      <div class="card-deck row">
        @foreach ($vinilos as $vinilo)
          <div class="col-xs-12 col-sm-6 col-md-4" style="padding-bottom: 3%;">
            <div class="card">
              <div class="tarjeta" class="view overlay">
                <img class="card-img-top" src="{{ $vinilo->imagen }}"alt="Card image cap">
                <img class="nuevo" src="img/img-nuevo2.png" alt="">
                <a href="#!">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">{{ $vinilo->nombre }}</h4>
                <button type="button" class="btn btn-light-blue btn-md">Read more</button>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </section>
    <hr class="rgba-white-light width=100%">
    <section class="accesos">
      <div class="row inspirate">
        <h2>Inspirate!</h2>
        <a href="index-art.php"><img id="btn" src="img/Living.png" alt=""></a>
        <a href="index-art.php"><img id="btn" src="img/Dormitorio.png" alt=""></a>
        <a href="index-art.php"><img id="btn" src="img/Infantil.png" alt=""></a>
        <a href="/cocina"><img id="btn" src="img/Cocina.png" alt=""></a>
      </div>
    </section>
  </main>
</div>

@endsection