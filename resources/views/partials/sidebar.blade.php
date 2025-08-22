<!-- Sidebar -->
<nav class="col-lg-3 col-xl-2 docs-sidebar">
    <div class="position-sticky pt-3">
        <div class="docs-nav">
            <!-- Getting Started -->
            <div class="nav-section">Introducción</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('docs.overview') ? 'active' : '' }}"
                        href="{{ route('docs.overview') }}">
                        <span>Overview</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#getting-started">
                        <span>Instalación</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#configuration">
                        <span>Configuración</span>
                    </a>
                </li>
            </ul>

            <!-- Typography -->
            <div class="nav-section">Tipografía</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('docs.typography') ? 'active' : '' }}"
                        href="{{ route('docs.typography') }}">
                        <span>Typography</span>
                    </a>
                </li>
            </ul>

            <!-- Components -->
            <div class="nav-section">Componentes</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('docs.banners') ? 'active' : '' }}"
                        href="{{ route('docs.banners') }}">
                        <span>Banners</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('docs.buttons') ? 'active' : '' }}"
                        href="{{ route('docs.buttons') }}">
                        <span>Botones</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('docs.cards') ? 'active' : '' }}"
                        href="{{ route('docs.cards') }}">
                        <span>Cards</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('docs.forms.overview') ? 'active' : '' }}"
                        href="{{ route('docs.forms.overview') }}">
                        <span>Forms</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('docs.navbar') ? 'active' : '' }}"
                        href="{{ route('docs.navbar') }}">
                        <span>Navbar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('docs.tables') ? 'active' : '' }}"
                        href="{{ route('docs.tables') }}">
                        <span>Tables</span>
                    </a>
                </li>
            </ul>

            <!-- Utilities -->
            <div class="nav-section">Utilidades</div>
            <ul class="nav flex-column">
                {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('docs.utilities') ? 'active' : '' }}"
                        href="{{ route('docs.utilities') }}">
                        <span>Utilities</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#spacing">
                        <span>Espaciado</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#colors">
                        <span>Colores</span>
                    </a>
                </li> --}}
            </ul>

            <!-- Examples -->
            <div class="nav-section">Ejemplos</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('docs.cookies-banner') ? 'active' : '' }}"
                        href="{{ route('docs.cookies-banner') }}" target="_blank">
                        <span>Cookies Banner</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
