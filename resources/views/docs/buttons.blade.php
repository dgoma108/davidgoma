<x-layouts.docs>

<x-slot:title>Botones - Modern Bootstrap Extension</x-slot:title>


<x-slot:styles>
<!-- Prism.js para syntax highlighting -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet">
<style>
/* Estilos específicos solo para la documentación */
.code-example {
    background: #f8f9fa;
    border-left: 4px solid #007bff;
    padding: 1rem;
    margin: 1rem 0;
}

.variable-list {
    background: #e9ecef;
    border-radius: 0.375rem;
    padding: 1.5rem;
}

.demo-box {
    border: 2px dashed #dee2e6;
    background: #f8f9fa;
    padding: 2rem;
    border-radius: 0.5rem;
    margin: 1rem 0;
    text-align: center;
}

.button-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    margin: 1rem 0;
}

.dark-demo {
    background: #212529;
    color: white;
    padding: 2rem;
    border-radius: 0.5rem;
}
</style>
</x-slot:styles>

<!-- Header de la página -->
<div class="docs-header">
    <h1 class="display-5">Buttons</h1>
    <p class="lead text-muted">Sistema completo de botones modernos con efectos avanzados, múltiples variantes y estados optimizados para diferentes casos de uso.</p>
</div>

<!-- Navigation Tabs -->
<ul class="nav nav-pills mb-4" id="buttons-tabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="basic-tab" data-bs-toggle="pill" data-bs-target="#basic" type="button" role="tab">Básicos</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="modern-tab" data-bs-toggle="pill" data-bs-target="#modern" type="button" role="tab">Estilos Modernos</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="sizes-tab" data-bs-toggle="pill" data-bs-target="#sizes" type="button" role="tab">Tamaños</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="special-tab" data-bs-toggle="pill" data-bs-target="#special" type="button" role="tab">Especiales</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="states-tab" data-bs-toggle="pill" data-bs-target="#states" type="button" role="tab">Estados</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="examples-tab" data-bs-toggle="pill" data-bs-target="#examples" type="button" role="tab">Ejemplos</button>
    </li>
</ul>

<div class="tab-content" id="buttons-content">

    <!-- Basic Buttons Tab -->
    <div class="tab-pane fade show active" id="basic" role="tabpanel">
        <h2>Botones Básicos Mejorados</h2>
        <p>Todos los botones incluyen mejoras base como transiciones suaves, efectos hover mejorados y mejor accesibilidad.</p>

        <div class="demo-box">
            <div class="button-grid">
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-secondary">Secondary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-light">Light</button>
                <button type="button" class="btn btn-dark">Dark</button>
            </div>
        </div>

        <div class="code-example">
            <h4>Código de ejemplo:</h4>

            <pre><code class="language-html">&lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
            &lt;button type="button" class="btn btn-secondary"&gt;Secondary&lt;/button&gt;
            &lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;</code></pre>
        </div>

        <h3>Características Base</h3>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Mejoras Visuales</h4>
                        <ul>
                            <li>Border-radius más redondeado (lg)</li>
                            <li>Padding optimizado para mejor proporción</li>
                            <li>Transiciones suaves en todos los estados</li>
                            <li>Efecto hover con elevación (translateY)</li>
                            <li>Box-shadow mejorado</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Accesibilidad</h4>
                        <ul>
                            <li>Focus ring mejorado con outline visible</li>
                            <li>Estados disabled optimizados</li>
                            <li>Contraste de colores mejorado</li>
                            <li>Soporte completo para navegación por teclado</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modern Styles Tab -->
    <div class="tab-pane fade" id="modern" role="tabpanel">
        <h2>Estilos Modernos</h2>

        <div class="row g-4">
            <div class="col-md-6">
                <h3>Botones Ghost</h3>
                <div class="demo-box">
                    <button type="button" class="btn btn-ghost me-2">Ghost Primary</button>
                    <div class="dark-demo mt-3">
                        <button type="button" class="btn btn-ghost-white">Ghost White</button>
                    </div>
                </div>
                <div class="code-example">
<pre><code class="language-html">&lt;button class="btn btn-ghost"&gt;Ghost Primary&lt;/button&gt;
&lt;button class="btn btn-ghost-white"&gt;Ghost White&lt;/button&gt;</code></pre>
                </div>
            </div>

            <div class="col-md-6">
                <h3>Botones Glass (Glassmorphism)</h3>
                <div class="demo-box">
                    <button type="button" class="btn btn-glass me-2">Glass Light</button>
                    <div class="dark-demo mt-3">
                        <button type="button" class="btn btn-glass-dark">Glass Dark</button>
                    </div>
                </div>
                <div class="code-example">
<pre><code class="language-html">&lt;button class="btn btn-glass"&gt;Glass Light&lt;/button&gt;
&lt;button class="btn btn-glass-dark"&gt;Glass Dark&lt;/button&gt;</code></pre>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-md-6">
                <h3>Botones Glow (Neón)</h3>
                <div class="demo-box">
                    <button type="button" class="btn btn-glow me-2">Glow Primary</button>
                    <button type="button" class="btn btn-glow-success">Glow Success</button>
                </div>
                <div class="code-example">
<pre><code class="language-html">&lt;button class="btn btn-glow"&gt;Glow Primary&lt;/button&gt;
&lt;button class="btn btn-glow-success"&gt;Glow Success&lt;/button&gt;</code></pre>
                </div>
            </div>

            <div class="col-md-6">
                <h3>Botón Animado</h3>
                <div class="demo-box">
                    <button type="button" class="btn btn-animated">Gradiente Animado</button>
                </div>
                <div class="code-example">
<pre><code class="language-html">&lt;button class="btn btn-animated"&gt;Gradiente Animado&lt;/button&gt;</code></pre>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-md-6">
                <h3>Efecto Ripple</h3>
                <div class="demo-box">
                    <button type="button" class="btn btn-primary btn-ripple">Ripple Effect</button>
                    <small class="d-block mt-2 text-muted">Haz clic para ver el efecto</small>
                </div>
                <div class="code-example">
<pre><code class="language-html">&lt;button class="btn btn-primary btn-ripple"&gt;Ripple Effect&lt;/button&gt;</code></pre>
                </div>
            </div>

            <div class="col-md-6">
                <h3>Botones Sociales</h3>
                <div class="demo-box">
                    <button type="button" class="btn btn-social btn-google mb-2">🔍 Google</button><br>
                    <button type="button" class="btn btn-social btn-github mb-2">📁 GitHub</button><br>
                    <button type="button" class="btn btn-social btn-linkedin">💼 LinkedIn</button>
                </div>
                <div class="code-example">
<pre><code class="language-html">&lt;button class="btn btn-social btn-google"&gt;Google&lt;/button&gt;
&lt;button class="btn btn-social btn-github"&gt;GitHub&lt;/button&gt;
&lt;button class="btn btn-social btn-linkedin"&gt;LinkedIn&lt;/button&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>

    <!-- Sizes Tab -->
    <div class="tab-pane fade" id="sizes" role="tabpanel">
        <h2>Tamaños de Botones</h2>

        <div class="demo-box">
            <div class="d-flex flex-column align-items-center gap-3">
                <button type="button" class="btn btn-primary btn-xs">Extra Small (.btn-xs)</button>
                <button type="button" class="btn btn-primary btn-sm">Small (.btn-sm)</button>
                <button type="button" class="btn btn-primary">Default</button>
                <button type="button" class="btn btn-primary btn-lg">Large (.btn-lg)</button>
                <button type="button" class="btn btn-primary btn-xl">Extra Large (.btn-xl)</button>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;button class="btn btn-primary btn-xs"&gt;Extra Small&lt;/button&gt;
&lt;button class="btn btn-primary btn-sm"&gt;Small&lt;/button&gt;
&lt;button class="btn btn-primary"&gt;Default&lt;/button&gt;
&lt;button class="btn btn-primary btn-lg"&gt;Large&lt;/button&gt;
&lt;button class="btn btn-primary btn-xl"&gt;Extra Large&lt;/button&gt;</code></pre>
        </div>

        <h3>Formas Especiales</h3>
        <div class="row g-4">
            <div class="col-md-6">
                <h4>Botones Circulares</h4>
                <div class="demo-box">
                    <button type="button" class="btn btn-primary btn-circle btn-circle-sm me-2">S</button>
                    <button type="button" class="btn btn-primary btn-circle me-2">M</button>
                    <button type="button" class="btn btn-primary btn-circle btn-circle-lg">L</button>
                </div>
                <div class="code-example">
<pre><code class="language-html">&lt;button class="btn btn-primary btn-circle btn-circle-sm"&gt;S&lt;/button&gt;
&lt;button class="btn btn-primary btn-circle"&gt;M&lt;/button&gt;
&lt;button class="btn btn-primary btn-circle btn-circle-lg"&gt;L&lt;/button&gt;</code></pre>
                </div>
            </div>

            <div class="col-md-6">
                <h4>Botones Cuadrados</h4>
                <div class="demo-box">
                    <button type="button" class="btn btn-primary btn-square">⚙️</button>
                </div>
                <div class="code-example">
<pre><code class="language-html">&lt;button class="btn btn-primary btn-square"&gt;⚙️&lt;/button&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>

    <!-- Special Buttons Tab -->
    <div class="tab-pane fade" id="special" role="tabpanel">
        <h2>Botones Especiales</h2>

        <div class="row g-4">
            <div class="col-md-6">
                <h3>Floating Action Button (FAB)</h3>
                <div class="demo-box position-relative" style="height: 200px;">
                    <button type="button" class="btn btn-primary btn-fab" style="position: absolute;">+</button>
                    <button type="button" class="btn btn-success btn-fab btn-fab-extended" style="position: absolute; right: 1rem; bottom: 4rem;">
                        📝 Nuevo
                    </button>
                </div>
                <div class="code-example">
<pre><code class="language-html">&lt;button class="btn btn-primary btn-fab"&gt;+&lt;/button&gt;
&lt;button class="btn btn-success btn-fab btn-fab-extended"&gt;
  📝 Nuevo
&lt;/button&gt;</code></pre>
                </div>
            </div>

            <div class="col-md-6">
                <h3>Botones con Iconos</h3>
                <div class="demo-box">
                    <button type="button" class="btn btn-primary btn-icon mb-2">
                        <i class="icon icon-left">📧</i>
                        Enviar Email
                    </button><br>
                    <button type="button" class="btn btn-success btn-icon mb-2">
                        Descargar
                        <i class="icon icon-right">⬇️</i>
                    </button><br>
                    <button type="button" class="btn btn-info btn-icon btn-icon-only">
                        <i class="icon">⚙️</i>
                    </button>
                </div>
                <div class="code-example">
<pre><code class="language-html">&lt;button class="btn btn-primary btn-icon"&gt;
  &lt;i class="icon icon-left"&gt;📧&lt;/i&gt;
  Enviar Email
&lt;/button&gt;

&lt;button class="btn btn-success btn-icon"&gt;
  Descargar
  &lt;i class="icon icon-right"&gt;⬇️&lt;/i&gt;
&lt;/button&gt;

&lt;button class="btn btn-info btn-icon btn-icon-only"&gt;
  &lt;i class="icon"&gt;⚙️&lt;/i&gt;
&lt;/button&gt;</code></pre>
                </div>
            </div>
        </div>

        <h3>Grupos de Botones</h3>
        <div class="row g-4">
            <div class="col-md-6">
                <h4>Grupo Moderno (con espaciado)</h4>
                <div class="demo-box">
                    <div class="btn-group-modern">
                        <button type="button" class="btn btn-primary">Izquierda</button>
                        <button type="button" class="btn btn-primary">Centro</button>
                        <button type="button" class="btn btn-primary">Derecha</button>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h4>Grupo Conectado</h4>
                <div class="demo-box">
                    <div class="btn-group-modern btn-group-connected">
                        <button type="button" class="btn btn-outline-primary">Izquierda</button>
                        <button type="button" class="btn btn-outline-primary">Centro</button>
                        <button type="button" class="btn btn-outline-primary">Derecha</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;!-- Grupo con espaciado --&gt;
&lt;div class="btn-group-modern"&gt;
  &lt;button class="btn btn-primary"&gt;Izquierda&lt;/button&gt;
  &lt;button class="btn btn-primary"&gt;Centro&lt;/button&gt;
  &lt;button class="btn btn-primary"&gt;Derecha&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Grupo conectado --&gt;
&lt;div class="btn-group-modern btn-group-connected"&gt;
  &lt;button class="btn btn-outline-primary"&gt;Izquierda&lt;/button&gt;
  &lt;button class="btn btn-outline-primary"&gt;Centro&lt;/button&gt;
  &lt;button class="btn btn-outline-primary"&gt;Derecha&lt;/button&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    <!-- States Tab -->
    <div class="tab-pane fade" id="states" role="tabpanel">
        <h2>Estados de Botones</h2>

        <div class="row g-4">
            <div class="col-md-6">
                <h3>Estados Básicos</h3>
                <div class="demo-box">
                    <button type="button" class="btn btn-primary mb-2">Normal</button><br>
                    <button type="button" class="btn btn-primary mb-2" disabled>Disabled</button><br>
                    <button type="button" class="btn btn-primary active mb-2">Active</button><br>
                </div>
            </div>

            <div class="col-md-6">
                <h3>Estado de Carga</h3>
                <div class="demo-box">
                    <button type="button" class="btn btn-primary btn-loading mb-2">Cargando...</button><br>
                    <button type="button" class="btn btn-success btn-loading">Procesando</button>
                </div>
                <div class="code-example">
<pre><code class="language-html">&lt;button class="btn btn-primary btn-loading"&gt;Cargando...&lt;/button&gt;</code></pre>
                </div>
            </div>
        </div>

        <h3>Interacciones</h3>
        <div class="alert alert-info">
            <h4>🎯 Efectos Interactivos</h4>
            <ul class="mb-0">
                <li><strong>Hover:</strong> Elevación con translateY(-1px) y box-shadow mejorado</li>
                <li><strong>Active:</strong> Vuelta a la posición original translateY(0)</li>
                <li><strong>Focus:</strong> Focus ring visible para accesibilidad</li>
                <li><strong>Disabled:</strong> Opacidad reducida, sin efectos de hover/active</li>
            </ul>
        </div>
    </div>

    <!-- Examples Tab -->
    <div class="tab-pane fade" id="examples" role="tabpanel">
        <h2>Ejemplos de Uso</h2>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Formulario de Contacto</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Tu email">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="3" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary btn-icon">
                                    <i class="icon icon-left">📧</i>
                                    Enviar
                                </button>
                                <button type="reset" class="btn btn-ghost">Limpiar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Panel de Acciones</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-column gap-3">
                            <div class="btn-group-modern">
                                <button class="btn btn-success btn-sm">✅ Aprobar</button>
                                <button class="btn btn-warning btn-sm">⏸️ Pausar</button>
                                <button class="btn btn-danger btn-sm">❌ Rechazar</button>
                            </div>

                            <div class="d-flex gap-2">
                                <button class="btn btn-glass btn-sm">🔍 Ver detalles</button>
                                <button class="btn btn-glow btn-sm">✨ Destacar</button>
                            </div>

                            <button class="btn btn-animated">🚀 Publicar ahora</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Toolbar Completo</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center gap-2">
                            <button class="btn btn-primary btn-sm btn-icon">
                                <i class="icon">💾</i>
                                Guardar
                            </button>
                            <button class="btn btn-secondary btn-sm btn-icon-only">
                                <i class="icon">📋</i>
                            </button>
                            <button class="btn btn-secondary btn-sm btn-icon-only">
                                <i class="icon">✂️</i>
                            </button>
                            <div class="btn-group-modern btn-group-connected">
                                <button class="btn btn-outline-secondary btn-sm">⬅️</button>
                                <button class="btn btn-outline-secondary btn-sm">➡️</button>
                            </div>
                            <button class="btn btn-ghost btn-sm">🔄 Actualizar</button>
                            <button class="btn btn-glow btn-sm">⭐ Premium</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-success mt-4">
            <h4>💡 Consejos de Uso</h4>
            <ul class="mb-0">
                <li><strong>Botones primarios:</strong> Usa <code>.btn-primary</code> o <code>.btn-glow</code> para acciones principales</li>
                <li><strong>Botones secundarios:</strong> <code>.btn-ghost</code> o <code>.btn-glass</code> para acciones secundarias</li>
                <li><strong>Acciones destructivas:</strong> <code>.btn-danger</code> para eliminar o deshacer</li>
                <li><strong>Estados especiales:</strong> <code>.btn-loading</code> durante procesamiento</li>
                <li><strong>FAB:</strong> Para acciones rápidas flotantes en mobile</li>
                <li><strong>Grupos:</strong> Para acciones relacionadas</li>
            </ul>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-scss.min.js"></script>
@endpush

</x-layouts.docs>
