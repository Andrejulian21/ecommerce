<nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid px-4">
            <!-- Marca / Logo -->
            <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ url('/') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                    class="bi bi-shop me-2" viewBox="0 0 16 16">
                    <path
                        d="M2.97 1a1 1 0 0 0-.948.684L.165 5H15.835l-1.857-3.316A1 1 0 0 0 13.03 1H2.97zM16 6H0v2a2 2 0 0 0 2 2v4.5a.5.5 0 0 0 .5.5H6v-3a2 2 0 1 1 4 0v3h3.5a.5.5 0 0 0 .5-.5V10a2 2 0 0 0 2-2V6z" />
                </svg>
                <span class="nav-brand-text">Ecommerce</span>
            </a>

            <!-- Botón colapsable -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenido del navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Menú izquierdo -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{ url('/products') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom btn-create" href="{{ url('/products/create') }}">Crear
                            Producto</a>
                    </li>

                </ul>

                <!-- Menú derecho (autenticación) -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom btn-create" href="{{ route('admin.index') }}">Admin</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom" href="{{ route('login') }}">Iniciar Sesión</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link nav-link-custom" href="{{ route('register') }}">Registrarse</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link nav-link-custom dropdown-toggle" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Cerrar sesión
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
