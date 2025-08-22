<x-layouts.docs>

<x-slot:title>Cards - Modern Bootstrap Extension</x-slot:title>

<x-slot:styles>
<style>
/* Estilos específicos para la documentación de cards */
.cards-demo {
    background: #f8fafc;
    border: 1px solid #e5e7eb;
    border-radius: 0.5rem;
    padding: 1.5rem;
    margin: 1rem 0;
    overflow: visible;
}

.demo-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 1.5rem;
    margin: 1rem 0;
}

.demo-grid-wide {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin: 1rem 0;
}

.demo-container-dark {
    background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
    border-radius: 0.5rem;
    padding: 2rem;
    color: white;
}

.glass-demo-bg {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 0.5rem;
    padding: 2rem;
    position: relative;
    overflow: hidden;
}

.glass-demo-bg::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1.5" fill="rgba(255,255,255,0.05)"/><circle cx="50" cy="10" r="0.8" fill="rgba(255,255,255,0.08)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    pointer-events: none;
}

/* Cards mejoradas para demos */
.demo-card {
    border: none;
    border-radius: 1rem;
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    overflow: hidden;
    background: white;
}

.demo-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

.demo-card-glass {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: white;
}

.demo-card-gradient {
    background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
    color: white;
}

.demo-card-glow {
    box-shadow: 0 0 20px rgba(99, 102, 241, 0.2);
}

.demo-card-glow:hover {
    box-shadow: 0 0 40px rgba(99, 102, 241, 0.4);
    transform: translateY(-8px);
}

/* Animaciones para demos */
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

@keyframes pulse-glow {
    0%, 100% { box-shadow: 0 0 20px rgba(99, 102, 241, 0.2); }
    50% { box-shadow: 0 0 40px rgba(99, 102, 241, 0.5); }
}

.card-animated {
    animation: float 3s ease-in-out infinite;
}

.card-pulse {
    animation: pulse-glow 2s ease-in-out infinite;
}

/* Estilos para productos demo */
.product-demo {
    position: relative;
    overflow: hidden;
}

.product-demo img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.product-demo:hover img {
    transform: scale(1.1);
}

.product-overlay-demo {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.product-demo:hover .product-overlay-demo {
    opacity: 1;
}

/* Masonry demo */
.masonry-demo {
    columns: 3;
    column-gap: 1.5rem;
}

.masonry-demo .demo-card {
    break-inside: avoid;
    margin-bottom: 1.5rem;
}

/* Stats demo */
.stats-icon-demo {
    width: 4rem;
    height: 4rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    font-size: 1.5rem;
    background: rgba(99, 102, 241, 0.1);
    color: #6366f1;
}

/* Blog demo */
.blog-meta-demo {
    display: flex;
    align-items: center;
    gap: 1rem;
    font-size: 0.75rem;
    color: #6b7280;
    margin-bottom: 1rem;
}

/* Profile demo */
.profile-avatar-demo {
    width: 5rem;
    height: 5rem;
    border-radius: 50%;
    margin: 0 auto 1rem;
    border: 3px solid #6366f1;
    background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
    transition: all 0.3s ease;
}

.profile-avatar-demo:hover {
    transform: scale(1.05);
    box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.2);
}

/* Testimonial demo */
.testimonial-quote-demo {
    font-size: 1.125rem;
    font-style: italic;
    color: #374151;
    margin-bottom: 1.5rem;
    position: relative;
    text-align: center;
}

.testimonial-quote-demo::before,
.testimonial-quote-demo::after {
    content: '"';
    font-size: 3rem;
    color: #6366f1;
    position: absolute;
    top: -1rem;
    font-family: 'Times New Roman', serif;
}

.testimonial-quote-demo::before {
    left: -1rem;
}

.testimonial-quote-demo::after {
    right: -1rem;
}

/* Dark mode demo */
@media (prefers-color-scheme: dark) {
    .demo-card {
        background: #1f2937;
        color: #f3f4f6;
    }
}

/* Loading demo */
.skeleton-demo {
    background: linear-gradient(90deg, #f3f4f6 25%, #e5e7eb 50%, #f3f4f6 75%);
    background-size: 200% 100%;
    animation: loading 1.5s infinite;
    border-radius: 0.375rem;
    height: 1rem;
    margin-bottom: 0.5rem;
}

.skeleton-demo.w-75 { width: 75%; }
.skeleton-demo.w-50 { width: 50%; }
.skeleton-demo.w-25 { width: 25%; }

@keyframes loading {
    0% { background-position: 200% 0; }
    100% { background-position: -200% 0; }
}
</style>
</x-slot:styles>

<!-- Header de la página -->
<div class="docs-header">
    <h1 class="display-5">Cards</h1>
    <p class="lead text-muted">Sistema completo de tarjetas modernas con efectos glass, gradientes, variantes especializadas y layouts avanzados para crear interfaces contemporáneas y atractivas.</p>
</div>

<!-- Navigation Tabs -->
<ul class="nav nav-pills mb-4" id="cards-tabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="basic-tab" data-bs-toggle="pill" data-bs-target="#basic" type="button" role="tab">Cards Básicas</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="variants-tab" data-bs-toggle="pill" data-bs-target="#variants" type="button" role="tab">Variantes Modernas</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="special-tab" data-bs-toggle="pill" data-bs-target="#special" type="button" role="tab">Cards Especiales</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="layouts-tab" data-bs-toggle="pill" data-bs-target="#layouts" type="button" role="tab">Layouts</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="advanced-tab" data-bs-toggle="pill" data-bs-target="#advanced" type="button" role="tab">Funcionalidades</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="examples-tab" data-bs-toggle="pill" data-bs-target="#examples" type="button" role="tab">Ejemplos</button>
    </li>
</ul>

<div class="tab-content" id="cards-content">

    <!-- Basic Cards Tab -->
    <div class="tab-pane fade show active" id="basic" role="tabpanel">
        <h2>Cards Básicas Mejoradas</h2>
        <p>Las cards básicas incluyen mejoras visuales significativas, efectos hover suaves, sombras modernas y mejor spacing.</p>

        <div class="demo-grid">
            <div class="demo-card">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Inter', sans-serif; font-weight: 700; color: #111827;">Card Básica</h5>
                    <p class="card-text" style="color: #6b7280; line-height: 1.6;">Mejorada con sombras suaves, transiciones fluidas y mejor tipografía. El hover effect eleva la card con una animación elegante.</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>

            <div class="demo-card">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'%3E%3Cdefs%3E%3ClinearGradient id='grad1' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' stop-color='%23667eea'/%3E%3Cstop offset='100%25' stop-color='%23764ba2'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='400' height='200' fill='url(%23grad1)'/%3E%3Ctext x='200' y='100' text-anchor='middle' dy='0.35em' fill='white' font-family='Arial, sans-serif' font-size='24' font-weight='bold'%3EImagen Demo%3C/text%3E%3C/svg%3E" class="card-img-top" alt="Demo image" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Inter', sans-serif; font-weight: 700; color: #111827;">Con Imagen</h5>
                    <p class="card-text" style="color: #6b7280; line-height: 1.6;">Card con imagen que incluye efecto de zoom suave en hover y bordes redondeados modernos.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Hace 3 mins</small>
                        <a href="#" class="btn btn-outline-primary btn-sm">Leer más</a>
                    </div>
                </div>
            </div>

            <div class="demo-card">
                <div class="card-header" style="background: transparent; border-bottom: 1px solid #e5e7eb; padding: 1.5rem; font-weight: 600; color: #111827;">
                    Header Mejorado
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Subtítulo elegante</h6>
                    <p class="card-text" style="color: #6b7280; line-height: 1.6;">Card con header y footer mejorados, utilizando colores sutiles y mejor spacing para una apariencia más profesional.</p>
                </div>
                <div class="card-footer" style="background: #f9fafb; border-top: 1px solid #e5e7eb; padding: 1rem 1.5rem;">
                    <small class="text-muted">Última actualización hace 3 mins</small>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;!-- Card básica mejorada --&gt;
&lt;div class="card"&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Título de la Card&lt;/h5&gt;
    &lt;p class="card-text"&gt;Contenido con mejoras automáticas de spacing y tipografía.&lt;/p&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Acción&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Card con imagen --&gt;
&lt;div class="card"&gt;
  &lt;img src="imagen.jpg" class="card-img-top" alt="Descripción"&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Título&lt;/h5&gt;
    &lt;p class="card-text"&gt;Contenido de la card&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Mejoras Automáticas</h3>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="demo-card">
                    <div class="card-body">
                        <h4>🎨 Visuales</h4>
                        <ul>
                            <li><strong>Sombras:</strong> Box-shadow más suave y moderna</li>
                            <li><strong>Bordes:</strong> Border-radius XL (1rem)</li>
                            <li><strong>Hover:</strong> Elevación de -4px con sombra intensa</li>
                            <li><strong>Transiciones:</strong> 0.3s ease en todas las propiedades</li>
                            <li><strong>Overflow:</strong> Hidden para contenido limpio</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="demo-card">
                    <div class="card-body">
                        <h4>📝 Tipografía</h4>
                        <ul>
                            <li><strong>Títulos:</strong> Font display con peso bold</li>
                            <li><strong>Texto:</strong> Color gris 600 con line-height 1.6</li>
                            <li><strong>Headers:</strong> Font weight semibold</li>
                            <li><strong>Spacing:</strong> Padding optimizado (1.5rem)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h3>Tamaños de Cards</h3>
        <div class="cards-demo">
            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="demo-card">
                        <div class="card-body" style="padding: 1rem;">
                            <h6 class="card-title">Card Small</h6>
                            <p class="card-text small">Padding reducido para espacios compactos.</p>
                            <small class="text-muted">Clase: <code>.card-sm</code></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="demo-card">
                        <div class="card-body">
                            <h5 class="card-title">Card Standard</h5>
                            <p class="card-text">Padding por defecto optimizado para la mayoría de casos de uso.</p>
                            <small class="text-muted">Padding: 1.5rem</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="demo-card">
                        <div class="card-body" style="padding: 2rem;">
                            <h5 class="card-title">Card Large</h5>
                            <p class="card-text">Padding amplio para contenido destacado y mayor importancia visual.</p>
                            <small class="text-muted">Clase: <code>.card-lg</code></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;!-- Tamaños disponibles --&gt;
&lt;div class="card card-sm"&gt;...&lt;/div&gt;  &lt;!-- Padding: 1rem --&gt;
&lt;div class="card"&gt;...&lt;/div&gt;         &lt;!-- Padding: 1.5rem (default) --&gt;
&lt;div class="card card-lg"&gt;...&lt;/div&gt; &lt;!-- Padding: 2rem --&gt;
&lt;div class="card card-xl"&gt;...&lt;/div&gt; &lt;!-- Padding: 2.5rem --&gt;</code></pre>
        </div>
    </div>

    <!-- Variants Tab -->
    <div class="tab-pane fade" id="variants" role="tabpanel">
        <h2>Variantes Modernas</h2>

        <h3>Cards Glass (Glassmorphism)</h3>
        <div class="glass-demo-bg">
            <div class="demo-grid">
                <div class="demo-card-glass">
                    <div class="card-body">
                        <h5 class="card-title">Glass Light</h5>
                        <p class="card-text" style="color: rgba(255, 255, 255, 0.9);">Efecto cristal con backdrop-filter blur para un look moderno y elegante sobre cualquier fondo.</p>
                        <a href="#" class="btn btn-outline-light btn-sm">Ver más</a>
                    </div>
                </div>

                <div style="background: rgba(0, 0, 0, 0.2); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(0, 0, 0, 0.3);" class="demo-card">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white;">Glass Dark</h5>
                        <p class="card-text" style="color: rgba(255, 255, 255, 0.8);">Variante oscura del efecto glass, perfecta para overlays sobre imágenes o fondos claros.</p>
                        <a href="#" class="btn btn-light btn-sm">Explorar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;!-- Glass effect --&gt;
&lt;div class="card card-glass"&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Glass Card&lt;/h5&gt;
    &lt;p class="card-text"&gt;Contenido con efecto cristal&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Glass dark variant --&gt;
&lt;div class="card card-glass card-glass-dark"&gt;
  &lt;!-- Automáticamente aplica colores para tema oscuro --&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Cards Gradient</h3>
        <div class="demo-grid">
            <div class="demo-card-gradient">
                <div class="card-body">
                    <h5 class="card-title">Primary Gradient</h5>
                    <p class="card-text" style="color: rgba(255, 255, 255, 0.9);">Gradiente principal con colores de la marca. Los textos se adaptan automáticamente a blanco.</p>
                    <a href="#" class="btn btn-light btn-sm">Acción</a>
                </div>
            </div>

            <div style="background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white;" class="demo-card">
                <div class="card-body">
                    <h5 class="card-title">Success Gradient</h5>
                    <p class="card-text" style="color: rgba(255, 255, 255, 0.9);">Variante de éxito, perfecta para confirmaciones y estados positivos.</p>
                    <a href="#" class="btn btn-outline-light btn-sm">Continuar</a>
                </div>
            </div>

            <div style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white;" class="demo-card">
                <div class="card-body">
                    <h5 class="card-title">Warning Gradient</h5>
                    <p class="card-text" style="color: rgba(255, 255, 255, 0.9);">Gradiente de advertencia para destacar información importante.</p>
                    <a href="#" class="btn btn-outline-light btn-sm">Atención</a>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;!-- Gradientes disponibles --&gt;
&lt;div class="card card-gradient"&gt;...&lt;/div&gt;           &lt;!-- Primary --&gt;
&lt;div class="card card-gradient-secondary"&gt;...&lt;/div&gt; &lt;!-- Secondary --&gt;
&lt;div class="card card-gradient-success"&gt;...&lt;/div&gt;   &lt;!-- Success --&gt;</code></pre>
        </div>

        <h3>Cards con Efecto Glow</h3>
        <div class="demo-container-dark">
            <div class="demo-grid">
                <div class="demo-card-glow demo-card" style="background: #1f2937; color: white; border: 1px solid #374151;">
                    <div class="card-body">
                        <h5 class="card-title">Glow Primary</h5>
                        <p class="card-text" style="color: #d1d5db;">Card con efecto de brillo que se intensifica en hover. Perfecta para destacar elementos importantes.</p>
                        <div class="d-flex align-items-center gap-2">
                            <div style="width: 8px; height: 8px; border-radius: 50%; background: #6366f1; box-shadow: 0 0 6px #6366f1;"></div>
                            <small>Estado activo</small>
                        </div>
                    </div>
                </div>

                <div style="box-shadow: 0 0 20px rgba(16, 185, 129, 0.3); background: #1f2937; color: white; border: 1px solid #374151;" class="demo-card">
                    <div class="card-body">
                        <h5 class="card-title">Glow Success</h5>
                        <p class="card-text" style="color: #d1d5db;">Variante con brillo verde, ideal para estados de éxito y confirmaciones.</p>
                        <div class="d-flex align-items-center gap-2">
                            <div style="width: 8px; height: 8px; border-radius: 50%; background: #10b981; box-shadow: 0 0 6px #10b981;"></div>
                            <small>Completado</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;!-- Efecto glow --&gt;
&lt;div class="card card-glow"&gt;
  &lt;!-- Brillo en color primary --&gt;
&lt;/div&gt;

&lt;div class="card card-glow card-glow-success"&gt;
  &lt;!-- Brillo en color success --&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Cards con Bordes Coloreados</h3>
        <div class="demo-grid">
            <div class="demo-card" style="border: 2px solid #6366f1;">
                <div class="card-body">
                    <h5 class="card-title">Border Primary</h5>
                    <p class="card-text">Card con borde coloreado para destacar categorías o estados específicos.</p>
                    <span class="badge" style="background: #6366f1;">Importante</span>
                </div>
            </div>

            <div class="demo-card" style="border: 2px solid #10b981;">
                <div class="card-body">
                    <h5 class="card-title">Border Success</h5>
                    <p class="card-text">Perfecta para mostrar estados positivos o información de éxito.</p>
                    <span class="badge" style="background: #10b981;">Completado</span>
                </div>
            </div>

            <div class="demo-card" style="border: 2px solid #f59e0b;">
                <div class="card-body">
                    <h5 class="card-title">Border Warning</h5>
                    <p class="card-text">Ideal para advertencias o información que requiere atención.</p>
                    <span class="badge" style="background: #f59e0b;">Pendiente</span>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="card card-bordered"&gt;...&lt;/div&gt;         &lt;!-- Primary border --&gt;
&lt;div class="card card-bordered-success"&gt;...&lt;/div&gt;  &lt;!-- Success border --&gt;
&lt;div class="card card-bordered-warning"&gt;...&lt;/div&gt;  &lt;!-- Warning border --&gt;
&lt;div class="card card-bordered-danger"&gt;...&lt;/div&gt;   &lt;!-- Danger border --&gt;</code></pre>
        </div>

        <h3>Card Flat (Sin Hover)</h3>
        <div class="cards-demo">
            <div class="demo-card card-flat">
                <div class="card-body">
                    <h5 class="card-title">Card Flat</h5>
                    <p class="card-text">Card sin efecto hover para elementos estáticos o cuando no se requiere interactividad visual.</p>
                    <div class="alert alert-info alert-sm mb-0">
                        <small>💡 Útil para cards informativas o de solo lectura</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="card card-flat"&gt;
  &lt;!-- Sin efecto hover, mantiene sombra estática --&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    <!-- Special Cards Tab -->
    <div class="tab-pane fade" id="special" role="tabpanel">
        <h2>Cards Especiales</h2>

        <h3>Card Testimonial</h3>
        <div class="demo-grid-wide">
            <div class="demo-card text-center" style="padding: 2rem;">
                <div class="testimonial-quote-demo">
                    Este sistema de cards es increíblemente versátil y fácil de usar. Ha transformado completamente la apariencia de nuestra aplicación.
                </div>
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <div class="profile-avatar-demo" style="width: 3rem; height: 3rem; font-size: 1rem;">
                        MG
                    </div>
                    <div class="text-start">
                        <div style="font-weight: 700; color: #111827; margin-bottom: 0.25rem;">María García</div>
                        <div style="font-size: 0.875rem; color: #6b7280;">UI/UX Designer</div>
                    </div>
                </div>
            </div>

            <div class="demo-card text-center" style="padding: 2rem;">
                <div class="testimonial-quote-demo">
                    La documentación es excelente y los componentes funcionan perfectamente out-of-the-box. Altamente recomendado.
                </div>
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <div class="profile-avatar-demo" style="width: 3rem; height: 3rem; font-size: 1rem; background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                        JL
                    </div>
                    <div class="text-start">
                        <div style="font-weight: 700; color: #111827; margin-bottom: 0.25rem;">Juan López</div>
                        <div style="font-size: 0.875rem; color: #6b7280;">Frontend Developer</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="card card-testimonial"&gt;
  &lt;div class="testimonial-quote"&gt;
    El texto del testimonio aparece aquí con comillas decorativas automáticas.
  &lt;/div&gt;
  &lt;div class="testimonial-author"&gt;
    &lt;img src="avatar.jpg" alt="Avatar" class="author-avatar"&gt;
    &lt;div class="author-info"&gt;
      &lt;div class="author-name"&gt;Nombre del Cliente&lt;/div&gt;
      &lt;div class="author-role"&gt;Cargo / Empresa&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Card de Producto</h3>
        <div class="demo-grid">
            <div class="demo-card product-demo">
                <div class="position-relative overflow-hidden">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='prod1' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' stop-color='%23667eea'/%3E%3Cstop offset='100%25' stop-color='%238b5cf6'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='400' height='300' fill='url(%23prod1)'/%3E%3Ctext x='200' y='150' text-anchor='middle' dy='0.35em' fill='white' font-family='Arial, sans-serif' font-size='20'%3EProducto Demo%3C/text%3E%3C/svg%3E" alt="Producto">
                    <div class="position-absolute top-0 start-0 m-3">
                        <span class="badge bg-danger rounded-pill">-25%</span>
                    </div>
                    <div class="product-overlay-demo">
                        <button class="btn btn-light btn-sm">👁️ Vista rápida</button>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Auriculares Premium</h5>
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span style="font-size: 1.25rem; font-weight: 700; color: #6366f1;">$79.99</span>
                        <span style="font-size: 0.875rem; color: #6b7280; text-decoration: line-through;">$99.99</span>
                    </div>
                    <p class="card-text" style="font-size: 0.875rem;">Calidad de sonido excepcional con cancelación de ruido activa.</p>
                    <button class="btn btn-primary w-100">🛒 Agregar al carrito</button>
                </div>
            </div>

            <div class="demo-card product-demo">
                <div class="position-relative overflow-hidden">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='prod2' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' stop-color='%2310b981'/%3E%3Cstop offset='100%25' stop-color='%23059669'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='400' height='300' fill='url(%23prod2)'/%3E%3Ctext x='200' y='150' text-anchor='middle' dy='0.35em' fill='white' font-family='Arial, sans-serif' font-size='20'%3EProducto Demo%3C/text%3E%3C/svg%3E" alt="Producto">
                    <div class="position-absolute top-0 start-0 m-3">
                        <span class="badge bg-success rounded-pill">Nuevo</span>
                    </div>
                    <div class="product-overlay-demo">
                        <div class="d-flex gap-2">
                            <button class="btn btn-light btn-sm">❤️</button>
                            <button class="btn btn-light btn-sm">👁️ Ver</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Smart Watch</h5>
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span style="font-size: 1.25rem; font-weight: 700; color: #6366f1;">$299.99</span>
                    </div>
                    <p class="card-text" style="font-size: 0.875rem;">Tecnología avanzada para monitoreo de salud y fitness.</p>
                    <button class="btn btn-primary w-100">🛒 Agregar al carrito</button>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="card card-product"&gt;
  &lt;div class="product-image"&gt;
    &lt;img src="producto.jpg" alt="Producto"&gt;
    &lt;span class="product-badge badge-sale"&gt;-25%&lt;/span&gt;
    &lt;div class="product-overlay"&gt;
      &lt;button class="btn btn-light"&gt;Ver detalles&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="product-info"&gt;
    &lt;h5 class="product-title"&gt;Nombre del Producto&lt;/h5&gt;
    &lt;div class="product-price"&gt;
      &lt;span class="current-price"&gt;$99.99&lt;/span&gt;
      &lt;span class="old-price"&gt;$129.99&lt;/span&gt;
    &lt;/div&gt;
    &lt;button class="btn btn-primary"&gt;Comprar&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Card de Estadísticas</h3>
        <div class="demo-grid">
            <div class="demo-card text-center" style="padding: 2rem;">
                <div class="stats-icon-demo">
                    📊
                </div>
                <div style="font-size: 2.5rem; font-weight: 800; color: #111827; margin-bottom: 0.5rem; font-family: 'Inter', sans-serif;">2,847</div>
                <div style="font-size: 0.875rem; color: #6b7280; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem;">Usuarios Activos</div>
                <div style="font-size: 0.75rem; font-weight: 600; color: #10b981;">
                    ↗ +12% este mes
                </div>
            </div>

            <div class="demo-card text-center" style="padding: 2rem;">
                <div class="stats-icon-demo" style="background: rgba(16, 185, 129, 0.1); color: #10b981;">
                    💰
                </div>
                <div style="font-size: 2.5rem; font-weight: 800; color: #111827; margin-bottom: 0.5rem; font-family: 'Inter', sans-serif;">$45.2K</div>
                <div style="font-size: 0.875rem; color: #6b7280; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem;">Ingresos</div>
                <div style="font-size: 0.75rem; font-weight: 600; color: #10b981;">
                    ↗ +8.2% este mes
                </div>
            </div>

            <div class="demo-card text-center" style="padding: 2rem;">
                <div class="stats-icon-demo" style="background: rgba(245, 158, 11, 0.1); color: #f59e0b;">
                    ⚡
                </div>
                <div style="font-size: 2.5rem; font-weight: 800; color: #111827; margin-bottom: 0.5rem; font-family: 'Inter', sans-serif;">98.5%</div>
                <div style="font-size: 0.875rem; color: #6b7280; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.5rem;">Uptime</div>
                <div style="font-size: 0.75rem; font-weight: 600; color: #ef4444;">
                    ↘ -0.1% este mes
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="card card-stats"&gt;
  &lt;div class="stats-icon stats-icon-primary"&gt;
    &lt;i class="icon-chart"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="stats-number"&gt;2,847&lt;/div&gt;
  &lt;div class="stats-label"&gt;Usuarios Activos&lt;/div&gt;
  &lt;div class="stats-change positive"&gt;+12%&lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Card de Perfil</h3>
        <div class="demo-grid">
            <div class="demo-card text-center" style="padding: 2rem;">
                <div class="profile-avatar-demo">
                    AS
                </div>
                <h5 style="font-size: 1.25rem; font-weight: 700; color: #111827; margin-bottom: 0.25rem;">Ana Silva</h5>
                <div style="color: #6366f1; font-weight: 600; margin-bottom: 1rem; font-size: 0.875rem;">Product Designer</div>
                <p style="color: #6b7280; font-size: 0.875rem; margin-bottom: 1.5rem; line-height: 1.5;">
                    Especialista en diseño de experiencia de usuario con más de 5 años de experiencia en productos digitales.
                </p>
                <div class="d-flex justify-content-center gap-2">
                    <button class="btn btn-sm" style="width: 2.5rem; height: 2.5rem; border-radius: 50%; background: #f3f4f6; color: #6b7280; border: none; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">🐦</button>
                    <button class="btn btn-sm" style="width: 2.5rem; height: 2.5rem; border-radius: 50%; background: #f3f4f6; color: #6b7280; border: none; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">💼</button>
                    <button class="btn btn-sm" style="width: 2.5rem; height: 2.5rem; border-radius: 50%; background: #f3f4f6; color: #6b7280; border: none; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">🌐</button>
                </div>
            </div>

            <div class="demo-card text-center" style="padding: 2rem;">
                <div class="profile-avatar-demo" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);">
                    MC
                </div>
                <h5 style="font-size: 1.25rem; font-weight: 700; color: #111827; margin-bottom: 0.25rem;">Miguel Chen</h5>
                <div style="color: #6366f1; font-weight: 600; margin-bottom: 1rem; font-size: 0.875rem;">Full Stack Developer</div>
                <p style="color: #6b7280; font-size: 0.875rem; margin-bottom: 1.5rem; line-height: 1.5;">
                    Desarrollador apasionado por crear aplicaciones web escalables y experiencias de usuario excepcionales.
                </p>
                <div class="d-flex justify-content-center gap-2">
                    <button class="btn btn-sm" style="width: 2.5rem; height: 2.5rem; border-radius: 50%; background: #f3f4f6; color: #6b7280; border: none; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">⚡</button>
                    <button class="btn btn-sm" style="width: 2.5rem; height: 2.5rem; border-radius: 50%; background: #f3f4f6; color: #6b7280; border: none; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">💻</button>
                    <button class="btn btn-sm" style="width: 2.5rem; height: 2.5rem; border-radius: 50%; background: #f3f4f6; color: #6b7280; border: none; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">📧</button>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="card card-profile"&gt;
  &lt;img src="avatar.jpg" alt="Avatar" class="profile-avatar"&gt;
  &lt;h5 class="profile-name"&gt;Nombre Completo&lt;/h5&gt;
  &lt;div class="profile-role"&gt;Cargo / Posición&lt;/div&gt;
  &lt;p class="profile-bio"&gt;Breve descripción o biografía&lt;/p&gt;
  &lt;div class="profile-social"&gt;
    &lt;a href="#" class="social-link"&gt;📱&lt;/a&gt;
    &lt;a href="#" class="social-link"&gt;💼&lt;/a&gt;
    &lt;a href="#" class="social-link"&gt;🌐&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Card de Blog</h3>
        <div class="demo-grid-wide">
            <div class="demo-card">
                <div class="position-relative overflow-hidden">
                    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 250'%3E%3Cdefs%3E%3ClinearGradient id='blog1' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' stop-color='%23667eea'/%3E%3Cstop offset='100%25' stop-color='%23764ba2'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='400' height='250' fill='url(%23blog1)'/%3E%3Ctext x='200' y='125' text-anchor='middle' dy='0.35em' fill='white' font-family='Arial, sans-serif' font-size='18'%3EArtículo Demo%3C/text%3E%3C/svg%3E" alt="Blog post" style="height: 250px; object-fit: cover;">
                    <div class="position-absolute top-0 start-0 m-3">
                        <span class="badge bg-primary rounded-pill">Tecnología</span>
                    </div>
                </div>
                <div class="card-body" style="padding: 1.5rem;">
                    <div class="blog-meta-demo">
                        <div class="d-flex align-items-center gap-1">
                            <span>📅</span>
                            <span>15 Mar 2024</span>
                        </div>
                        <div class="d-flex align-items-center gap-1">
                            <span>⏱️</span>
                            <span>5 min lectura</span>
                        </div>
                        <div class="d-flex align-items-center gap-1">
                            <span>💬</span>
                            <span>12 comentarios</span>
                        </div>
                    </div>
                    <h5 style="font-size: 1.25rem; font-weight: 700; color: #111827; margin-bottom: 0.75rem; line-height: 1.3;">
                        <a href="#" style="color: inherit; text-decoration: none;">Las Tendencias de Diseño Web que Dominarán 2024</a>
                    </h5>
                    <p class="card-text" style="color: #6b7280; margin-bottom: 1rem; line-height: 1.6;">
                        Descubre las últimas tendencias en diseño web, desde el glassmorphism hasta las animaciones micro-interactivas que están revolucionando la experiencia de usuario.
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-2">
                            <div style="width: 2rem; height: 2rem; border-radius: 50%; background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 0.75rem; font-weight: 600;">
                                DG
                            </div>
                            <div style="font-size: 0.875rem; font-weight: 600; color: #374151;">David Goma</div>
                        </div>
                        <a href="#" style="color: #6366f1; font-weight: 600; font-size: 0.875rem; text-decoration: none;">Leer más →</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="card card-blog"&gt;
  &lt;div class="blog-image"&gt;
    &lt;img src="article.jpg" alt="Artículo"&gt;
    &lt;span class="blog-category"&gt;Tecnología&lt;/span&gt;
  &lt;/div&gt;
  &lt;div class="blog-content"&gt;
    &lt;div class="blog-meta"&gt;
      &lt;span class="meta-item"&gt;📅 15 Mar 2024&lt;/span&gt;
      &lt;span class="meta-item"&gt;⏱️ 5 min lectura&lt;/span&gt;
    &lt;/div&gt;
    &lt;h5 class="blog-title"&gt;
      &lt;a href="#"&gt;Título del Artículo&lt;/a&gt;
    &lt;/h5&gt;
    &lt;p class="blog-excerpt"&gt;Resumen del contenido...&lt;/p&gt;
    &lt;div class="blog-footer"&gt;
      &lt;div class="author-info"&gt;
        &lt;img src="avatar.jpg" class="author-avatar"&gt;
        &lt;span class="author-name"&gt;Autor&lt;/span&gt;
      &lt;/div&gt;
      &lt;a href="#" class="read-more"&gt;Leer más&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    <!-- Layouts Tab -->
    <div class="tab-pane fade" id="layouts" role="tabpanel">
        <h2>Layouts y Disposiciones</h2>

        <h3>Card Horizontal</h3>
        <div class="cards-demo">
            <div class="demo-card d-flex flex-row">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 150'%3E%3Cdefs%3E%3ClinearGradient id='horiz1' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' stop-color='%23667eea'/%3E%3Cstop offset='100%25' stop-color='%23764ba2'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='200' height='150' fill='url(%23horiz1)'/%3E%3Ctext x='100' y='75' text-anchor='middle' dy='0.35em' fill='white' font-family='Arial, sans-serif' font-size='14'%3EImagen%3C/text%3E%3C/svg%3E" style="width: 200px; height: 100%; object-fit: cover; border-radius: 1rem 0 0 1rem;" alt="Imagen horizontal">
                <div class="card-body flex-fill">
                    <h5 class="card-title">Layout Horizontal</h5>
                    <p class="card-text">Perfecto para mostrar contenido con imágenes en formato landscape. Se adapta automáticamente a móvil cambiando a layout vertical.</p>
                    <div class="d-flex gap-2">
                        <button class="btn btn-primary btn-sm">Acción</button>
                        <button class="btn btn-outline-secondary btn-sm">Secundaria</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="card card-horizontal"&gt;
  &lt;img src="imagen.jpg" class="card-img-left" alt="Imagen"&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Título&lt;/h5&gt;
    &lt;p class="card-text"&gt;Contenido de la card horizontal&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Card con Overlay</h3>
        <div class="cards-demo">
            <div class="demo-card position-relative" style="color: white; height: 300px;">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 300'%3E%3Cdefs%3E%3ClinearGradient id='overlay1' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' stop-color='%23667eea'/%3E%3Cstop offset='100%25' stop-color='%23764ba2'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='400' height='300' fill='url(%23overlay1)'/%3E%3Ctext x='200' y='150' text-anchor='middle' dy='0.35em' fill='white' font-family='Arial, sans-serif' font-size='18'%3EFondo Overlay%3C/text%3E%3C/svg%3E" class="card-img" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" alt="Fondo">
                <div class="position-absolute top-0 start-0 end-0 bottom-0 d-flex flex-column justify-content-end" style="background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.8)); padding: 1.5rem; border-radius: 1rem;">
                    <h5 class="card-title text-white mb-2">Título sobre imagen</h5>
                    <p class="card-text" style="color: rgba(255, 255, 255, 0.9);">Contenido superpuesto sobre la imagen de fondo con gradiente para mejor legibilidad.</p>
                    <div class="mt-2">
                        <button class="btn btn-light btn-sm">Ver más</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="card card-overlay"&gt;
  &lt;img src="fondo.jpg" class="card-img" alt="Fondo"&gt;
  &lt;div class="card-img-overlay"&gt;
    &lt;h5 class="card-title"&gt;Título&lt;/h5&gt;
    &lt;p class="card-text"&gt;Contenido superpuesto&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Grid Masonry</h3>
        <div class="cards-demo">
            <div class="masonry-demo">
                <div class="demo-card">
                    <div class="card-body">
                        <h6 class="card-title">Card Pequeña</h6>
                        <p class="card-text">Contenido breve para demostrar el layout masonry.</p>
                    </div>
                </div>

                <div class="demo-card">
                    <div class="card-body">
                        <h6 class="card-title">Card Media</h6>
                        <p class="card-text">Esta card tiene más contenido para mostrar cómo el masonry layout se adapta automáticamente a diferentes alturas de contenido.</p>
                        <div class="alert alert-info mb-0">
                            <small>Información adicional</small>
                        </div>
                    </div>
                </div>

                <div class="demo-card">
                    <div class="card-body">
                        <h6 class="card-title">Card Grande</h6>
                        <p class="card-text">Esta es una card con mucho más contenido para demostrar cómo el sistema masonry distribuye automáticamente las cards en columnas balanceadas.</p>
                        <ul class="mb-3">
                            <li>Punto 1</li>
                            <li>Punto 2</li>
                            <li>Punto 3</li>
                        </ul>
                        <button class="btn btn-primary btn-sm">Acción</button>
                    </div>
                </div>

                <div class="demo-card">
                    <div class="card-body">
                        <h6 class="card-title">Card Compacta</h6>
                        <p class="card-text">Otra card pequeña.</p>
                    </div>
                </div>

                <div class="demo-card">
                    <div class="card-body">
                        <h6 class="card-title">Card Extendida</h6>
                        <p class="card-text">Esta card demuestra cómo el contenido variable funciona perfectamente con el layout masonry, creando una disposición natural y orgánica.</p>
                        <div class="d-flex gap-2 mt-3">
                            <span class="badge bg-primary">Tag 1</span>
                            <span class="badge bg-secondary">Tag 2</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="cards-masonry"&gt;
  &lt;div class="card"&gt;
    &lt;!-- Card 1 --&gt;
  &lt;/div&gt;
  &lt;div class="card"&gt;
    &lt;!-- Card 2 --&gt;
  &lt;/div&gt;
  &lt;!-- Más cards... --&gt;
&lt;/div&gt;</code></pre>
        </div>

        <div class="alert alert-info">
            <h4>📱 Responsive Masonry</h4>
            <ul class="mb-0">
                <li><strong>Móvil:</strong> 1 columna</li>
                <li><strong>Tablet:</strong> 2 columnas</li>
                <li><strong>Desktop:</strong> 3 columnas</li>
                <li><strong>Auto-balanceado:</strong> Las cards se distribuyen automáticamente</li>
            </ul>
        </div>

        <h3>Card Groups y Decks</h3>
        <div class="cards-demo">
            <h5>Card Group (Alturas iguales)</h5>
            <div class="card-group mb-4">
                <div class="demo-card">
                    <div class="card-body">
                        <h6 class="card-title">Card 1</h6>
                        <p class="card-text">Contenido corto.</p>
                        <button class="btn btn-primary btn-sm">Acción</button>
                    </div>
                </div>
                <div class="demo-card">
                    <div class="card-body">
                        <h6 class="card-title">Card 2</h6>
                        <p class="card-text">Esta card tiene más contenido para demostrar cómo todas las cards del grupo mantienen la misma altura automáticamente.</p>
                        <button class="btn btn-primary btn-sm">Acción</button>
                    </div>
                </div>
                <div class="demo-card">
                    <div class="card-body">
                        <h6 class="card-title">Card 3</h6>
                        <p class="card-text">Contenido medio para completar el ejemplo.</p>
                        <button class="btn btn-primary btn-sm">Acción</button>
                    </div>
                </div>
            </div>

            <h5>Card Deck (Espaciado independiente)</h5>
            <div class="card-deck">
                <div class="demo-card">
                    <div class="card-body">
                        <h6 class="card-title">Deck 1</h6>
                        <p class="card-text">Alturas independientes con espaciado.</p>
                    </div>
                </div>
                <div class="demo-card">
                    <div class="card-body">
                        <h6 class="card-title">Deck 2</h6>
                        <p class="card-text">Cada card mantiene su altura natural según el contenido que contenga.</p>
                        <div class="mt-2">
                            <small class="text-muted">Información adicional</small>
                        </div>
                    </div>
                </div>
                <div class="demo-card">
                    <div class="card-body">
                        <h6 class="card-title">Deck 3</h6>
                        <p class="card-text">Perfecto para contenido variable.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;!-- Card Group (alturas iguales) --&gt;
&lt;div class="card-group"&gt;
  &lt;div class="card"&gt;...&lt;/div&gt;
  &lt;div class="card"&gt;...&lt;/div&gt;
  &lt;div class="card"&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Card Deck (alturas independientes) --&gt;
&lt;div class="card-deck"&gt;
  &lt;div class="card"&gt;...&lt;/div&gt;
  &lt;div class="card"&gt;...&lt;/div&gt;
  &lt;div class="card"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    <!-- Advanced Functionality Tab -->
    <div class="tab-pane fade" id="advanced" role="tabpanel">
        <h2>Funcionalidades Avanzadas</h2>

        <h3>Estados de Loading</h3>
        <div class="demo-grid">
            <div class="demo-card">
                <div class="card-body" style="min-height: 200px;">
                    <div class="skeleton-demo"></div>
                    <div class="skeleton-demo w-75"></div>
                    <div class="skeleton-demo w-50"></div>
                    <div class="mt-3">
                        <div class="skeleton-demo w-25"></div>
                    </div>
                </div>
            </div>

            <div class="demo-card">
                <div class="card-body text-center" style="min-height: 200px; display: flex; align-items: center; justify-content: center;">
                    <div>
                        <div class="spinner-border text-primary mb-3" role="status">
                            <span class="visually-hidden">Cargando...</span>
                        </div>
                        <div>
                            <h6 class="text-muted">Cargando contenido...</h6>
                            <small class="text-muted">Por favor espera</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;!-- Estado skeleton --&gt;
&lt;div class="card card-loading"&gt;
  &lt;div class="card-body"&gt;
    &lt;!-- Se aplican automáticamente los skeletons --&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Estado spinner personalizado --&gt;
&lt;div class="card"&gt;
  &lt;div class="card-body text-center"&gt;
    &lt;div class="spinner-border text-primary"&gt;&lt;/div&gt;
    &lt;p&gt;Cargando...&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Card Disabled</h3>
        <div class="demo-grid">
            <div class="demo-card" style="opacity: 0.6; cursor: not-allowed;">
                <div class="card-body">
                    <h5 class="card-title">Card Deshabilitada</h5>
                    <p class="card-text">Esta card está deshabilitada y no responde a interacciones hover.</p>
                    <button class="btn btn-primary" disabled>Acción bloqueada</button>
                </div>
            </div>

            <div class="demo-card">
                <div class="card-body">
                    <h5 class="card-title">Card Normal</h5>
                    <p class="card-text">Card completamente funcional para comparación.</p>
                    <button class="btn btn-primary">Acción disponible</button>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="card card-disabled"&gt;
  &lt;div class="card-body"&gt;
    &lt;h5 class="card-title"&gt;Card Deshabilitada&lt;/h5&gt;
    &lt;p class="card-text"&gt;Sin efectos hover ni interacciones&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Animaciones de Entrada</h3>
        <div class="cards-demo">
            <div class="alert alert-info mb-3">
                <h5>🎬 Animaciones Escalonadas</h5>
                <p class="mb-0">Las cards pueden aparecer con animaciones staggered (escalonadas) para crear efectos visuales atractivos:</p>
            </div>

            <div class="row g-3">
                <div class="col-md-4">
                    <div class="demo-card card-animated">
                        <div class="card-body text-center">
                            <h6 class="card-title">Delay: 0.1s</h6>
                            <p class="card-text small">Primera en aparecer</p>
                            <small class="text-muted">Clase: <code>.delay-1</code></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="demo-card card-animated" style="animation-delay: 0.5s;">
                        <div class="card-body text-center">
                            <h6 class="card-title">Delay: 0.2s</h6>
                            <p class="card-text small">Segunda en aparecer</p>
                            <small class="text-muted">Clase: <code>.delay-2</code></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="demo-card card-animated" style="animation-delay: 1s;">
                        <div class="card-body text-center">
                            <h6 class="card-title">Delay: 0.3s</h6>
                            <p class="card-text small">Tercera en aparecer</p>
                            <small class="text-muted">Clase: <code>.delay-3</code></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="card card-animate-in delay-1"&gt;...&lt;/div&gt;
&lt;div class="card card-animate-in delay-2"&gt;...&lt;/div&gt;
&lt;div class="card card-animate-in delay-3"&gt;...&lt;/div&gt;
&lt;div class="card card-animate-in delay-4"&gt;...&lt;/div&gt;
&lt;div class="card card-animate-in delay-5"&gt;...&lt;/div&gt;</code></pre>
        </div>

        <h3>Dark Mode Automático</h3>
        <div class="demo-container-dark">
            <h4>🌙 Adaptación Automática</h4>
            <div class="demo-grid">
                <div class="demo-card" style="background: #374151; color: #f3f4f6; border: 1px solid #4b5563;">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #f3f4f6;">Dark Mode</h5>
                        <p class="card-text" style="color: #d1d5db;">Las cards se adaptan automáticamente al modo oscuro usando CSS media queries.</p>
                        <button class="btn btn-primary">Acción</button>
                    </div>
                </div>

                <div class="demo-card" style="background: #374151; color: #f3f4f6; border: 1px solid #4b5563;">
                    <div class="card-header" style="background: #4b5563; border-bottom: 1px solid #6b7280; color: #f3f4f6;">
                        Header Oscuro
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2" style="color: #9ca3af;">Subtítulo adaptado</h6>
                        <p class="card-text" style="color: #d1d5db;">Todos los elementos se adaptan automáticamente.</p>
                    </div>
                    <div class="card-footer" style="background: #4b5563; border-top: 1px solid #6b7280;">
                        <small style="color: #9ca3af;">Footer en modo oscuro</small>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <p>Se activa automáticamente con <code>@media (prefers-color-scheme: dark)</code></p>
                <ul class="mb-0">
                    <li>Fondo: <code>$gray-800</code></li>
                    <li>Texto: <code>$gray-100</code></li>
                    <li>Bordes: <code>$gray-700/$gray-600</code></li>
                </ul>
            </div>
        </div>

        <h3>Cards Interactivas</h3>
        <div class="demo-grid">
            <div class="demo-card card-pulse">
                <div class="card-body text-center">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">🔔</div>
                    <h6 class="card-title">Notificación</h6>
                    <p class="card-text small">Card con efecto pulse para llamar la atención.</p>
                    <button class="btn btn-primary btn-sm">Ver notificación</button>
                </div>
            </div>

            <div class="demo-card" onclick="this.style.transform = this.style.transform === 'scale(0.95)' ? 'scale(1)' : 'scale(0.95)';" style="cursor: pointer;">
                <div class="card-body text-center">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">👆</div>
                    <h6 class="card-title">Click Me</h6>
                    <p class="card-text small">Card interactiva con efecto click.</p>
                    <small class="text-muted">Haz click para ver el efecto</small>
                </div>
            </div>

            <div class="demo-card" style="transition: all 0.3s ease;">
                <div class="card-body text-center">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">⭐</div>
                    <h6 class="card-title">Favorito</h6>
                    <p class="card-text small">Card con estados de favorito.</p>
                    <button class="btn btn-outline-warning btn-sm" onclick="this.classList.toggle('btn-warning'); this.classList.toggle('btn-outline-warning');">❤️ Favorito</button>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-javascript">// Ejemplo de interactividad con JavaScript
document.querySelectorAll('.card-interactive').forEach(card => {
  card.addEventListener('click', function() {
    this.classList.toggle('card-selected');
  });
});

// Animaciones personalizadas
function animateCardEntry() {
  const cards = document.querySelectorAll('.card-animate-in');
  cards.forEach((card, index) => {
    setTimeout(() => {
      card.style.opacity = '1';
      card.style.transform = 'translateY(0)';
    }, index * 100);
  });
}</code></pre>
        </div>
    </div>

    <!-- Examples Tab -->
    <div class="tab-pane fade" id="examples" role="tabpanel">
        <h2>Ejemplos Completos</h2>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="demo-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>🛒 E-commerce Dashboard</h4>
                        <button class="btn btn-outline-primary btn-sm">Ver todo</button>
                    </div>
                    <div class="card-body p-0">
                        <div class="row g-3 p-3">
                            <div class="col-6">
                                <div class="demo-card text-center" style="padding: 1rem;">
                                    <div style="font-size: 1.5rem;">📊</div>
                                    <h6 class="mt-2 mb-1">Ventas</h6>
                                    <div style="font-size: 1.25rem; font-weight: 700; color: #6366f1;">$12.5K</div>
                                    <small class="text-success">+8.2%</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="demo-card text-center" style="padding: 1rem;">
                                    <div style="font-size: 1.5rem;">👥</div>
                                    <h6 class="mt-2 mb-1">Clientes</h6>
                                    <div style="font-size: 1.25rem; font-weight: 700; color: #6366f1;">1.2K</div>
                                    <small class="text-success">+12%</small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="demo-card">
                                    <div class="card-body">
                                        <h6>Productos Top</h6>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div class="d-flex align-items-center gap-2">
                                                <div style="width: 8px; height: 8px; border-radius: 50%; background: #6366f1;"></div>
                                                <span style="font-size: 0.875rem;">Auriculares Pro</span>
                                            </div>
                                            <small class="text-muted">245 ventas</small>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div class="d-flex align-items-center gap-2">
                                                <div style="width: 8px; height: 8px; border-radius: 50%; background: #10b981;"></div>
                                                <span style="font-size: 0.875rem;">Smart Watch</span>
                                            </div>
                                            <small class="text-muted">189 ventas</small>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-2">
                                                <div style="width: 8px; height: 8px; border-radius: 50%; background: #f59e0b;"></div>
                                                <span style="font-size: 0.875rem;">Tablet Ultra</span>
                                            </div>
                                            <small class="text-muted">156 ventas</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="demo-card">
                    <div class="card-header">
                        <h4>📱 Social Media Feed</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="p-3 border-bottom">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="profile-avatar-demo" style="width: 2.5rem; height: 2.5rem; font-size: 0.875rem;">
                                    LC
                                </div>
                                <div>
                                    <div style="font-weight: 600; font-size: 0.875rem;">Laura Chen</div>
                                    <div style="font-size: 0.75rem; color: #6b7280;">Hace 2 horas</div>
                                </div>
                            </div>
                            <p style="font-size: 0.875rem; margin-bottom: 1rem;">¡Increíble lo fácil que es crear interfaces modernas con este sistema de cards! 🚀</p>
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 200'%3E%3Cdefs%3E%3ClinearGradient id='social1' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' stop-color='%236366f1'/%3E%3Cstop offset='100%25' stop-color='%238b5cf6'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='400' height='200' fill='url(%23social1)'/%3E%3Ctext x='200' y='100' text-anchor='middle' dy='0.35em' fill='white' font-family='Arial, sans-serif' font-size='16'%3EPost Image%3C/text%3E%3C/svg%3E" class="img-fluid rounded mb-3" alt="Post">
                            <div class="d-flex gap-4">
                                <button class="btn btn-link p-0 text-muted" style="font-size: 0.875rem;">👍 125</button>
                                <button class="btn btn-link p-0 text-muted" style="font-size: 0.875rem;">💬 23</button>
                                <button class="btn btn-link p-0 text-muted" style="font-size: 0.875rem;">↗️ 8</button>
                            </div>
                        </div>

                        <div class="p-3">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="profile-avatar-demo" style="width: 2.5rem; height: 2.5rem; font-size: 0.875rem; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);">
                                    RM
                                </div>
                                <div>
                                    <div style="font-weight: 600; font-size: 0.875rem;">Roberto Martín</div>
                                    <div style="font-size: 0.75rem; color: #6b7280;">Hace 4 horas</div>
                                </div>
                            </div>
                            <p style="font-size: 0.875rem; margin-bottom: 1rem;">Trabajando en el nuevo diseño del dashboard. ¿Qué opinan de estas cards? 🎨</p>
                            <div class="d-flex gap-4">
                                <button class="btn btn-link p-0 text-muted" style="font-size: 0.875rem;">👍 89</button>
                                <button class="btn btn-link p-0 text-muted" style="font-size: 0.875rem;">💬 15</button>
                                <button class="btn btn-link p-0 text-muted" style="font-size: 0.875rem;">↗️ 4</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-lg-4">
                <div class="demo-card">
                    <div class="card-header text-center">
                        <h4>💎 Plan Premium</h4>
                    </div>
                    <div class="card-body text-center">
                        <div style="font-size: 3rem; font-weight: 800; color: #6366f1; margin: 1rem 0;">$29</div>
                        <p class="text-muted mb-4">por mes</p>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">✅ Todas las funciones</li>
                            <li class="mb-2">✅ Soporte prioritario</li>
                            <li class="mb-2">✅ Sin límites</li>
                            <li class="mb-2">✅ API access</li>
                        </ul>
                        <button class="btn btn-primary w-100 mb-2">Comenzar prueba</button>
                        <small class="text-muted">14 días gratis</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="demo-card">
                    <div class="position-relative overflow-hidden">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 250'%3E%3Cdefs%3E%3ClinearGradient id='course1' x1='0%25' y1='0%25' x2='100%25' y2='100%25'%3E%3Cstop offset='0%25' stop-color='%2310b981'/%3E%3Cstop offset='100%25' stop-color='%23059669'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect width='400' height='250' fill='url(%23course1)'/%3E%3Ctext x='200' y='125' text-anchor='middle' dy='0.35em' fill='white' font-family='Arial, sans-serif' font-size='18'%3ECurso Online%3C/text%3E%3C/svg%3E" alt="Curso" style="height: 200px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 m-3">
                            <span class="badge bg-success">Nuevo</span>
                        </div>
                        <div class="position-absolute top-0 end-0 m-3">
                            <button class="btn btn-light btn-sm rounded-circle" style="width: 2rem; height: 2rem;">❤️</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="d-flex">
                                <span style="color: #fbbf24;">⭐</span>
                                <span style="color: #fbbf24;">⭐</span>
                                <span style="color: #fbbf24;">⭐</span>
                                <span style="color: #fbbf24;">⭐</span>
                                <span style="color: #fbbf24;">⭐</span>
                            </div>
                            <small class="text-muted">(4.9)</small>
                        </div>
                        <h5 class="card-title">Desarrollo Web Moderno</h5>
                        <p class="card-text" style="font-size: 0.875rem;">Aprende a crear aplicaciones web modernas con las últimas tecnologías.</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <div style="width: 1.5rem; height: 1.5rem; border-radius: 50%; background: #6366f1; display: flex; align-items: center; justify-content: center; color: white; font-size: 0.75rem; font-weight: 600;">
                                    JM
                                </div>
                                <small>Juan Martínez</small>
                            </div>
                            <small class="text-muted">12h 30min</small>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span style="font-size: 1.25rem; font-weight: 700; color: #6366f1;">$49.99</span>
                            <button class="btn btn-primary btn-sm">Inscribirse</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="demo-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="card-title mb-1">Tarea: Revisar diseño</h5>
                                <small class="text-muted">Proyecto Mobile App</small>
                            </div>
                            <span class="badge bg-warning">En progreso</span>
                        </div>
                        <p class="card-text" style="font-size: 0.875rem;">Revisar y aprobar los mockups del nuevo diseño de la aplicación móvil antes de enviar a desarrollo.</p>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <small class="text-muted">Progreso</small>
                                <small class="text-muted">75%</small>
                            </div>
                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-warning" style="width: 75%"></div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center gap-1">
                                <span>📅</span>
                                <small class="text-muted">Vence: 25 Mar</small>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <span>👥</span>
                                <div class="d-flex" style="margin-left: 0.25rem;">
                                    <div style="width: 1.5rem; height: 1.5rem; border-radius: 50%; background: #6366f1; display: flex; align-items: center; justify-content: center; color: white; font-size: 0.625rem; font-weight: 600; margin-left: -0.25rem; border: 2px solid white;">
                                        AM
                                    </div>
                                    <div style="width: 1.5rem; height: 1.5rem; border-radius: 50%; background: #10b981; display: flex; align-items: center; justify-content: center; color: white; font-size: 0.625rem; font-weight: 600; margin-left: -0.25rem; border: 2px solid white;">
                                        LC
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-primary btn-sm flex-fill">💬 Comentar</button>
                            <button class="btn btn-primary btn-sm flex-fill">✅ Completar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-success mt-4">
            <h4>🎯 Mejores Prácticas para Cards</h4>
            <div class="row g-3">
                <div class="col-md-6">
                    <h5>📝 Contenido</h5>
                    <ul>
                        <li><strong>Títulos concisos:</strong> Máximo 2-3 líneas</li>
                        <li><strong>Jerarquía visual:</strong> Usa tamaños de fuente apropiados</li>
                        <li><strong>Espaciado consistente:</strong> Mantén el mismo padding</li>
                        <li><strong>CTAs claros:</strong> Botones con acciones específicas</li>
                        <li><strong>Información esencial:</strong> Solo lo más importante</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>🎨 Diseño</h5>
                    <ul>
                        <li><strong>Consistencia:</strong> Mismo estilo en toda la aplicación</li>
                        <li><strong>Contraste:</strong> Texto legible en todos los fondos</li>
                        <li><strong>Imágenes optimizadas:</strong> Aspect ratio consistente</li>
                        <li><strong>Estados claros:</strong> Hover, active, disabled</li>
                        <li><strong>Responsive:</strong> Funciona en todos los tamaños</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="alert alert-info">
            <h4>🔧 Personalización Avanzada</h4>
            <div class="row g-3">
                <div class="col-md-4">
                    <strong>Variables SCSS disponibles:</strong>
                    <ul class="small mb-0">
                        <li><code>$border-radius-xl</code> - Border radius</li>
                        <li><code>$box-shadow-md</code> - Sombra por defecto</li>
                        <li><code>$box-shadow-xl</code> - Sombra hover</li>
                        <li><code>$font-family-display</code> - Font títulos</li>
                        <li><code>$transition-all</code> - Transiciones</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <strong>Clases modificadoras:</strong>
                    <ul class="small mb-0">
                        <li><code>.card-sm</code> - Padding reducido</li>
                        <li><code>.card-lg</code> - Padding amplio</li>
                        <li><code>.card-xl</code> - Padding extra amplio</li>
                        <li><code>.card-flat</code> - Sin hover</li>
                        <li><code>.card-loading</code> - Estado cargando</li>
                        <li><code>.card-disabled</code> - Estado deshabilitado</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <strong>Variantes especiales:</strong>
                    <ul class="small mb-0">
                        <li><code>.card-glass</code> - Efecto cristal</li>
                        <li><code>.card-gradient</code> - Fondo degradado</li>
                        <li><code>.card-glow</code> - Efecto brillo</li>
                        <li><code>.card-bordered</code> - Borde coloreado</li>
                        <li><code>.card-horizontal</code> - Layout horizontal</li>
                        <li><code>.card-overlay</code> - Contenido superpuesto</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="alert alert-warning">
            <h4>⚡ Optimización de Performance</h4>
            <div class="row g-3">
                <div class="col-md-6">
                    <strong>CSS:</strong>
                    <ul class="small mb-0">
                        <li>Usa <code>transform</code> para animaciones</li>
                        <li>Evita cambios de <code>layout</code> en hover</li>
                        <li>Optimiza <code>backdrop-filter</code> para glass</li>
                        <li>Usa <code>will-change</code> para animaciones complejas</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <strong>JavaScript:</strong>
                    <ul class="small mb-0">
                        <li>Lazy loading para imágenes</li>
                        <li>Virtual scrolling para listas grandes</li>
                        <li>Debounce en interacciones frecuentes</li>
                        <li>Intersection Observer para animaciones</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<x-slot:footerScripts>
<script>
// Demos interactivos para cards
document.addEventListener('DOMContentLoaded', function() {
    console.log('🎴 Cards demos initialized');

    // Hover effects mejorados
    const cards = document.querySelectorAll('.demo-card');
    cards.forEach(card => {
        if (!card.classList.contains('card-flat') && !card.classList.contains('card-disabled')) {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-4px)';
                this.style.boxShadow = '0 25px 50px -12px rgba(0, 0, 0, 0.25)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)';
            });
        }
    });

    // Animaciones de loading para skeleton
    const skeletons = document.querySelectorAll('.skeleton-demo');
    skeletons.forEach(skeleton => {
        skeleton.style.backgroundSize = '200% 100%';
        skeleton.style.backgroundImage = 'linear-gradient(90deg, #f3f4f6 25%, #e5e7eb 50%, #f3f4f6 75%)';
    });

    // Efecto para cards de producto
    const productCards = document.querySelectorAll('.product-demo');
    productCards.forEach(card => {
        const img = card.querySelector('img');
        const overlay = card.querySelector('.product-overlay-demo');

        card.addEventListener('mouseenter', function() {
            if (img) {
                img.style.transform = 'scale(1.1)';
            }
            if (overlay) {
                overlay.style.opacity = '1';
            }
        });

        card.addEventListener('mouseleave', function() {
            if (img) {
                img.style.transform = 'scale(1)';
            }
            if (overlay) {
                overlay.style.opacity = '0';
            }
        });
    });

    // Profile avatar hover
    const avatars = document.querySelectorAll('.profile-avatar-demo');
    avatars.forEach(avatar => {
        avatar.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
            this.style.boxShadow = '0 0 0 4px rgba(99, 102, 241, 0.2)';
        });

        avatar.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
            this.style.boxShadow = 'none';
        });
    });

    // Social buttons hover
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('social-link') || e.target.closest('.social-link')) {
            e.preventDefault();
            const button = e.target.classList.contains('social-link') ? e.target : e.target.closest('.social-link');
            button.style.background = '#6366f1';
            button.style.color = 'white';
            button.style.transform = 'translateY(-2px)';

            setTimeout(() => {
                button.style.background = '#f3f4f6';
                button.style.color = '#6b7280';
                button.style.transform = 'translateY(0)';
            }, 200);
        }
    });

    // Masonry simulation
    function adjustMasonryHeights() {
        const masonryItems = document.querySelectorAll('.masonry-demo .demo-card');
        const heights = ['120px', '160px', '140px', '180px', '130px'];

        masonryItems.forEach((item, index) => {
            if (heights[index]) {
                item.style.minHeight = heights[index];
            }
        });
    }

    // Inicializar masonry
    setTimeout(adjustMasonryHeights, 100);

    // Animación staggered para cards
    function animateCardsStaggered() {
        const animatedCards = document.querySelectorAll('.card-animated');
        animatedCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';

            setTimeout(() => {
                card.style.transition = 'all 0.6s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 150);
        });
    }

    // Inicializar animaciones después de un delay
    setTimeout(animateCardsStaggered, 500);

    // Progress bars animadas
    const progressBars = document.querySelectorAll('.progress-bar');
    progressBars.forEach(bar => {
        const width = bar.style.width;
        bar.style.width = '0%';
        setTimeout(() => {
            bar.style.transition = 'width 1s ease-in-out';
            bar.style.width = width;
        }, 1000);
    });

    // Glass cards blur effect
    if (CSS.supports('backdrop-filter', 'blur(20px)')) {
        console.log('✅ Backdrop filter supported');
    } else {
        console.log('⚠️ Backdrop filter not supported, using fallback');
        const glassCards = document.querySelectorAll('.demo-card-glass');
        glassCards.forEach(card => {
            card.style.background = 'rgba(255, 255, 255, 0.9)';
        });
    }

    // Pulse animation control
    let pulseActive = true;
    const pulseCards = document.querySelectorAll('.card-pulse');

    setInterval(() => {
        pulseCards.forEach(card => {
            if (pulseActive) {
                card.style.boxShadow = '0 0 40px rgba(99, 102, 241, 0.5)';
            } else {
                card.style.boxShadow = '0 0 20px rgba(99, 102, 241, 0.2)';
            }
        });
        pulseActive = !pulseActive;
    }, 2000);

    // Intersection Observer para lazy animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1
    });

    // Observar cards para animaciones
    document.querySelectorAll('.demo-card').forEach(card => {
        observer.observe(card);
    });

    console.log('🎴 All card demos loaded successfully');
});

// Utility functions for card interactions
function toggleFavorite(button) {
    const isFavorite = button.classList.contains('btn-warning');

    if (isFavorite) {
        button.classList.remove('btn-warning');
        button.classList.add('btn-outline-warning');
        button.innerHTML = '🤍 Favorito';
    } else {
        button.classList.remove('btn-outline-warning');
        button.classList.add('btn-warning');
        button.innerHTML = '❤️ Favorito';
    }

    // Pequeña animación
    button.style.transform = 'scale(0.95)';
    setTimeout(() => {
        button.style.transform = 'scale(1)';
    }, 150);
}

// Función para simular carga de contenido
function simulateLoading(cardElement, duration = 2000) {
    const originalContent = cardElement.innerHTML;

    // Mostrar skeleton
    cardElement.innerHTML = `
        <div class="card-body">
            <div class="skeleton-demo"></div>
            <div class="skeleton-demo w-75"></div>
            <div class="skeleton-demo w-50"></div>
        </div>
    `;

    // Restaurar contenido después del delay
    setTimeout(() => {
        cardElement.innerHTML = originalContent;
    }, duration);
}

// Keyframes adicionales
const additionalStyles = document.createElement('style');
additionalStyles.textContent = `
    @keyframes shimmer {
        0% { background-position: -200% 0; }
        100% { background-position: 200% 0; }
    }

    @keyframes cardFadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes cardPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.02); }
    }
`;
document.head.appendChild(additionalStyles);
</script>
</x-slot:footerScripts>

</x-layouts.docs>
