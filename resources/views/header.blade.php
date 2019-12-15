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
            {{-- <li class="dropdown" id="logout">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="true" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <a href="/perfil">{{('Perfil')}}</a> --}}
            {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}

            {{-- <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form> --}}
            {{-- </div> --}}
            {{-- </li> --}}
            <div class="nombre_login">
              <div class="dropdown show" id="logout">

                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="true" v-pre>
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
              {{-- <ul>
                <li id="li5">
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </li>
              </ul> --}}
            </div>
            <div>
              <ul id="ul4">
                <li id="li6">
                  <a id="carrito" href="/carrito"><i class="fas fa-shopping-cart"></i>( 0 )</a>
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