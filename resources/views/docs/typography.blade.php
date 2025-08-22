<x-layouts.docs>

<x-slot:title>Tipografía - Modern Bootstrap Extension</x-slot:title>

<x-slot:styles>
<style>
/* Estilos específicos solo para la documentación */
</style>
<x-slot:styles>

<!-- Header de la página -->
<div class="docs-header">
    <h1 class="display-5">Typography</h1>
    <p class="lead text-muted">Sistema tipográfico moderno con dos modos: profesional y casual para adaptarse a diferentes tipos de proyectos.</p>
</div>

<!-- Navigation Tabs -->
<ul class="nav nav-pills mb-4" id="typography-tabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="overview-tab" data-bs-toggle="pill" data-bs-target="#overview" type="button" role="tab">Overview</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="font-styles-tab" data-bs-toggle="pill" data-bs-target="#font-styles" type="button" role="tab">Estilos de Fuente</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="headings-tab" data-bs-toggle="pill" data-bs-target="#headings" type="button" role="tab">Títulos</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="utilities-tab" data-bs-toggle="pill" data-bs-target="#utilities" type="button" role="tab">Utilities</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="variables-tab" data-bs-toggle="pill" data-bs-target="#variables" type="button" role="tab">Variables SCSS</button>
    </li>
</ul>

<div class="tab-content" id="typography-content">

    <!-- Overview Tab -->
    <div class="tab-pane fade show active" id="overview" role="tabpanel">
        <h2>Modos Tipográficos</h2>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="heading-professional">Modo Profesional</h3>
                        <p class="font-professional">Utiliza la fuente <strong>Inter</strong>, diseñada específicamente para interfaces digitales. Perfecta para:</p>
                        <ul class="font-professional">
                            <li>Aplicaciones SaaS</li>
                            <li>Dashboards corporativos</li>
                            <li>Sitios web profesionales</li>
                            <li>Documentación técnica</li>
                        </ul>
                        <div class="badge bg-success">Ejemplo: calcunom.es</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="heading-casual">Modo Casual</h3>
                        <p class="font-casual">Utiliza la fuente <strong>Nunito</strong>, con una personalidad más amigable y moderna. Perfecta para:</p>
                        <ul class="font-casual">
                            <li>Sitios deportivos</li>
                            <li>Blogs personales</li>
                            <li>Webs creativas</li>
                            <li>Portales comunitarios</li>
                        </ul>
                        <div class="badge bg-info">Ejemplo: losdelaroja.es</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Font Styles Tab -->
    <div class="tab-pane fade" id="font-styles" role="tabpanel">
        <h2>Comparación de Estilos</h2>

        <div class="demo-box">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="heading-professional text-primary">Profesional (Inter)</h4>
                    <p class="font-professional">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-md-6">
                    <h4 class="heading-casual text-info">Casual (Nunito)</h4>
                    <p class="font-casual">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>

        <h3>Clases Disponibles</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Clase</th>
                        <th>Descripción</th>
                        <th>Ejemplo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>.font-professional</code></td>
                        <td>Aplica fuente Inter al elemento</td>
                        <td><span class="font-professional">Texto profesional</span></td>
                    </tr>
                    <tr>
                        <td><code>.font-casual</code></td>
                        <td>Aplica fuente Nunito al elemento</td>
                        <td><span class="font-casual">Texto casual</span></td>
                    </tr>
                    <tr>
                        <td><code>.heading-professional</code></td>
                        <td>Título con estilo profesional (Inter, 600)</td>
                        <td><span class="heading-professional h5">Título profesional</span></td>
                    </tr>
                    <tr>
                        <td><code>.heading-casual</code></td>
                        <td>Título con estilo casual (Nunito, 700)</td>
                        <td><span class="heading-casual h5">Título casual</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="code-example">
            <h4>Código de ejemplo:</h4>
<pre><code class="language-html">&lt;h2 class="heading-professional"&gt;Título Profesional&lt;/h2&gt;
&lt;p class="font-professional"&gt;Párrafo con estilo profesional.&lt;/p&gt;

&lt;h2 class="heading-casual"&gt;Título Casual&lt;/h2&gt;
&lt;p class="font-casual"&gt;Párrafo con estilo casual.&lt;/p&gt;</code></pre>
        </div>
    </div>

    <!-- Headings Tab -->
    <div class="tab-pane fade" id="headings" role="tabpanel">
        <h2>Jerarquía de Títulos</h2>

        <div class="demo-box">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-primary mb-3">Estilo por Defecto (Profesional)</h4>
                    <h1>Heading 1</h1>
                    <h2>Heading 2</h2>
                    <h3>Heading 3</h3>
                    <h4>Heading 4</h4>
                    <h5>Heading 5</h5>
                    <h6>Heading 6</h6>
                </div>
                <div class="col-md-6">
                    <h4 class="text-info mb-3">Con Clase Casual</h4>
                    <h1 class="heading-casual">Heading 1</h1>
                    <h2 class="heading-casual">Heading 2</h2>
                    <h3 class="heading-casual">Heading 3</h3>
                    <h4 class="heading-casual">Heading 4</h4>
                    <h5 class="heading-casual">Heading 5</h5>
                    <h6 class="heading-casual">Heading 6</h6>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-lg-6">
                <h3>Características Profesional</h3>
                <ul>
                    <li><strong>Fuente:</strong> Inter</li>
                    <li><strong>Peso:</strong> 600 (semibold)</li>
                    <li><strong>Line-height:</strong> 1.2</li>
                    <li><strong>Letter-spacing:</strong> Optimizado para legibilidad</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <h3>Características Casual</h3>
                <ul>
                    <li><strong>Fuente:</strong> Nunito</li>
                    <li><strong>Peso:</strong> 700 (bold)</li>
                    <li><strong>Line-height:</strong> 1.3</li>
                    <li><strong>Letter-spacing:</strong> Natural</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Utilities Tab -->
    <div class="tab-pane fade" id="utilities" role="tabpanel">
        <h2>Clases Utility Adicionales</h2>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Pesos de Fuente</h3>
                        <div class="demo-box">
                            <p class="fw-light">Light weight (.fw-light)</p>
                            <p class="fw-normal">Normal weight (.fw-normal)</p>
                            <p class="fw-medium">Medium weight (.fw-medium)</p>
                            <p class="fw-semibold">Semibold weight (.fw-semibold)</p>
                            <p class="fw-bold">Bold weight (.fw-bold)</p>
                            <p class="fw-bolder">Bolder weight (.fw-bolder)</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Tamaños de Fuente</h3>
                        <div class="demo-box">
                            <p class="fs-1">Very large text (.fs-1)</p>
                            <p class="fs-2">Large text (.fs-2)</p>
                            <p class="fs-3">Medium large text (.fs-3)</p>
                            <p class="fs-4">Medium text (.fs-4)</p>
                            <p class="fs-5">Small text (.fs-5)</p>
                            <p class="fs-6">Very small text (.fs-6)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h3>Estilos de Texto</h3>
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-primary">Primary text (.text-primary)</p>
                        <p class="text-secondary">Secondary text (.text-secondary)</p>
                        <p class="text-success">Success text (.text-success)</p>
                        <p class="text-danger">Danger text (.text-danger)</p>
                    </div>
                    <div class="col-md-4">
                        <p class="text-start">Left aligned (.text-start)</p>
                        <p class="text-center">Center aligned (.text-center)</p>
                        <p class="text-end">Right aligned (.text-end)</p>
                    </div>
                    <div class="col-md-4">
                        <p class="fst-italic">Italic text (.fst-italic)</p>
                        <p class="text-decoration-underline">Underlined text</p>
                        <p class="text-muted">Muted text (.text-muted)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Variables Tab -->
    <div class="tab-pane fade" id="variables" role="tabpanel">
        <h2>Variables SCSS</h2>

        <div class="variable-list">
            <h3>Variables de Configuración</h3>
<pre><code class="language-scss">// Configuración de modo
$typography-mode: 'professional' !default; // o 'casual'

// Fuentes profesionales
$font-professional-heading: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;
$font-professional-body: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;

// Fuentes casuales
$font-casual-heading: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;
$font-casual-body: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;</code></pre>
        </div>

        <div class="alert alert-info mt-4">
            <h4>💡 Cómo cambiar el modo</h4>
            <p>Para cambiar entre modo profesional y casual, simplemente modifica la variable <code>$typography-mode</code> en tu archivo SCSS:</p>
            <ul>
                <li><code>$typography-mode: 'professional';</code> - Para sitios como calcunom.es</li>
                <li><code>$typography-mode: 'casual';</code> - Para sitios como losdelaroja.es</li>
            </ul>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h3>Importación de Fuentes</h3>
                <p>Asegúrate de incluir las fuentes de Google Fonts en tu HTML:</p>
<pre><code class="language-html">&lt;link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Nunito:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"&gt;</code></pre>
            </div>
        </div>
    </div>
</div>


</x-layouts.docs>
