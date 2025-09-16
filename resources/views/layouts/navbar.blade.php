
{{-- <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top"> --}}
        <div class="container">
            <!-- Logo/Brand -->
            <a class="navbar-brand text-primary" href="#">
                <i class="bi bi-shop"></i>
                TiendaOnline
            </a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Left Navigation Links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Electronics</a></li>
                            <li><a class="dropdown-item" href="#">Fashion</a></li>
                            <li><a class="dropdown-item" href="#">Home & Garden</a></li>
                            <li><a class="dropdown-item" href="#">Sports</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Todos los productos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>

                <!-- Search Form -->
                <form class="d-flex search-form me-3" role="search">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Buscar productos..." aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>

                <!-- Right Navigation Links -->
                <ul class="navbar-nav">
                    <!-- User Account Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i>
                            Mi Cuenta
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">
                                <i class="bi bi-person me-2"></i>Perfil
                            </a></li>
                            <li><a class="dropdown-item" href="#">
                                <i class="bi bi-bag me-2"></i>Mis Pedidos
                            </a></li>
                            <li><a class="dropdown-item" href="#">
                                <i class="bi bi-heart me-2"></i>Lista de Deseos
                            </a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">
                                <i class="bi bi-gear me-2"></i>Configuración
                            </a></li>
                            <li><a class="dropdown-item" href="#">
                                <i class="bi bi-box-arrow-right me-2"></i>Cerrar Sesión
                            </a></li>
                        </ul>
                    </li>

                    <!-- Shopping Cart -->
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="#">
                            <div class="cart-icon-container">
                                <i class="bi bi-cart3" style="font-size: 1.2rem;"></i>
                                <span class="badge bg-danger badge-cart">3</span>
                            </div>
                            <span class="d-lg-none ms-2">Carrito</span>
                        </a>
                    </li>

                    <!-- Wishlist -->
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="#">
                            <i class="bi bi-heart" style="font-size: 1.1rem;"></i>
                            <span class="d-lg-none ms-2">Favoritos</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


