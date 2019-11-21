
@section("header")
<header>

<nav class="navbar navbar-expand-md navbar-dark bg-info mb-3 sombra">
    <div class="container-fluid">
      <div class="header-row">
        <div class="logo-search">
          <div class="logo-cont col-sm-9 col-md-3">
            <a href="#" class=""><img src="/img/1.jpg" alt="" class="logo"></a>
          </div>


        </div>

        <div class="navbar-option">
          <div class="navbar-desp col-sm-12">

            <button type="button" class="navbar-toggler col-sm-12" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">

              <ul class="navbar-nav">
                <li class="nav-item active"><a href="/home" class="nav-item nav-link active" id="item">Home</a></li>
                <li class="nav-item"><a href="sumary-art.php" class="nav-item nav-link active" id="item">Vinilos</a></li>
                <li class="nav-item"><a href="/faq" class="nav-item nav-link active" id="item">FAQ</a></li>
                <li class="nav-item"><a href="/contacto" class="nav-item nav-link active" id="item">Contacto</a></li>
              </ul>

              <ul class="navbar-nav nav-reg">
                <li class="nav-item"><a class="nav-item nav-link" href="/register">Register</a></li>
                <li class="nav-item"><a class="nav-item nav-link" href="/login">Login</a></li>
                <li class="nav-item"><a class="nav-item nav-link" a href="/carrito" id="Carrito">Carrito (<?php echo (empty($_SESSION["CARRITO"]))?0:count($_SESSION["CARRITO"]);?>)</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
@endsection()
