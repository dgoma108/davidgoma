<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <span class="text-primary">David</span>Gomà
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
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
                        Modern Bootstrap
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('docs.*') ? 'active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown">
                        Documentación
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('docs.index') }}">Overview</a></li>
                        <li><a class="dropdown-item" href="{{ route('docs.typography') }}">Typography</a></li>
                        <li><a class="dropdown-item" href="{{ route('docs.components') }}">Components</a></li>
                        <li><a class="dropdown-item" href="{{ route('docs.utilities') }}">Utilities</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('docs.examples') }}">Examples</a></li>
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
