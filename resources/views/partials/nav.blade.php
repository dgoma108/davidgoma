<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <span class="text-primary">David</span>Gomà
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('portfolio.*') ? 'active' : '' }}" href="{{ route('portfolio.index') }}">
                        Portfolio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('modern-bootstrap') ? 'active' : '' }}" href="{{ route('modern-bootstrap') }}">
                        Modern Bootstrap Extension
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('docs.*') ? 'active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown">
                        Documentación
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('docs.overview') }}">Overview</a></li>
                        <li><a class="dropdown-item" href="{{ route('docs.typography') }}">Typography</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('docs.banners') }}">Banners</a></li>
                        <li><a class="dropdown-item" href="{{ route('docs.buttons') }}">Buttons</a></li>
                        <li><a class="dropdown-item" href="{{ route('docs.cards') }}">Cards</a></li>
                        <li><a class="dropdown-item" href="{{ route('docs.forms.overview') }}">Forms</a></li>
                        <li><a class="dropdown-item" href="{{ route('docs.navbar') }}">Navbar</a></li>
                        <li><a class="dropdown-item" href="{{ route('docs.tables') }}">Tables</a></li>

                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('docs.cookies-banner') }}" target="_blank">Cookies Banner</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                        Contacto
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
