<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img src="img/logoCreart.png" alt="logo">
        <a class="navbar-brand" href="{{ route('index') }}">CreArt</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Explorar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Crear</a>
                </li>
            </ul>
            @if (auth()->check())
                <!-- Mostrar elementos solo si el usuario está autenticado -->
                <form>
                    <div class="search">
                        <span class="search-icon material-symbols-outlined">search</span>
                        <input class="search-input" type="search" placeholder="Busca tus ideas">
                    </div>
                    {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button> --}}
                </form>
                <div class="iconos">
                    <a href="{{ route('perfil') }}"><i class="fa-regular fa-circle-user fa-2xl" style="color: #8600f3;"></i></a>
                    <i class="fa-solid fa-bell fa-xl"></i>
                    <button class="btn fa-solid fa-chevron-down fa-lg" type="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="true" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('perfil') }}">Perfil</a></li>
                        <li><a class="dropdown-item" href="#">Configuración</a></li>
                        <li><a class="dropdown-item" href="{{ route('Cerrar.Sesion') }}">Cerrar Sesión</a></li>
                    </ul>
                </div>
            @else
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="btn-abrir-modal">Ingresar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="btn-abrir-modal-registro">Registrarse</a>
                    </li>
            @endif
            </ul>
        </div>
    </div>
</nav>
