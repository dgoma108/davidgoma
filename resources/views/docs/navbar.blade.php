<x-layouts.docs>

<x-slot:title>Navbar - Modern Bootstrap Extension</x-slot:title>

<x-slot:styles>
<style>
/* Estilos específicos solo para la documentación */
.navbar-demo {
    background: white;
    border: 1px solid #dee2e6;
    border-radius: 0.5rem;
    padding: 1.5rem;
    margin: 1rem 0;
    overflow: hidden;
}

.navbar-preview {
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem;
    overflow: hidden;
    margin: 1rem 0;
    background: #f8fafc;
}

.component-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin: 1rem 0;
}

.demo-container {
    height: 300px;
    position: relative;
    overflow: hidden;
    border-radius: 0.5rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.floating-demo {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    height: 200px;
    position: relative;
    border-radius: 0.5rem;
    overflow: hidden;
}

.dark-demo {
    background: #0f172a;
    color: white;
    padding: 2rem;
    border-radius: 0.5rem;
}

/* Estilos demo para navbars */
.demo-navbar {
    position: relative;
    z-index: 1;
}

.navbar-glass-demo {
    background: rgba(255, 255, 255, 0.8) !important;
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-floating-demo {
    position: absolute;
    top: 1rem;
    left: 50%;
    transform: translateX(-50%);
    width: calc(100% - 2rem);
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border-radius: 1rem;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    padding: 0.75rem 2rem;
}

.mega-menu-demo {
    position: relative;
    z-index: 1000;
}

.search-demo {
    background: rgba(243, 244, 246, 0.8);
    border: none;
    border-radius: 50px;
    padding: 0.5rem 2.5rem 0.5rem 1rem;
    font-size: 0.875rem;
    width: 200px;
    transition: all 0.3s ease;
}

.search-demo:focus {
    outline: none;
    background: white;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    width: 250px;
}
</style>
</x-slot:styles>

<!-- Header de la página -->
<div class="docs-header">
    <h1 class="display-5">Navbar</h1>
    <p class="lead text-muted">Sistema completo de navegación moderno con efectos glass, floating, mega menús y múltiples variantes adaptadas para aplicaciones web contemporáneas.</p>
</div>

<!-- Navigation Tabs -->
<ul class="nav nav-pills mb-4" id="navbar-tabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="basic-tab" data-bs-toggle="pill" data-bs-target="#basic" type="button" role="tab">Navbar Básico</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="variants-tab" data-bs-toggle="pill" data-bs-target="#variants" type="button" role="tab">Variantes</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="advanced-tab" data-bs-toggle="pill" data-bs-target="#advanced" type="button" role="tab">Componentes Avanzados</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="layouts-tab" data-bs-toggle="pill" data-bs-target="#layouts" type="button" role="tab">Layouts</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="special-tab" data-bs-toggle="pill" data-bs-target="#special" type="button" role="tab">Especiales</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="examples-tab" data-bs-toggle="pill" data-bs-target="#examples" type="button" role="tab">Ejemplos</button>
    </li>
</ul>

<div class="tab-content" id="navbar-content">

    <!-- Basic Navbar Tab -->
    <div class="tab-pane fade show active" id="basic" role="tabpanel">
        <h2>Navbar Básico Mejorado</h2>
        <p>El navbar básico incluye mejoras visuales, transiciones suaves, efectos hover mejorados y mejor accesibilidad.</p>

        <div class="navbar-preview">
            <nav class="navbar navbar-expand-lg demo-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="font-family: 'Inter', sans-serif; font-weight: 800; font-size: 1.5rem;">Brand</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBasic">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarBasic">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contacto</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;nav class="navbar navbar-expand-lg"&gt;
  &lt;div class="container-fluid"&gt;
    &lt;a class="navbar-brand" href="#"&gt;Brand&lt;/a&gt;
    &lt;button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"&gt;
      &lt;span class="navbar-toggler-icon"&gt;&lt;/span&gt;
    &lt;/button&gt;
    &lt;div class="collapse navbar-collapse" id="navbarNav"&gt;
      &lt;ul class="navbar-nav me-auto"&gt;
        &lt;li class="nav-item"&gt;
          &lt;a class="nav-link active" href="#"&gt;Inicio&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="nav-item"&gt;
          &lt;a class="nav-link" href="#"&gt;Productos&lt;/a&gt;
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/nav&gt;</code></pre>
        </div>

        <h3>Características Principales</h3>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4>🎨 Mejoras Visuales</h4>
                        <ul>
                            <li><strong>Brand:</strong> Tipografía display con peso extra-bold</li>
                            <li><strong>Hover effect:</strong> Escala 1.05 en brand</li>
                            <li><strong>Links:</strong> Transiciones suaves con background highlight</li>
                            <li><strong>Focus:</strong> Ring de enfoque personalizado</li>
                            <li><strong>Backdrop filter:</strong> Efecto blur nativo</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4>⚡ Funcionalidades</h4>
                        <ul>
                            <li><strong>Toggler animado:</strong> Transforma en X al expandir</li>
                            <li><strong>Estados activos:</strong> Indicador visual automático</li>
                            <li><strong>Responsive:</strong> Colapsa elegantemente en móvil</li>
                            <li><strong>Accesible:</strong> ARIA labels y navegación por teclado</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h3>Toggler Animado</h3>
        <div class="navbar-demo">
            <p>El toggler se transforma suavemente de hamburguesa a X:</p>
            <div class="d-flex align-items-center gap-4">
                <div>
                    <button id="togglerDemo" class="navbar-toggler collapsed" type="button" style="
                        border: 1px solid #dee2e6;
                        border-radius: 0.375rem;
                        padding: 0.5rem;
                        background: transparent;
                        position: relative;
                        width: 3rem;
                        height: 3rem;
                    ">
                        <span class="navbar-toggler-icon" id="togglerIcon" style="
                            display: block;
                            width: 1.5rem;
                            height: 2px;
                            background: #374151;
                            border-radius: 2px;
                            position: relative;
                            transition: all 0.3s ease;
                            margin: 0 auto;
                        "></span>
                    </button>
                    <small class="text-muted d-block mt-2 text-center">Click me!</small>
                </div>

                <div class="flex-fill">
                    <div class="alert alert-info mb-0">
                        <h6>✨ Funcionalidades:</h6>
                        <ul class="mb-0 small">
                            <li><strong>Estado normal:</strong> 3 líneas horizontales</li>
                            <li><strong>Estado expandido:</strong> Se transforma en X</li>
                            <li><strong>Transición:</strong> Suave con CSS transitions</li>
                            <li><strong>Accesible:</strong> Mantiene funcionalidad de teclado</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Variants Tab -->
    <div class="tab-pane fade" id="variants" role="tabpanel">
        <h2>Variantes de Navbar</h2>

        <h3>Navbar Glass (Transparente)</h3>
        <div class="demo-container">
            <nav class="navbar navbar-expand-lg navbar-glass-demo">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="font-weight: 800;">Glass Navbar</a>
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="#">Inicio</a>
                        <a class="nav-link" href="#">Productos</a>
                        <a class="nav-link" href="#">Contacto</a>
                    </div>
                </div>
            </nav>
            <div class="p-4" style="color: white; margin-top: 2rem;">
                <h4>Contenido de fondo</h4>
                <p>El navbar glass permite ver el contenido de fondo con efecto blur</p>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;nav class="navbar navbar-expand-lg navbar-glass"&gt;
  &lt;!-- Contenido del navbar --&gt;
&lt;/nav&gt;</code></pre>
        </div>

        <h3>Navbar Gradient</h3>
        <div class="navbar-preview">
            <nav class="navbar navbar-expand-lg" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="#" style="font-weight: 800;">Gradient</a>
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link text-white" href="#">Inicio</a>
                        <a class="nav-link text-white" href="#">Productos</a>
                        <a class="nav-link text-white" href="#">Contacto</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;nav class="navbar navbar-expand-lg navbar-gradient"&gt;
  &lt;!-- Los textos automáticamente se vuelven blancos --&gt;
&lt;/nav&gt;</code></pre>
        </div>

        <h3>Navbar Floating</h3>
        <div class="floating-demo">
            <nav class="navbar navbar-expand-lg navbar-floating-demo">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="font-weight: 800;">Floating</a>
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link" href="#">Inicio</a>
                        <a class="nav-link" href="#">Productos</a>
                        <a class="nav-link" href="#">Contacto</a>
                    </div>
                </div>
            </nav>
            <div class="p-4 text-center" style="color: white; margin-top: 4rem;">
                <h4>Navbar flotante separado del top</h4>
                <p>Perfecto para landing pages modernas</p>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;nav class="navbar navbar-expand-lg navbar-floating"&gt;
  &lt;!-- Se posiciona automáticamente flotando --&gt;
&lt;/nav&gt;</code></pre>
        </div>

        <h3>Navbar Scrolled (Dinámico)</h3>
        <div class="navbar-demo">
            <div class="alert alert-info">
                <h4>📱 Efecto Scroll Automático</h4>
                <p class="mb-0">El navbar cambia automáticamente cuando se hace scroll:</p>
                <ul class="mt-2 mb-0">
                    <li><strong>Inicial:</strong> Transparente o con fondo ligero</li>
                    <li><strong>Con scroll:</strong> Fondo sólido, sombra y padding reducido</li>
                    <li><strong>JavaScript:</strong> Detecta scroll y aplica clase <code>.navbar-scrolled</code></li>
                </ul>
            </div>

            <div class="d-flex gap-3">
                <div class="border rounded p-3 flex-fill">
                    <h6>Estado inicial</h6>
                    <small class="text-muted">Transparente, padding normal</small>
                </div>
                <div class="border rounded p-2 flex-fill" style="background: rgba(255,255,255,0.95); box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);">
                    <h6 class="small">Estado scrolled</h6>
                    <small class="text-muted">Sólido, padding reducido, sombra</small>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-javascript">// JavaScript para efecto scroll
window.addEventListener('scroll', function() {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 50) {
    navbar.classList.add('navbar-scrolled');
  } else {
    navbar.classList.remove('navbar-scrolled');
  }
});</code></pre>
        </div>
    </div>

    <!-- Advanced Components Tab -->
    <div class="tab-pane fade" id="advanced" role="tabpanel">
        <h2>Componentes Avanzados</h2>

        <h3>Mega Menu</h3>
        <div class="navbar-demo mega-menu-demo">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="font-weight: 800;">MegaMenu</a>
                    <div class="navbar-nav">
                        <div class="nav-item dropdown dropdown-mega">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Productos</a>
                            <div class="dropdown-menu" style="width: 600px; left: -200px;">
                                <div class="row g-4">
                                    <div class="col-md-4">
                                        <h6>Desarrollo</h6>
                                        <a class="dropdown-item" href="#">
                                            <span>🚀</span> Templates
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span>⚡</span> Componentes
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span>🎨</span> UI Kits
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>Marketing</h6>
                                        <a class="dropdown-item" href="#">
                                            <span>📈</span> Analytics
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span>📧</span> Email Tools
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span>🎯</span> Campaigns
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <h6>Soporte</h6>
                                        <a class="dropdown-item" href="#">
                                            <span>💬</span> Chat
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span>📚</span> Docs
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span>🎓</span> Tutorials
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="nav-item dropdown dropdown-mega"&gt;
  &lt;a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"&gt;Productos&lt;/a&gt;
  &lt;div class="dropdown-menu"&gt;
    &lt;div class="row"&gt;
      &lt;div class="col-md-4"&gt;
        &lt;h6&gt;Categoría&lt;/h6&gt;
        &lt;a class="dropdown-item" href="#"&gt;Opción 1&lt;/a&gt;
        &lt;a class="dropdown-item" href="#"&gt;Opción 2&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Búsqueda Integrada</h3>
        <div class="navbar-demo">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="font-weight: 800;">Search Nav</a>
                    <div class="navbar-nav me-auto">
                        <a class="nav-link" href="#">Inicio</a>
                        <a class="nav-link" href="#">Products</a>
                    </div>
                    <div class="navbar-search">
                        <input type="search" class="search-demo" placeholder="Buscar...">
                        <span class="position-absolute" style="right: 0.75rem; top: 50%; transform: translateY(-50%); color: #6b7280;">🔍</span>
                    </div>
                </div>
            </nav>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="navbar-search"&gt;
  &lt;input type="search" class="search-input" placeholder="Buscar..."&gt;
  &lt;span class="search-icon"&gt;🔍&lt;/span&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Dropdown Moderno</h3>
        <div class="component-grid">
            <div class="navbar-demo">
                <h4>Dropdown Estándar</h4>
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
                        Usuario
                    </button>
                    <ul class="dropdown-menu" style="position: static; display: block; border-radius: 0.75rem; border: none; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);">
                        <li><h6 class="dropdown-header">Mi Cuenta</h6></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon">👤</span> Perfil</a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon">⚙️</span> Configuración</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon">🚪</span> Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>

            <div class="navbar-demo">
                <h4>Con Iconos y Estados</h4>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                        Opciones
                    </button>
                    <ul class="dropdown-menu" style="position: static; display: block; border-radius: 0.75rem; border: none; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);">
                        <li><a class="dropdown-item active" href="#"><span class="dropdown-icon">📊</span> Dashboard</a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon">📈</span> Reportes</a></li>
                        <li><a class="dropdown-item" href="#"><span class="dropdown-icon">👥</span> Usuarios</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="#"><span class="dropdown-icon">🗑️</span> Eliminar</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <h3>CTA Button</h3>
        <div class="navbar-demo">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="font-weight: 800;">Brand</a>
                    <div class="navbar-nav me-auto">
                        <a class="nav-link" href="#">Inicio</a>
                        <a class="nav-link" href="#">Productos</a>
                    </div>
                    <div class="navbar-cta">
                        <a href="#" class="btn btn-primary">🚀 Empezar Gratis</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="navbar-cta"&gt;
  &lt;a href="#" class="btn btn-primary"&gt;Empezar Gratis&lt;/a&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    <!-- Layouts Tab -->
    <div class="tab-pane fade" id="layouts" role="tabpanel">
        <h2>Layouts de Navegación</h2>

        <h3>Logo Centrado</h3>
        <div class="navbar-preview">
            <nav class="navbar navbar-expand-lg navbar-center-logo">
                <div class="container-fluid">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Servicios</a>
                        </li>
                    </ul>
                    <a class="navbar-brand" href="#" style="font-weight: 800; position: absolute; left: 50%; transform: translateX(-50%);">Centro</a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Acerca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;nav class="navbar navbar-expand-lg navbar-center-logo"&gt;
  &lt;div class="container-fluid"&gt;
    &lt;ul class="navbar-nav"&gt;
      &lt;!-- Links izquierda --&gt;
    &lt;/ul&gt;
    &lt;a class="navbar-brand" href="#"&gt;Logo Centro&lt;/a&gt;
    &lt;ul class="navbar-nav"&gt;
      &lt;!-- Links derecha --&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/nav&gt;</code></pre>
        </div>

        <h3>Sidebar Navigation</h3>
        <div class="navbar-demo">
            <div class="row g-0" style="height: 300px;">
                <div class="col-md-3" style="background: #1f2937; color: white;">
                    <div class="p-3">
                        <h5 class="text-white">Dashboard</h5>
                        <nav class="nav flex-column mt-4">
                            <a class="nav-link text-white active" href="#" style="background: rgba(255,255,255,0.1); border-radius: 0.5rem; margin-bottom: 0.5rem;">
                                <span>📊</span> Overview
                            </a>
                            <a class="nav-link text-light" href="#" style="margin-bottom: 0.5rem; padding: 0.5rem;">
                                <span>👥</span> Users
                            </a>
                            <a class="nav-link text-light" href="#" style="margin-bottom: 0.5rem; padding: 0.5rem;">
                                <span>📈</span> Analytics
                            </a>
                            <a class="nav-link text-light" href="#" style="padding: 0.5rem;">
                                <span>⚙️</span> Settings
                            </a>
                        </nav>
                    </div>
                </div>
                <div class="col-md-9 bg-light">
                    <div class="p-3">
                        <h6>Contenido principal</h6>
                        <p class="text-muted mb-0">Sidebar navigation para dashboards</p>
                    </div>
                </div>
            </div>
        </div>

        <h3>Bottom Navigation (Móvil)</h3>
        <div class="navbar-demo">
            <div style="max-width: 300px; margin: 0 auto;">
                <div style="height: 200px; background: #f8fafc; border: 1px solid #e5e7eb; border-radius: 0.5rem; position: relative;">
                    <div class="p-3">
                        <h6>App Content</h6>
                        <p class="small text-muted">Contenido de la aplicación móvil</p>
                    </div>
                    <nav class="navbar fixed-bottom" style="position: absolute; bottom: 0; left: 0; right: 0; background: white; border-top: 1px solid #e5e7eb; border-radius: 0 0 0.5rem 0.5rem;">
                        <div class="container-fluid justify-content-around">
                            <a class="nav-link text-center" href="#" style="flex: 1;">
                                <div>🏠</div>
                                <small>Inicio</small>
                            </a>
                            <a class="nav-link text-center" href="#" style="flex: 1;">
                                <div>🔍</div>
                                <small>Buscar</small>
                            </a>
                            <a class="nav-link text-center text-primary" href="#" style="flex: 1;">
                                <div>❤️</div>
                                <small>Favoritos</small>
                            </a>
                            <a class="nav-link text-center" href="#" style="flex: 1;">
                                <div>👤</div>
                                <small>Perfil</small>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <h3>Breadcrumb Navigation</h3>
        <div class="navbar-demo">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background: none; padding: 0;">
                    <li class="breadcrumb-item">
                        <a href="#" style="color: #6366f1; text-decoration: none;">🏠 Inicio</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#" style="color: #6366f1; text-decoration: none;">Productos</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#" style="color: #6366f1; text-decoration: none;">Electrónicos</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page" style="color: #6b7280;">
                        Smartphone
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Special Tab -->
    <div class="tab-pane fade" id="special" role="tabpanel">
        <h2>Características Especiales</h2>

        <h3>Indicador de Página Activa</h3>
        <div class="navbar-demo">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="navbar-nav mx-auto">
                        <a class="nav-link" href="#" style="position: relative;">Inicio</a>
                        <a class="nav-link active" href="#" style="position: relative;">
                            Productos
                            <span style="position: absolute; bottom: -0.5rem; left: 50%; transform: translateX(-50%); width: 0.5rem; height: 0.5rem; background: #6366f1; border-radius: 50%;"></span>
                        </a>
                        <a class="nav-link" href="#" style="position: relative;">Servicios</a>
                        <a class="nav-link" href="#" style="position: relative;">Contacto</a>
                    </div>
                </div>
            </nav>
        </div>

        <h3>Animaciones de Entrada (Móvil)</h3>
        <div class="navbar-demo">
            <div class="alert alert-info">
                <h4>📱 Animaciones Fluidas</h4>
                <p class="mb-0">Los elementos del menú móvil aparecen con animaciones escalonadas:</p>
                <ul class="mt-2 mb-0">
                    <li><strong>Efecto:</strong> FadeIn + TranslateY desde arriba</li>
                    <li><strong>Delay:</strong> 0.1s entre cada elemento</li>
                    <li><strong>Duración:</strong> 0.3s por elemento</li>
                    <li><strong>Activación:</strong> Al expandir el menú móvil</li>
                </ul>
            </div>

            <div class="small">
                <strong>CSS Animation:</strong>
                <code>animation: navItemFadeIn 0.3s ease forwards;</code>
            </div>
        </div>

        <h3>Estados de Loading</h3>
        <div class="navbar-demo">
            <nav class="navbar navbar-expand-lg" style="position: relative;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="font-weight: 800;">Loading State</a>
                    <div class="navbar-nav me-auto">
                        <a class="nav-link" href="#">Inicio</a>
                        <a class="nav-link position-relative" href="#">
                            Cargando...
                            <span class="spinner-border spinner-border-sm ms-2" role="status" style="width: 1rem; height: 1rem;">
                                <span class="visually-hidden">Loading...</span>
                            </span>
                        </a>
                        <a class="nav-link" href="#">Contacto</a>
                    </div>
                </div>
            </nav>
        </div>

        <h3>Dark Mode Automático</h3>
        <div class="dark-demo">
            <h4>🌙 Adaptación Automática</h4>
            <nav class="navbar navbar-expand-lg" style="background: rgba(15, 23, 42, 0.8); backdrop-filter: blur(20px); border-radius: 0.5rem; padding: 1rem;">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="#" style="font-weight: 800;">Dark Mode</a>
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link text-gray-300" href="#">Inicio</a>
                        <a class="nav-link text-gray-300" href="#">Productos</a>
                        <a class="nav-link text-gray-100" href="#">Activo</a>
                    </div>
                </div>
            </nav>
            <div class="mt-3">
                <p>El navbar se adapta automáticamente usando <code>@media (prefers-color-scheme: dark)</code></p>
                <ul class="mb-0">
                    <li>Fondo oscuro con transparencia</li>
                    <li>Textos en tonos grises claros</li>
                    <li>Efectos glass ajustados</li>
                </ul>
            </div>
        </div>

        <h3>Notificaciones y Badges</h3>
        <div class="navbar-demo">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="font-weight: 800;">Notifications</a>
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link position-relative" href="#">
                            🔔 Notificaciones
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem;">
                                3
                                <span class="visually-hidden">mensajes no leídos</span>
                            </span>
                        </a>
                        <a class="nav-link position-relative" href="#">
                            💬 Mensajes
                            <span class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                                <span class="visually-hidden">Nuevo mensaje</span>
                            </span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Examples Tab -->
    <div class="tab-pane fade" id="examples" role="tabpanel">
        <h2>Ejemplos Completos</h2>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>🚀 SaaS Landing</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="demo-container" style="height: 250px;">
                            <nav class="navbar navbar-expand-lg navbar-floating-demo">
                                <div class="container-fluid">
                                    <a class="navbar-brand" href="#" style="font-weight: 800;">SaaSApp</a>
                                    <div class="navbar-nav me-auto">
                                        <a class="nav-link" href="#">Características</a>
                                        <a class="nav-link" href="#">Precios</a>
                                        <a class="nav-link" href="#">Recursos</a>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-outline-primary btn-sm">Login</a>
                                        <a href="#" class="btn btn-primary btn-sm">🚀 Gratis</a>
                                    </div>
                                </div>
                            </nav>
                            <div class="text-center text-white p-4" style="margin-top: 4rem;">
                                <h5>Navbar flotante perfecto para landing pages</h5>
                                <p class="mb-0">Glass effect + CTA buttons</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>📱 E-commerce Mobile</h4>
                    </div>
                    <div class="card-body">
                        <div style="max-width: 300px; margin: 0 auto; height: 400px; border: 2px solid #e5e7eb; border-radius: 1rem; position: relative; background: white;">
                            <!-- Top navbar -->
                            <nav class="navbar" style="background: white; border-bottom: 1px solid #e5e7eb; padding: 0.5rem 1rem;">
                                <div class="container-fluid justify-content-between">
                                    <button class="btn btn-link p-0">☰</button>
                                    <span style="font-weight: 700;">Shop</span>
                                    <div class="position-relative">
                                        <button class="btn btn-link p-0">🛒</button>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.5rem;">2</span>
                                    </div>
                                </div>
                            </nav>

                            <!-- Search -->
                            <div class="p-3">
                                <div class="position-relative">
                                    <input type="search" class="form-control" placeholder="Buscar productos..." style="padding-left: 2.5rem; border-radius: 25px;">
                                    <span style="position: absolute; left: 0.75rem; top: 50%; transform: translateY(-50%);">🔍</span>
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-3">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <div class="card border-0" style="background: #f8fafc;">
                                            <div class="card-body p-2 text-center">
                                                <div style="font-size: 2rem;">👕</div>
                                                <small>Ropa</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card border-0" style="background: #f8fafc;">
                                            <div class="card-body p-2 text-center">
                                                <div style="font-size: 2rem;">📱</div>
                                                <small>Tech</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Bottom navbar -->
                            <nav class="navbar" style="position: absolute; bottom: 0; left: 0; right: 0; background: white; border-top: 1px solid #e5e7eb; padding: 0.5rem;">
                                <div class="container-fluid justify-content-around">
                                    <a class="nav-link text-center p-1" href="#" style="color: #6366f1;">
                                        <div>🏠</div>
                                        <small style="font-size: 0.7rem;">Inicio</small>
                                    </a>
                                    <a class="nav-link text-center p-1" href="#">
                                        <div>🔍</div>
                                        <small style="font-size: 0.7rem;">Buscar</small>
                                    </a>
                                    <a class="nav-link text-center p-1" href="#">
                                        <div>❤️</div>
                                        <small style="font-size: 0.7rem;">Favoritos</small>
                                    </a>
                                    <a class="nav-link text-center p-1" href="#">
                                        <div>👤</div>
                                        <small style="font-size: 0.7rem;">Perfil</small>
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>🏢 Dashboard Empresarial</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="row g-0" style="height: 400px;">
                            <!-- Sidebar -->
                            <div class="col-md-3" style="background: linear-gradient(180deg, #1f2937 0%, #111827 100%); color: white;">
                                <div class="p-3">
                                    <div class="d-flex align-items-center mb-4">
                                        <div style="width: 2.5rem; height: 2.5rem; background: #6366f1; border-radius: 0.5rem; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem;">
                                            <span style="font-weight: bold; color: white;">A</span>
                                        </div>
                                        <div>
                                            <div style="font-weight: 600; font-size: 0.875rem;">Acme Corp</div>
                                            <div style="font-size: 0.75rem; color: #9ca3af;">Enterprise</div>
                                        </div>
                                    </div>

                                    <nav class="nav flex-column">
                                        <div style="font-size: 0.75rem; color: #9ca3af; text-transform: uppercase; font-weight: 600; margin-bottom: 0.5rem;">Principal</div>
                                        <a class="nav-link text-white d-flex align-items-center" href="#" style="background: rgba(99, 102, 241, 0.2); border-radius: 0.5rem; margin-bottom: 0.25rem; padding: 0.75rem;">
                                            <span style="margin-right: 0.75rem;">📊</span> Dashboard
                                        </a>
                                        <a class="nav-link text-light d-flex align-items-center" href="#" style="padding: 0.75rem; margin-bottom: 0.25rem;">
                                            <span style="margin-right: 0.75rem;">📈</span> Analytics
                                        </a>
                                        <a class="nav-link text-light d-flex align-items-center" href="#" style="padding: 0.75rem; margin-bottom: 0.25rem;">
                                            <span style="margin-right: 0.75rem;">👥</span> Usuarios
                                        </a>

                                        <div style="font-size: 0.75rem; color: #9ca3af; text-transform: uppercase; font-weight: 600; margin: 1rem 0 0.5rem 0;">Gestión</div>
                                        <a class="nav-link text-light d-flex align-items-center" href="#" style="padding: 0.75rem; margin-bottom: 0.25rem;">
                                            <span style="margin-right: 0.75rem;">📋</span> Proyectos
                                        </a>
                                        <a class="nav-link text-light d-flex align-items-center" href="#" style="padding: 0.75rem;">
                                            <span style="margin-right: 0.75rem;">⚙️</span> Configuración
                                        </a>
                                    </nav>
                                </div>
                            </div>

                            <!-- Main content -->
                            <div class="col-md-9" style="background: #f8fafc;">
                                <!-- Top navbar -->
                                <nav class="navbar" style="background: white; border-bottom: 1px solid #e5e7eb; padding: 1rem 1.5rem;">
                                    <div class="container-fluid">
                                        <div class="d-flex align-items-center">
                                            <h5 class="mb-0 me-3">Dashboard</h5>
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb mb-0" style="background: none;">
                                                    <li class="breadcrumb-item"><a href="#" style="color: #6366f1; text-decoration: none; font-size: 0.875rem;">Inicio</a></li>
                                                    <li class="breadcrumb-item active" style="font-size: 0.875rem;">Dashboard</li>
                                                </ol>
                                            </nav>
                                        </div>

                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <input type="search" class="form-control form-control-sm" placeholder="Buscar..." style="width: 200px; border-radius: 20px; padding-left: 2rem;">
                                                <span style="position: absolute; left: 0.75rem; top: 50%; transform: translateY(-50%); color: #6b7280;">🔍</span>
                                            </div>

                                            <div class="dropdown">
                                                <button class="btn btn-link position-relative p-1" data-bs-toggle="dropdown" style="color: #6b7280;">
                                                    🔔
                                                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                                        <span class="visually-hidden">Notificaciones</span>
                                                    </span>
                                                </button>
                                            </div>

                                            <div class="dropdown">
                                                <button class="btn btn-link d-flex align-items-center gap-2" data-bs-toggle="dropdown" style="text-decoration: none; color: inherit;">
                                                    <div style="width: 2rem; height: 2rem; background: #6366f1; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 0.875rem; font-weight: 600;">
                                                        JD
                                                    </div>
                                                    <div class="text-start d-none d-md-block">
                                                        <div style="font-size: 0.875rem; font-weight: 600; line-height: 1;">John Doe</div>
                                                        <div style="font-size: 0.75rem; color: #6b7280; line-height: 1;">Admin</div>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </nav>

                                <!-- Content -->
                                <div class="p-4">
                                    <div class="row g-3">
                                        <div class="col-md-3">
                                            <div class="card border-0" style="background: white;">
                                                <div class="card-body text-center">
                                                    <div style="font-size: 1.5rem;">📊</div>
                                                    <h6 class="mt-2 mb-1">Ventas</h6>
                                                    <div class="text-muted small">$12,345</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card border-0" style="background: white;">
                                                <div class="card-body text-center">
                                                    <div style="font-size: 1.5rem;">👥</div>
                                                    <h6 class="mt-2 mb-1">Usuarios</h6>
                                                    <div class="text-muted small">1,234</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card border-0" style="background: white;">
                                                <div class="card-body text-center">
                                                    <div style="font-size: 1.5rem;">📈</div>
                                                    <h6 class="mt-2 mb-1">Crecimiento</h6>
                                                    <div class="text-success small">+23%</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card border-0" style="background: white;">
                                                <div class="card-body text-center">
                                                    <div style="font-size: 1.5rem;">💰</div>
                                                    <h6 class="mt-2 mb-1">Ingresos</h6>
                                                    <div class="text-muted small">$45,678</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-success mt-4">
            <h4>💡 Mejores Prácticas</h4>
            <div class="row g-3">
                <div class="col-md-6">
                    <h5>🎯 UX/UI</h5>
                    <ul>
                        <li><strong>Consistencia:</strong> Usa la misma estructura en todas las páginas</li>
                        <li><strong>Accesibilidad:</strong> ARIA labels y navegación por teclado</li>
                        <li><strong>Responsive:</strong> Siempre incluye versión móvil</li>
                        <li><strong>Estados:</strong> Visual feedback para enlaces activos</li>
                        <li><strong>Loading:</strong> Indica estados de carga en navegación</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>⚡ Performance</h5>
                    <ul>
                        <li><strong>CSS crítico:</strong> Incluye estilos de navbar inline</li>
                        <li><strong>Scroll throttle:</strong> Optimiza eventos de scroll</li>
                        <li><strong>Lazy dropdowns:</strong> Carga contenido bajo demanda</li>
                        <li><strong>Prefetch:</strong> Precarga páginas de navegación frecuente</li>
                        <li><strong>Animaciones:</strong> Usa transform en lugar de cambiar layout</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="alert alert-info">
            <h4>🔧 Personalización Avanzada</h4>
            <div class="row g-3">
                <div class="col-md-4">
                    <strong>Variables SCSS:</strong>
                    <ul class="small mb-0">
                        <li><code>$font-family-display</code> - Tipografía del brand</li>
                        <li><code>$navbar-padding-y</code> - Espaciado vertical</li>
                        <li><code>$navbar-brand-font-size</code> - Tamaño de logo</li>
                        <li><code>$navbar-nav-link-padding</code> - Padding de links</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <strong>Clases disponibles:</strong>
                    <ul class="small mb-0">
                        <li><code>.navbar-glass</code> - Efecto cristal</li>
                        <li><code>.navbar-floating</code> - Posición flotante</li>
                        <li><code>.navbar-gradient</code> - Fondo degradado</li>
                        <li><code>.navbar-scrolled</code> - Estado con scroll</li>
                        <li><code>.navbar-center-logo</code> - Logo centrado</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <strong>JavaScript hooks:</strong>
                    <ul class="small mb-0">
                        <li>Scroll detection automático</li>
                        <li>Mobile menu animations</li>
                        <li>Dropdown positioning</li>
                        <li>Search functionality</li>
                        <li>Theme switching</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<x-slot:footerScripts>
<script>
// Demo interactivo para navbar
document.addEventListener('DOMContentLoaded', function() {
    // Toggle para hamburger menu demo
    const togglerDemo = document.getElementById('togglerDemo');
    const togglerIcon = document.getElementById('togglerIcon');

    if (togglerDemo && togglerIcon) {
        // Crear las líneas del hamburger menu
        function createHamburgerLines() {
            togglerIcon.innerHTML = '';

            // Línea del medio (la span original)
            togglerIcon.style.background = '#374151';

            // Crear pseudo-elementos con JavaScript
            const beforeLine = document.createElement('span');
            beforeLine.style.cssText = `
                position: absolute;
                top: -6px;
                left: 0;
                width: 100%;
                height: 2px;
                background: #374151;
                border-radius: 2px;
                transition: all 0.3s ease;
                transform-origin: center;
            `;

            const afterLine = document.createElement('span');
            afterLine.style.cssText = `
                position: absolute;
                bottom: -6px;
                left: 0;
                width: 100%;
                height: 2px;
                background: #374151;
                border-radius: 2px;
                transition: all 0.3s ease;
                transform-origin: center;
            `;

            togglerIcon.appendChild(beforeLine);
            togglerIcon.appendChild(afterLine);

            return { beforeLine, afterLine };
        }

        const lines = createHamburgerLines();

        togglerDemo.addEventListener('click', function() {
            const isCollapsed = this.classList.contains('collapsed');

            if (isCollapsed) {
                // Cambiar a X
                this.classList.remove('collapsed');
                togglerIcon.style.background = 'transparent';
                lines.beforeLine.style.transform = 'rotate(45deg)';
                lines.beforeLine.style.top = '0';
                lines.afterLine.style.transform = 'rotate(-45deg)';
                lines.afterLine.style.bottom = '0';
            } else {
                // Cambiar a hamburger
                this.classList.add('collapsed');
                togglerIcon.style.background = '#374151';
                lines.beforeLine.style.transform = 'rotate(0deg)';
                lines.beforeLine.style.top = '-6px';
                lines.afterLine.style.transform = 'rotate(0deg)';
                lines.afterLine.style.bottom = '-6px';
            }
        });
    }

    // Simulación del efecto scroll
    let scrolled = false;
    const demoScrollBtn = document.createElement('button');
    demoScrollBtn.textContent = '📜 Simular Scroll';
    demoScrollBtn.className = 'btn btn-outline-primary btn-sm';

    // Search input focus effect
    const searchInputs = document.querySelectorAll('.search-demo');
    searchInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.style.transform = 'scale(1.02)';
        });

        input.addEventListener('blur', function() {
            this.style.transform = 'scale(1)';
        });
    });

    // Dropdown hover effects
    const dropdownItems = document.querySelectorAll('.dropdown-item');
    dropdownItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(4px)';
        });

        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
        });
    });

    // Navbar brand hover effect
    const brands = document.querySelectorAll('.navbar-brand');
    brands.forEach(brand => {
        brand.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
        });

        brand.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });

    // Simular notificaciones
    setTimeout(() => {
        const badges = document.querySelectorAll('.badge');
        badges.forEach(badge => {
            if (badge.textContent === '3') {
                badge.style.animation = 'pulse 1s infinite';
            }
        });
    }, 2000);

    console.log('🚀 Navbar demos initialized');
});

// Keyframes para animaciones
const style = document.createElement('style');
style.textContent = `
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }
`;
document.head.appendChild(style);
</script>
</x-slot:footerScripts>

</x-layouts.docs>
