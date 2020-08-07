<nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">
            {{ config('app.name', 'Administración de materias') }}
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link current" href="{{ route('home') }}">PERFIL<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('inscMaterias') }}">INSCRIPCIÓN DE MATERIAS</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">ACERCA DE</a>
                    </li>
                </ul>
                <div class="form-inline mt-2 mt-md-0 red-bg rounded">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
