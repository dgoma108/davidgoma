<x-layouts.docs>

<x-slot:title>Formularios - Modern Bootstrap Extension</x-slot:title>

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
}

.form-demo {
    background: white;
    border: 1px solid #dee2e6;
    border-radius: 0.5rem;
    padding: 1.5rem;
    margin: 1rem 0;
}

.dark-demo {
    background: #212529;
    color: white;
    padding: 2rem;
    border-radius: 0.5rem;
}

.form-preview {
    max-width: 400px;
    margin: 0 auto;
}

.component-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin: 1rem 0;
}
</style>
</x-slot:styles>

<!-- Header de la página -->
<div class="docs-header">
    <h1 class="display-5">Forms</h1>
    <p class="lead text-muted">Sistema completo de formularios modernos con validación visual, estados interactivos y múltiples componentes especializados.</p>
</div>

<!-- Navigation Tabs -->
<ul class="nav nav-pills mb-4" id="forms-tabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="inputs-tab" data-bs-toggle="pill" data-bs-target="#inputs" type="button" role="tab">Inputs Básicos</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="advanced-tab" data-bs-toggle="pill" data-bs-target="#advanced" type="button" role="tab">Componentes Avanzados</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="validation-tab" data-bs-toggle="pill" data-bs-target="#validation" type="button" role="tab">Validación</button>
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

<div class="tab-content" id="forms-content">

    <!-- Basic Inputs Tab -->
    <div class="tab-pane fade show active" id="inputs" role="tabpanel">
        <h2>Inputs Básicos Mejorados</h2>
        <p>Todos los inputs incluyen bordes más gruesos, border-radius mejorado, transiciones suaves y mejor contraste visual.</p>

        <div class="component-grid">
            <div class="form-demo">
                <h4>Text Input</h4>
                <div class="mb-3">
                    <label class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" placeholder="Escribe tu nombre">
                </div>
                <div class="mb-3">
                    <label class="form-label required">Email</label>
                    <input type="email" class="form-control" placeholder="tu@email.com">
                </div>
            </div>

            <div class="form-demo">
                <h4>Textarea</h4>
                <div class="mb-3">
                    <label class="form-label">Mensaje</label>
                    <textarea class="form-control" placeholder="Escribe tu mensaje aquí..." rows="4"></textarea>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="mb-3"&gt;
  &lt;label class="form-label required"&gt;Email&lt;/label&gt;
  &lt;input type="email" class="form-control" placeholder="tu@email.com"&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Características Principales</h3>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Mejoras Visuales</h4>
                        <ul>
                            <li><strong>Bordes:</strong> 2px sólidos en lugar de 1px</li>
                            <li><strong>Border-radius:</strong> Más redondeados (lg)</li>
                            <li><strong>Padding:</strong> Más espacioso (0.75rem 1rem)</li>
                            <li><strong>Focus:</strong> Border coloreado + box-shadow</li>
                            <li><strong>Placeholder:</strong> Color optimizado</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Estados Mejorados</h4>
                        <ul>
                            <li><strong>Disabled:</strong> Fondo gris claro</li>
                            <li><strong>Invalid:</strong> Borde rojo + focus rojo</li>
                            <li><strong>Valid:</strong> Borde verde + focus verde</li>
                            <li><strong>Required:</strong> Asterisco rojo automático</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h3>Select y File Inputs</h3>
        <div class="component-grid">
            <div class="form-demo">
                <h4>Select Mejorado</h4>
                <div class="mb-3">
                    <label class="form-label">País</label>
                    <select class="form-select">
                        <option>Selecciona un país</option>
                        <option>España</option>
                        <option>Francia</option>
                        <option>Italia</option>
                    </select>
                </div>
            </div>

            <div class="form-demo">
                <h4>File Input</h4>
                <div class="mb-3">
                    <label class="form-label">Subir archivo</label>
                    <input type="file" class="form-control">
                </div>
            </div>
        </div>
    </div>

    <!-- Advanced Components Tab -->
    <div class="tab-pane fade" id="advanced" role="tabpanel">
        <h2>Componentes Avanzados</h2>

        <h3>Floating Labels</h3>
        <div class="form-demo form-preview">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingName" placeholder="Nombre">
                <label for="floatingName">Nombre completo</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingEmail" placeholder="Email">
                <label for="floatingEmail">Dirección de email</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control" id="floatingTextarea" placeholder="Mensaje" style="height: 100px"></textarea>
                <label for="floatingTextarea">Mensaje</label>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="form-floating"&gt;
  &lt;input type="email" class="form-control" id="floatingEmail" placeholder="Email"&gt;
  &lt;label for="floatingEmail"&gt;Dirección de email&lt;/label&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Input Groups</h3>
        <div class="form-demo form-preview">
            <div class="mb-3">
                <label class="form-label">Website</label>
                <div class="input-group">
                    <span class="input-group-text">https://</span>
                    <input type="text" class="form-control" placeholder="tuweb.com">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <div class="input-group">
                    <input type="number" class="form-control" placeholder="0.00">
                    <span class="input-group-text">€</span>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Buscar usuario</label>
                <div class="input-group">
                    <span class="input-group-text input-group-icon">
                        <i class="icon">👤</i>
                    </span>
                    <input type="text" class="form-control" placeholder="@usuario">
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="input-group"&gt;
  &lt;span class="input-group-text input-group-icon"&gt;
    &lt;i class="icon"&gt;👤&lt;/i&gt;
  &lt;/span&gt;
  &lt;input type="text" class="form-control" placeholder="@usuario"&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Inputs con Iconos</h3>
        <div class="form-demo form-preview">
            <div class="form-icon mb-3">
                <input type="email" class="form-control" placeholder="Email">
                <i class="form-icon-left">📧</i>
            </div>
            <div class="form-icon mb-3">
                <input type="password" class="form-control icon-right" placeholder="Contraseña">
                <i class="form-icon-right">👁️</i>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="form-icon"&gt;
  &lt;input type="email" class="form-control" placeholder="Email"&gt;
  &lt;i class="form-icon-left"&gt;📧&lt;/i&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Checkboxes y Radios</h3>
        <div class="component-grid">
            <div class="form-demo">
                <h4>Checkboxes</h4>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check1" checked>
                    <label class="form-check-label" for="check1">
                        Opción seleccionada
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check2">
                    <label class="form-check-label" for="check2">
                        Opción no seleccionada
                    </label>
                </div>
            </div>

            <div class="form-demo">
                <h4>Radio Buttons</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" id="radio1" checked>
                    <label class="form-check-label" for="radio1">
                        Primera opción
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" id="radio2">
                    <label class="form-check-label" for="radio2">
                        Segunda opción
                    </label>
                </div>
            </div>
        </div>

        <h3>Switches Modernos</h3>
        <div class="form-demo form-preview">
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="switch1" checked>
                <label class="form-check-label" for="switch1">Notificaciones activadas</label>
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="switch2">
                <label class="form-check-label" for="switch2">Modo oscuro</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="switch3" disabled>
                <label class="form-check-label" for="switch3">Opción deshabilitada</label>
            </div>
        </div>

        <h3>Range Sliders</h3>
        <div class="form-demo form-preview">
            <div class="mb-4">
                <label class="form-label">Volumen (Normal)</label>
                <input type="range" class="form-range" min="0" max="100" value="50">
            </div>
            <div class="mb-4">
                <label class="form-label">Brillo (Small)</label>
                <input type="range" class="form-range form-range-sm" min="0" max="100" value="30">
            </div>
            <div class="mb-4">
                <label class="form-label">Calidad (Large)</label>
                <input type="range" class="form-range form-range-lg" min="0" max="100" value="80">
            </div>
            <div class="mb-4">
                <label class="form-label">Success Style</label>
                <input type="range" class="form-range form-range-success" min="0" max="100" value="70">
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;input type="range" class="form-range form-range-lg" min="0" max="100" value="80"&gt;
&lt;input type="range" class="form-range form-range-success" min="0" max="100" value="70"&gt;</code></pre>
        </div>
    </div>

    <!-- Validation Tab -->
    <div class="tab-pane fade" id="validation" role="tabpanel">
        <h2>Estados de Validación</h2>

        <div class="component-grid">
            <div class="form-demo">
                <h4>Estado Válido</h4>
                <div class="mb-3">
                    <label class="form-label">Email válido</label>
                    <input type="email" class="form-control is-valid" value="usuario@email.com">
                    <div class="valid-feedback">
                        Email válido y disponible
                    </div>
                </div>
            </div>

            <div class="form-demo">
                <h4>Estado Inválido</h4>
                <div class="mb-3">
                    <label class="form-label">Email inválido</label>
                    <input type="email" class="form-control is-invalid" value="email-incorrecto">
                    <div class="invalid-feedback">
                        Por favor, introduce un email válido
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;input type="email" class="form-control is-valid" value="usuario@email.com"&gt;
&lt;div class="valid-feedback"&gt;Email válido y disponible&lt;/div&gt;

&lt;input type="email" class="form-control is-invalid" value="email-incorrecto"&gt;
&lt;div class="invalid-feedback"&gt;Por favor, introduce un email válido&lt;/div&gt;</code></pre>
        </div>

        <h3>Validación Completa</h3>
        <div class="form-demo form-preview">
            <form>
                <div class="form-group">
                    <label class="form-label required">Nombre</label>
                    <input type="text" class="form-control is-valid" value="Juan Pérez">
                    <div class="valid-feedback">Perfecto</div>
                    <div class="form-text">Tu nombre completo</div>
                </div>

                <div class="form-group">
                    <label class="form-label required">Email</label>
                    <input type="email" class="form-control is-invalid" value="email">
                    <div class="invalid-feedback">Formato de email incorrecto</div>
                </div>

                <div class="form-group">
                    <label class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" placeholder="Opcional">
                    <div class="form-text">Solo números españoles</div>
                </div>

                <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" id="terms">
                    <label class="form-check-label" for="terms">
                        Acepto los términos y condiciones
                    </label>
                    <div class="invalid-feedback">
                        Debes aceptar los términos
                    </div>
                </div>
            </form>
        </div>

        <h3>Características de Validación</h3>
        <div class="alert alert-info">
            <h4>🎯 Mejoras Incluidas</h4>
            <ul class="mb-0">
                <li><strong>Iconos automáticos:</strong> ⚠ para errores, ✓ para válido</li>
                <li><strong>Colores consistentes:</strong> Rojo para errores, verde para válido</li>
                <li><strong>Focus mejorado:</strong> Box-shadow coloreado según estado</li>
                <li><strong>Required automático:</strong> Asterisco rojo con clase <code>.required</code></li>
                <li><strong>Form-text:</strong> Texto de ayuda estilizado</li>
            </ul>
        </div>
    </div>

    <!-- Layouts Tab -->
    <div class="tab-pane fade" id="layouts" role="tabpanel">
        <h2>Layouts de Formularios</h2>

        <h3>Formulario en Card</h3>
        <div class="form-demo">
            <div class="form-card" style="max-width: 400px; margin: 0 auto;">
                <div class="form-header">
                    <h3 class="form-title">Crear Cuenta</h3>
                    <p class="form-subtitle">Únete a nuestra comunidad</p>
                </div>

                <form>
                    <div class="form-group">
                        <label class="form-label required">Email</label>
                        <input type="email" class="form-control" placeholder="tu@email.com">
                    </div>

                    <div class="form-group">
                        <label class="form-label required">Contraseña</label>
                        <input type="password" class="form-control" placeholder="Mínimo 8 caracteres">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Crear cuenta</button>
                </form>

                <div class="form-footer">
                    <div class="form-links">
                        ¿Ya tienes cuenta? <a href="#">Inicia sesión</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="form-card"&gt;
  &lt;div class="form-header"&gt;
    &lt;h3 class="form-title"&gt;Crear Cuenta&lt;/h3&gt;
    &lt;p class="form-subtitle"&gt;Únete a nuestra comunidad&lt;/p&gt;
  &lt;/div&gt;

  &lt;form&gt;
    &lt;!-- campos --&gt;
  &lt;/form&gt;

  &lt;div class="form-footer"&gt;
    &lt;div class="form-links"&gt;
      ¿Ya tienes cuenta? &lt;a href="#"&gt;Inicia sesión&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Formulario Inline</h3>
        <div class="form-demo">
            <form class="form-inline">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="tu@email.com">
                </div>
                <div class="form-group">
                    <label class="form-label">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>

        <h3>Formulario con Steps</h3>
        <div class="form-demo">
            <div class="form-steps">
                <div class="steps-nav">
                    <div class="step completed">
                        <div class="step-number">1</div>
                        <span>Datos básicos</span>
                    </div>
                    <div class="step active">
                        <div class="step-number">2</div>
                        <span>Información adicional</span>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <span>Confirmación</span>
                    </div>
                </div>

                <div class="step-content active">
                    <h4>Step 2: Información adicional</h4>
                    <div class="form-group">
                        <label class="form-label">Teléfono</label>
                        <input type="tel" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Dirección</label>
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="step-actions">
                    <button type="button" class="btn btn-outline-secondary">Anterior</button>
                    <button type="button" class="btn btn-primary">Siguiente</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Special Tab -->
    <div class="tab-pane fade" id="special" role="tabpanel">
        <h2>Componentes Especiales</h2>

        <h3>Formulario de Búsqueda</h3>
        <div class="form-demo form-preview">
            <div class="form-search">
                <input type="text" class="form-control search-input" placeholder="Buscar productos...">
                <button type="submit" class="search-btn">🔍</button>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="form-search"&gt;
  &lt;input type="text" class="form-control search-input" placeholder="Buscar productos..."&gt;
  &lt;button type="submit" class="search-btn"&gt;🔍&lt;/button&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Tamaños de Formularios</h3>
        <div class="component-grid">
            <div class="form-demo form-sm">
                <h4>Formulario Small</h4>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Pequeño">
                </div>
            </div>

            <div class="form-demo form-lg">
                <h4>Formulario Large</h4>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Grande">
                </div>
            </div>
        </div>

        <h3>Estado de Carga</h3>
        <div class="form-demo">
            <div class="form-card form-loading" style="max-width: 300px; height: 200px; margin: 0 auto;">
                <h4>Formulario procesando...</h4>
                <p>El spinner aparece automáticamente</p>
            </div>
        </div>

        <div class="code-example">
<pre><code class="language-html">&lt;div class="form-card form-loading"&gt;
  &lt;!-- Contenido del formulario --&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Dark Mode</h3>
        <div class="dark-demo">
            <h4>Vista en Modo Oscuro</h4>
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="En modo oscuro" style="background: #374151; border-color: #4b5563; color: #f3f4f6;">
            </div>
            <div class="form-group">
                <select class="form-select" style="background: #374151; border-color: #4b5563; color: #f3f4f6;">
                    <option>Opción 1</option>
                    <option>Opción 2</option>
                </select>
            </div>
        </div>

        <div class="alert alert-info">
            <h4>🌙 Dark Mode Automático</h4>
            <p class="mb-0">Los formularios se adaptan automáticamente al modo oscuro del sistema usando <code>@media (prefers-color-scheme: dark)</code></p>
        </div>
    </div>

    <!-- Examples Tab -->
    <div class="tab-pane fade" id="examples" role="tabpanel">
        <h2>Ejemplos Completos</h2>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Login Form</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-card">
                            <div class="form-header">
                                <h3 class="form-title">Bienvenido</h3>
                                <p class="form-subtitle">Inicia sesión en tu cuenta</p>
                            </div>

                            <form>
                                <div class="form-icon form-group">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                    <i class="form-icon-left">📧</i>
                                </div>

                                <div class="form-icon form-group">
                                    <input type="password" class="form-control icon-right" placeholder="Contraseña" required>
                                    <i class="form-icon-right">👁️</i>
                                </div>

                                <div class="form-check form-group-sm">
                                    <input class="form-check-input" type="checkbox" id="remember">
                                    <label class="form-check-label" for="remember">
                                        Recordarme
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                            </form>

                            <div class="form-footer">
                                <div class="form-links">
                                    <a href="#">¿Olvidaste tu contraseña?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Contact Form</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label required">Nombre</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label required">Email</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Asunto</label>
                                <select class="form-select">
                                    <option>Consulta general</option>
                                    <option>Soporte técnico</option>
                                    <option>Ventas</option>
                                    <option>Colaboración</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label required">Mensaje</label>
                                <textarea class="form-control" rows="4" placeholder="Describe tu consulta..." required></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Prioridad</label>
                                <input type="range" class="form-range form-range-success" min="1" max="5" value="3">
                                <small class="text-muted">1 = Baja, 5 = Urgente</small>
                            </div>

                            <div class="form-check form-group-sm">
                                <input class="form-check-input" type="checkbox" id="newsletter">
                                <label class="form-check-label" for="newsletter">
                                    Suscribirme al newsletter
                                </label>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">📨 Enviar mensaje</button>
                                <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Formulario de Configuración Avanzado</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-steps">
                            <div class="steps-nav">
                                <div class="step completed">
                                    <div class="step-number">1</div>
                                    <span>Perfil</span>
                                </div>
                                <div class="step completed">
                                    <div class="step-number">2</div>
                                    <span>Preferencias</span>
                                </div>
                                <div class="step active">
                                    <div class="step-number">3</div>
                                    <span>Configuración</span>
                                </div>
                            </div>

                            <div class="step-content active">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <h5>🔔 Notificaciones</h5>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="emailNotif" checked>
                                            <label class="form-check-label" for="emailNotif">Notificaciones por email</label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="pushNotif">
                                            <label class="form-check-label" for="pushNotif">Notificaciones push</label>
                                        </div>
                                        <div class="form-check form-switch mb-3">
                                            <input class="form-check-input" type="checkbox" id="smsNotif">
                                            <label class="form-check-label" for="smsNotif">SMS</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h5>🎨 Apariencia</h5>
                                        <div class="form-group">
                                            <label class="form-label">Tema</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="theme" id="themeLight" checked>
                                                <label class="form-check-label" for="themeLight">☀️ Claro</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="theme" id="themeDark">
                                                <label class="form-check-label" for="themeDark">🌙 Oscuro</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="theme" id="themeAuto">
                                                <label class="form-check-label" for="themeAuto">🔄 Automático</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-4 mt-3">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Volumen UI</label>
                                            <input type="range" class="form-range" min="0" max="100" value="75">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Animaciones</label>
                                            <input type="range" class="form-range form-range-success" min="0" max="100" value="90">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Contraste</label>
                                            <input type="range" class="form-range form-range-warning" min="0" max="100" value="50">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt-4">
                                    <label class="form-label">Configuración avanzada</label>
                                    <div class="input-group">
                                        <span class="input-group-text input-group-icon">
                                            <i class="icon">⚙️</i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="JSON config" value='{"debug": false}'>
                                        <button class="btn btn-outline-secondary" type="button">Validar</button>
                                    </div>
                                </div>
                            </div>

                            <div class="step-actions">
                                <button type="button" class="btn btn-outline-secondary">⬅️ Anterior</button>
                                <div class="d-flex gap-2">
                                    <button type="button" class="btn btn-success">💾 Guardar</button>
                                    <button type="button" class="btn btn-primary">➡️ Finalizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Toolbar de Filtros</h4>
                    </div>
                    <div class="card-body">
                        <form class="form-inline">
                            <div class="form-search form-group">
                                <input type="text" class="form-control search-input" placeholder="Buscar productos...">
                                <button type="submit" class="search-btn">🔍</button>
                            </div>

                            <div class="form-group">
                                <select class="form-select">
                                    <option>Todas las categorías</option>
                                    <option>Electrónicos</option>
                                    <option>Ropa</option>
                                    <option>Hogar</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-text">💰</span>
                                    <input type="number" class="form-control" placeholder="Min">
                                    <input type="number" class="form-control" placeholder="Max">
                                </div>
                            </div>

                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="inStock">
                                <label class="form-check-label" for="inStock">En stock</label>
                            </div>

                            <button type="button" class="btn btn-outline-secondary btn-sm">🔄 Reset</button>
                        </form>
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
                        <li><strong>Labels descriptivos:</strong> Usa <code>.required</code> para campos obligatorios</li>
                        <li><strong>Validación en tiempo real:</strong> Combina <code>.is-valid</code> / <code>.is-invalid</code></li>
                        <li><strong>Feedback visual:</strong> Usa iconos y colores consistentes</li>
                        <li><strong>Form-text:</strong> Añade ayuda contextual</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>⚡ Performance</h5>
                    <ul>
                        <li><strong>Lazy validation:</strong> Valida solo después del primer intento</li>
                        <li><strong>Debounced input:</strong> Para búsquedas en tiempo real</li>
                        <li><strong>Loading states:</strong> Usa <code>.form-loading</code> durante procesamiento</li>
                        <li><strong>Progressive enhancement:</strong> Funciona sin JavaScript</li>
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
                        <li><code>$gray-200</code> - Border color</li>
                        <li><code>$border-radius-lg</code> - Border radius</li>
                        <li><code>$primary</code> - Focus color</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <strong>Mixins disponibles:</strong>
                    <ul class="small mb-0">
                        <li><code>@@include center-flex()</code></li>
                        <li><code>@@include mobile-only</code></li>
                        <li><code>$transition-all</code></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <strong>Estados:</strong>
                    <ul class="small mb-0">
                        <li><code>.form-loading</code> - Spinner automático</li>
                        <li><code>.form-sm/.form-lg</code> - Tamaños</li>
                        <li><code>.dark-mode</code> - Auto dark mode</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<x-slot:footerScripts>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-scss.min.js"></script>
<script>
// Demo interactivo para ranges
document.addEventListener('DOMContentLoaded', function() {
    // Actualizar valores de range en tiempo real
    const ranges = document.querySelectorAll('input[type="range"]');
    ranges.forEach(range => {
        range.addEventListener('input', function() {
            // Aquí podrías mostrar el valor actualizado
            console.log('Range value:', this.value);
        });
    });

    // Toggle password visibility
    const passwordToggles = document.querySelectorAll('.form-icon-right');
    passwordToggles.forEach(toggle => {
        if (toggle.textContent === '👁️') {
            toggle.addEventListener('click', function() {
                const input = this.previousElementSibling;
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                this.textContent = type === 'password' ? '👁️' : '🙈';
            });
        }
    });
});
</script>
</x-slot:footerScripts>

</x-layouts.docs>

