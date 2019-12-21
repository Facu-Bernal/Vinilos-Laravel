@section('header')
<div class="container-fluid">
  <header>
    <nav id="nav1">
      <section>
        <div>
          <ul id="ul1">
            <li id="li1"><a href="/envios">ENVIOS A TODO EL PAIS</a><i class="fas fa-truck"></i></a></li>
            <li id="li1"><a href="/pagos">METODOS DE PAGO <i class="fas fa-dollar-sign"></i></a></li>
            <li id="li1"><a href="/contacto">CONTACTENOS <i class="fas fa-at"></i></a></li>
          </ul>
        </div>
        <div class="dropdown">
          <ul id="ul4">
            <li id="li6">
              <a href="cart"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span
                  class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span></a>
            </li>
          </ul>
          <div class="dropdown-menu">
            <div class="row total-header-section">
              <div class="col-lg-6 col-sm-6 col-6">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                  class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
              </div>

              <?php $total = 0 ?>
              @foreach((array) session('cart') as $id => $details)
              <?php $total += $details['price'] * $details['quantity'] ?>
              @endforeach

              <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
              </div>
            </div>

            @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            <div class="row cart-detail">
              <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                <img src="{{ $details['photo'] }}" />
              </div>
              <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                <p>{{ $details['name'] }}</p>
                <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count">
                  Quantity:{{ $details['quantity'] }}</span>
              </div>
            </div>
            @endforeach
            @endif
            <div class="row">
              <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
              </div>
            </div>
          </div>
        </div>
        <div>
          <ul id="ul2">
            <li id="li2">
             <a href="cart"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span></a>
            </li>
            <li id="li2"><a href="https://facebook.com/"><i class="fab fa-facebook"></i></a></li>
            <li id="li2"><a href="https://instagram.com/"><i class="fab fa-instagram"></i></a></li>
            <li id="li2"><a href="https://pinterest.com/"><i class="fab fa-pinterest"></i></a></li>
            <li id="li2"><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </section>
    </nav>
    <section>
      <div class="grad" id="background">
        <a href="/home"><img src="img/1.jpg" alt="logo_vinilos" class="logo"></a>
      </div>
    </section>
    <section>
      <div class="shift">
        <nav class="navbar navbar-expand-lg navbar-light bg-white" id="nav2">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="/cocina">VINILOS COCINAS <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="living">VINILOS LIVIGS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dormitorio">VINILOS DORMITORIOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="infantil">VINILOS INFANTILES</a>
              </li>
            </ul>
            <div>
              <ul id="ul3">
                @guest
                <li id="li3">
                  <a id="login" href="{{ route('login')}}">{{ __('LOGIN') }}</a><i class="far fa-user"></i></a>
                </li>
                @if (Route::has('register'))
                <li id="li3">
                  <a id="registro" href="{{ route('register') }}">{{ __('REGISTRARSE') }}</a><i class="fas fa-lock"></i>
                </li>
                @endif
                @else
                <div class="nombre_login">
                  <div class="dropdown show" id="logout">

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <ul>
                        <li>
                          <a class="dropdown-item" href="/perfil">{{('Perfil')}}</a>
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                          </form>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                @endguest
              </ul>
            </div>
            <div>
              {{-- <ul>
                <li id="li5">
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </li>
              </ul> --}}
            </div>
          </div>
        </nav>
      </div>
    </section>
  </header>
</div>
@endsection
