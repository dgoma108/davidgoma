<x-layouts.app>
    <!-- NAVBAR -->
    {{-- <nav class="navbar navbar-expand-lg navbar-custom"">
        <div class="container">
            <a class="navbar-brand" href="#home">
                David Gomà
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aventuras">Aventuras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#videos">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#la-roja">La Roja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rutas">Rutas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tipografia">Tipografía</a>
                    </li>
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarWebDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Web
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarWebDropdown">
                            <a class="dropdown-item" href="{{ route('home') }}" >Mi perfil</a>
                            <a class="dropdown-item" href="{{ route('home') }}#aventuras" >Aventuras</a>
                            <a class="dropdown-item" href="{{ route('home') }}#videos" >Videos</a>
                            <a class="dropdown-item" href="{{ route('home') }}#la-roja" >La Roja</a>
                            <a class="dropdown-item" href="{{ route('home') }}#rutas" >Rutas</a>
                            <a class="dropdown-item" href="{{ route('home') }}#contacto" >Contacto</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{">Repostages</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Auth::user()->name
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="" >Mi perfil
                            </a>
                            <a class="dropdown-item" href=""
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

            <!-- Social Icons -->
            <div class="social-nav">
                <a href="https://youtube.com/@los_de_la_roja" target="_blank" title="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://instagram.com/los_de_la_roja" target="_blank" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://tiktok.com/@los_de_la_roja" target="_blank" title="TikTok">
                    <i class="fab fa-tiktok"></i>
                </a>
            </div>
        </div>
        </div>
    </nav> --}}

    <!-- HERO SECTION -->
    <section class="hero-modern">
        <div class="container">
            <h1 class="mb-4">Modern Bootstrap Extension</h1>
            <p class="mb-5">Un sistema de diseño moderno y eficiente para crear interfaces web increíbles basado en Bootstrap</p>
            <a href="#demo" class="btn btn-primary btn-lg">Ver Demo</a>
            <a href="#" class="btn btn-outline btn-lg" >Documentación</a>
        </div>
    </section>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="container mt-5" id="demo">

        <!-- ALERTAS DEMO -->
        <section class="mb-5">
            <h2>Sistema de Alertas</h2>
            <div class="alert alert-success">
                <strong>¡Éxito!</strong> El framework se ha cargado correctamente.
            </div>
            <div class="alert alert-warning">
                <strong>Atención:</strong> Esta es una versión de demostración.
            </div>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <div class="alert alert-danger">
                <strong>Peligro:</strong> Ejemplo de alerta de peligro para pruebas.
            </div>
            <div class="alert alert-error">
                <strong>Error:</strong> Ejemplo de alerta de error para pruebas.
            </div>
        </section>

        <!-- GRID SYSTEM DEMO -->
        <section class="mb-5">
            <h2>Sistema de Grid</h2>
            <div class="row mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <strong>col-12</strong> - Ancho completo
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <strong>col-6</strong> - 50% del ancho
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <strong>col-6</strong> - 50% del ancho
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <strong>col-4</strong> - 33.33%
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <strong>col-4</strong> - 33.33%
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <strong>col-4</strong> - 33.33%
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- COMPONENTES DEMO -->
        <section class="mb-5">
            <h2>Componentes</h2>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Tarjeta Básica</h4>
                        </div>
                        <div class="card-body">
                            <p>Esta es una tarjeta básica con header y body. Incluye efectos hover y sombras sutiles.</p>
                            <a href="#" class="btn btn-primary">Acción Principal</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Tarjeta Simple</h4>
                            <p>Tarjeta sin header, solo con contenido principal. Ideal para mostrar información de forma clara.</p>
                            <div class="mt-3">
                                <a href="#" class="btn btn-secondary btn-sm">Secundario</a>
                                <a href="#" class="btn btn-outline btn-sm">Outline</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h4>Información</h4>
                            <p class="text-secondary">Ejemplo de tarjeta con texto secundario y diferentes tamaños de botón.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Última actualización: hace 5 minutos</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TIPOGRAFÍA DEMO -->
        <section class="mb-5" id="tipografia">
            <h2>Tipografía</h2>

            <!-- Estilos de Fuente: Casual vs Profesional -->
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="mb-4">Estilos de Fuente</h4>
                    <div class="row g-4">

                        <!-- Columna Casual -->
                        <div class="col-md-6">
                            <div class="border rounded p-3 h-100">
                                <h3 class="heading-casual mb-3">Estilo Casual</h3>
                                <p class="font-casual mb-2">
                                    Este es un párrafo con tipografía casual. Perfecta para sitios más desenfadados como portales deportivos o webs con personalidad divertida.
                                </p>
                                <p class="font-casual small text-muted">
                                    Fuente: Nunito - Ideal para losdelaroja.es
                                </p>
                            </div>
                        </div>

                        <!-- Columna Profesional -->
                        <div class="col-md-6">
                            <div class="border rounded p-3 h-100">
                                <h3 class="heading-professional mb-3">Estilo Profesional</h3>
                                <p class="font-professional mb-2">
                                    Este es un párrafo con tipografía profesional. Perfecta para aplicaciones SaaS, dashboards y sitios corporativos que requieren seriedad.
                                </p>
                                <p class="font-professional small text-muted">
                                    Fuente: Inter - Ideal para calcunom.es
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Jerarquía y Ejemplos Completos -->
            <div class="row g-4">

                <!-- Jerarquía de Títulos -->
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="mb-3">Jerarquía de Títulos</h4>
                            <h1>Heading 1</h1>
                            <h2>Heading 2</h2>
                            <h3>Heading 3</h3>
                            <h4>Heading 4</h4>
                            <h5>Heading 5</h5>
                            <h6>Heading 6</h6>
                        </div>
                    </div>
                </div>

                <!-- Tamaños y Estilos de Texto -->
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="mb-3">Tamaños y Estilos</h4>
                            <p class="fs-1">Texto grande (.fs-1)</p>
                            <p class="fs-3">Texto medio (.fs-3)</p>
                            <p>Texto normal</p>
                            <p class="small">Texto pequeño (.small)</p>
                            <hr>
                            <p class="text-start">Texto alineado al inicio</p>
                            <p class="text-center">Texto centrado</p>
                            <p class="text-end">Texto alineado al final</p>
                            <hr>
                            <p class="text-primary">Texto primario</p>
                            <p class="text-secondary">Texto secundario</p>
                            <p class="text-muted">Texto muted</p>
                        </div>
                    </div>
                </div>

                <!-- Pesos de Fuente -->
                <div class="col-lg-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="mb-3">Pesos de Fuente</h4>
                            <p class="fw-bold">Texto bold (.fw-bold)</p>
                            <p class="fw-bolder">Texto bolder (.fw-bolder)</p>
                            <p class="fw-semibold">Texto semibold (.fw-semibold)</p>
                            <p class="fw-medium">Texto medium (.fw-medium)</p>
                            <p class="fw-normal">Texto normal (.fw-normal)</p>
                            <p class="fw-light">Texto light (.fw-light)</p>
                            <p class="fw-lighter">Texto lighter (.fw-lighter)</p>
                            <hr>
                            <p class="fst-italic">Texto italic (.fst-italic)</p>
                            <p class="fst-normal">Texto normal (.fst-normal)</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!-- BOTONES DEMO -->
        <section class="mb-5">
            <h2>Botones</h2>
            <div class="card">
                <div class="card-body">
                    <h4>Estilos de Botones</h4>
                    <div class="mb-3">
                        <button class="btn btn-primary"><i class="fa-solid fa-house"></i>Primario</button>
                        <button class="btn btn-secondary">Secundario</button>
                        <button class="btn btn-outline">Outline</button>
                        <button class="btn btn-glow">Glow</button>
                        <button class="btn btn-glass">Glass</button>
                        <button class="btn btn-ghost">Ghost</button>
                        <button class="btn btn-animated">Animated</button>
                        <button class="btn btn-ripple">Ripple</button>
                    </div>
                    <hr>
                    <h4>Tamaños</h4>
                    <div class="mb-3">
                        <button class="btn btn-primary btn-xs">Pequeño XS</button>
                        <button class="btn btn-primary btn-sm">Pequeño SM</button>
                        <button class="btn btn-primary">Normal</button>
                        <button class="btn btn-primary btn-lg">Grande LG</button>
                        <button class="btn btn-primary btn-xl">Grande XL</button>
                    </div>
                    <hr>
                    <h4>Botones especiales</h4>
                    <div class="mb-3">
                        <button class="btn btn-primary btn-loading">Loating</button>
                        <button class="btn btn-primary btn-fab">Botón Fab</button>
                        <button class="btn btn-social btn-google"><i class="fa-brands fa-google"></i></button>
                        <button class="btn btn-social btn-github"><i class="fa-brands fa-github"></i></button>
                        <button class="btn btn-primary btn-icon"><i class="fa-solid fa-house"></i>Home</button>
                    </div>
                </div>
            </div>
        </section>

        {{-- NAVBAR --}}
        @include('sections.navbar')


        <!-- UTILIDADES DEMO -->
        <section class="mb-5">
            <h2>Utilidades</h2>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>Espaciado</h4>
                            <div class="p-3 bg-secondary rounded mb-2">Padding 3</div>
                            <div class="p-2 bg-tertiary rounded mb-3">Padding 2</div>
                            <div class="mt-4 p-2 bg-secondary rounded">Margin top 4</div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h4>Sombras y Bordes</h4>
                            <div class="p-3 shadow-sm rounded mb-2 bg-primary">Sombra pequeña</div>
                            <div class="p-3 shadow-md rounded mb-2 bg-secondary">Sombra media</div>
                            <div class="p-3 shadow-lg rounded bg-tertiary">Sombra grande</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- TABLES --}}
        @include('sections.table')

        {{-- FORMS --}}
        @include('sections.forms')

    </main>

    <!-- FOOTER -->
{{--     <footer class="bg-tertiary mt-5 p-4 text-center">
        <div class="container">
            <p class="text-muted mb-0">© 2025 Framework CSS Blade - Desarrollado para demostración</p>
        </div>
    </footer> --}}


    <script>
        // Pequeña demostración de interactividad
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Framework CSS Blade cargado correctamente ✨');

            // Efecto de click en botones
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    if (this.href === '#' || this.href === '') {
                        e.preventDefault();
                        console.log('Botón clickeado:', this.textContent);
                    }
                });
            });
        });
    </script>

</x-layouts.app>
