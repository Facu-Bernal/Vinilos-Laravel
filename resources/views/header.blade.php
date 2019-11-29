
@section('header')
<div class="container-fluid">
  <header>
    <nav id="nav1">
      <section>
        <div>
          <ul id="ul1">
            <li id="li1"><a  href="/envios">ENVIOS A TODO EL PAIS</a><i class="fas fa-truck"></i></a></li>
            <li id="li1"><a href="/metodos">METODOS DE PAGO <i class="fas fa-dollar-sign"></i></a></li>
            <li id="li1"><a href="/contacto">CONTACTENOS <i class="fas fa-at"></i></a></li>
          </ul>
        </div>
        <div>
          <ul id="ul2">
            <li id="li2"><a href="https://facebook.com/"><i class="fab fa-facebook"></i></a></li>
            <li id="li2"><a href="https://instagram.com/"><i class="fab fa-instagram"></i></a></li>
            <li id="li2"><a href="https://pinterest.com/"><i class="fab fa-pinterest"></i></a></li>
            <li id="li2"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
        <div>
          <ul id="ul3">
            <li id="li3"><a id="login" href="/login">LOGIN</a><i class="far fa-user"></i></a></li>
            <li id="li3"><a id="registro" href="/register">REGISTRARSE</a><i class="fas fa-lock"></i></a>
            </li>
          </ul>
        </div>
      </section>
    </nav>
    <section>
      <div class="grad" id="background">
        <a href="/index" class=""><img src="img/1.jpg" alt="" class="logo"></a>
      </div>
    </section>
    <section>
      <div class="shift">
        <nav class="navbar navbar-expand-lg navbar-light bg-white" id="nav2">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a  class="nav-link" href="sumary-art.php">VINILOS COCINAS <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sumary-art.php">VINILOS LIVIGS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sumary-art.php">VINILOS BAÑOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sumary-art.php">VINILOS DORMITORIOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sumary-art.php">VINILOS INFANTILES</a>
              </li>
            </ul>
            <div>
              <ul>
                <li id="li5">
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </li>
              </ul>
            </div>
            <div>
              <ul>
                <li id="li6">
                  <a id="carrito" href="carrito.php" <?php echo (empty($_SESSION["CARRITO"]))?0:count($_SESSION["CARRITO"]);?>>Mi CARRITO<i class="fas fa-shopping-cart"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </section>
  </header>
</div>
@endsection
