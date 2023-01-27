<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">Grupo 5</a>

        {{-- menú hamburguesa --}}
      <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


     {{--  Enlaces --}}
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                aria-current="page"
                href="{{ route('home') }}">Home</a>
          </li>
        {{-- condicional para mostrar contenido según si el usuario se encuentra logeado --}}
          @guest
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>


          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Iniciar sesión</a>
          </li>
            @else
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-primary text-white nav-link" >{{ __('logout') }}</button>
            </form>
          </li>
        @endguest
        </ul>
      </div>
    </div>
  </nav>
