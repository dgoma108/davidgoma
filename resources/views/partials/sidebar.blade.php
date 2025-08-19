<!-- Sidebar -->
<nav class="col-lg-3 col-xl-2 docs-sidebar">
    <div class="position-sticky pt-3">
        <div class="docs-nav">
            <!-- Getting Started -->
            <div class="nav-section">Introducción</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('docs.index') ? 'active' : '' }}"
                        href="{{ route('docs.index') }}">
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
                <li class="nav-item">
                    <a class="nav-link" href="#font-styles">
                        <span>Estilos de Fuente</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#headings">
                        <span>Títulos</span>
                    </a>
                </li>
            </ul>

            <!-- Components -->
            <div class="nav-section">Componentes</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('docs.components') ? 'active' : '' }}"
                        href="{{ route('docs.components') }}">
                        <span>Components</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#buttons">
                        <span>Botones</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cards">
                        <span>Cards</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#forms">
                        <span>Formularios</span>
                    </a>
                </li>
            </ul>

            <!-- Utilities -->
            <div class="nav-section">Utilidades</div>
            <ul class="nav flex-column">
                <li class="nav-item">
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
                </li>
            </ul>

            <!-- Examples -->
            <div class="nav-section">Ejemplos</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('docs.examples') ? 'active' : '' }}"
                        href="{{ route('docs.examples') }}">
                        <span>Examples</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#professional-theme">
                        <span>Tema Profesional</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#casual-theme">
                        <span>Tema Casual</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
