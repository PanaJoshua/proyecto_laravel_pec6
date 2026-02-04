<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-3">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('libros.index') }}">Mis Libros</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link {{ setActivo('inicio') }}" href="{{ route('inicio') }}">Inicio</a></li>
        <li class="nav-item"><a class="nav-link {{ setActivo('libros.*') }}" href="{{ route('libros.index') }}">Libros</a></li>
        <li class="nav-item"><a class="nav-link {{ setActivo('contacto') }}" href="#">Contacto</a></li>
        @guest
          <li class="nav-item"><a class="nav-link {{ setActivo('login')}}" href="{{ route('login') }}">Login</a></li>
        @endguest
        @auth
          <li class="nav-item"><a class="nav-link {{ setActivo('logout')}}" href="{{ route('logout') }}">Logout</a></li>
        @endauth
      </ul>
    </div>
  </div>
</nav>