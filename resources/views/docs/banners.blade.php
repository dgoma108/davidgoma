<x-layouts.docs>

<x-slot:title>Banners - Modern Bootstrap Extension</x-slot:title>

<x-slot:styles>
<style>
/* Estilos específicos solo para la documentación */
.demo-container {
    position: relative;
    min-height: 200px;
    background: linear-gradient(135deg, #f8f9fa, #e9ecef);
    border-radius: 0.5rem;
    overflow: hidden;
}

.dark-bg {
    background: linear-gradient(135deg, #212529, #343a40);
}

.demo-banner-container {
    margin: 1rem 0;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 0.5rem;
    border: 1px dashed #dee2e6;
}

.legal-notice {
    background: linear-gradient(135deg, rgba(13, 110, 253, 0.1), rgba(13, 110, 253, 0.05));
    border: 1px solid rgba(13, 110, 253, 0.2);
    border-radius: 0.5rem;
    padding: 1.5rem;
    margin: 2rem 0;
}

.compliance-check {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #198754;
    font-weight: 500;
    margin-bottom: 0.5rem;
}

.compliance-check::before {
    content: '✓';
    color: #198754;
    font-weight: bold;
}
</style>
</x-slot:styles>

<!-- Header de la página -->
<div class="docs-header">
    <h1 class="display-5">Banners</h1>
    <p class="lead text-muted">Sistema completo de banners modernos con efectos avanzados, incluyendo banners de cookies RGPD compliant y múltiples variantes para diferentes casos de uso.</p>
</div>

<!-- Navigation Tabs -->
<ul class="nav nav-pills mb-4" id="banners-tabs" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="basic-tab" data-bs-toggle="pill" data-bs-target="#basic" type="button" role="tab">Básicos</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="cookies-tab" data-bs-toggle="pill" data-bs-target="#cookies" type="button" role="tab">Cookies RGPD</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="notifications-tab" data-bs-toggle="pill" data-bs-target="#notifications" type="button" role="tab">Notificaciones</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="special-tab" data-bs-toggle="pill" data-bs-target="#special" type="button" role="tab">Especiales</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="positions-tab" data-bs-toggle="pill" data-bs-target="#positions" type="button" role="tab">Posiciones</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="examples-tab" data-bs-toggle="pill" data-bs-target="#examples" type="button" role="tab">Ejemplos</button>
    </li>
</ul>

<div class="tab-content" id="banners-content">

    <!-- Basic Banners Tab -->
    <div class="tab-pane fade show active" id="basic" role="tabpanel">
        <h2>Banners Básicos</h2>
        <p>Banners informativos con diferentes variantes de color y efectos modernos incorporados.</p>

        <h3>Variantes de Color</h3>
        <div class="row g-4">
            <div class="col-12">
                <div class="banner banner-info">
                    <div class="banner-icon">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div class="banner-content">
                        <div class="banner-title">Información importante</div>
                        <div class="banner-text">Este es un mensaje informativo con estilo moderno y efectos de hover.</div>
                    </div>
                    <div class="banner-actions">
                        <button class="btn btn-sm btn-glass">Ver más</button>
                    </div>
                    <button class="banner-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="banner banner-success">
                    <div class="banner-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="banner-content">
                        <div class="banner-title">¡Operación exitosa!</div>
                        <div class="banner-text">Los cambios se han guardado correctamente en el sistema.</div>
                    </div>
                    <div class="banner-actions">
                        <button class="btn btn-sm btn-ghost">Deshacer</button>
                    </div>
                    <button class="banner-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="banner banner-warning">
                    <div class="banner-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <div class="banner-content">
                        <div class="banner-title">Atención requerida</div>
                        <div class="banner-text">Tu suscripción expira en 3 días. Renueva ahora para mantener el servicio.</div>
                    </div>
                    <div class="banner-actions">
                        <button class="btn btn-sm btn-primary">Renovar</button>
                    </div>
                    <button class="banner-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="banner banner-danger">
                    <div class="banner-icon">
                        <i class="fas fa-exclamation-circle"></i>
                    </div>
                    <div class="banner-content">
                        <div class="banner-title">Error crítico</div>
                        <div class="banner-text">No se pudo conectar con el servidor. Inténtalo de nuevo más tarde.</div>
                    </div>
                    <div class="banner-actions">
                        <button class="btn btn-sm btn-ghost-white">Reintentar</button>
                    </div>
                    <button class="banner-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="code-example">
            <h4>Código de ejemplo:</h4>
            <pre><code class="language-html">&lt;div class="banner banner-info"&gt;
  &lt;div class="banner-icon"&gt;
    &lt;i class="fas fa-info-circle"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="banner-content"&gt;
    &lt;div class="banner-title"&gt;Información importante&lt;/div&gt;
    &lt;div class="banner-text"&gt;Mensaje informativo aquí.&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="banner-actions"&gt;
    &lt;button class="btn btn-sm btn-glass"&gt;Ver más&lt;/button&gt;
  &lt;/div&gt;
  &lt;button class="banner-close"&gt;
    &lt;i class="fas fa-times"&gt;&lt;/i&gt;
  &lt;/button&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Tamaños de Banners</h3>
        <div class="row g-3">
            <div class="col-12">
                <div class="banner banner-primary banner-sm">
                    <div class="banner-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="banner-content">
                        <div class="banner-title">Banner pequeño</div>
                        <div class="banner-text">Perfecto para mensajes breves.</div>
                    </div>
                </div>

                <div class="banner banner-secondary">
                    <div class="banner-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="banner-content">
                        <div class="banner-title">Banner estándar</div>
                        <div class="banner-text">Tamaño por defecto ideal para la mayoría de casos.</div>
                    </div>
                </div>

                <div class="banner banner-dark banner-lg">
                    <div class="banner-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="banner-content">
                        <div class="banner-title">Banner grande</div>
                        <div class="banner-text">Para mensajes importantes que necesitan más visibilidad y presencia visual.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cookies RGPD Tab -->
    <div class="tab-pane fade" id="cookies" role="tabpanel">
        <h2>Banners de Cookies RGPD/LOPD</h2>

        <div class="legal-notice">
            <h4>🍪 Cumplimiento Legal</h4>
            <p><strong>Estos banners cumplen con:</strong></p>
            <div class="compliance-check">Reglamento General de Protección de Datos (RGPD/GDPR)</div>
            <div class="compliance-check">Ley Orgánica de Protección de Datos (LOPD)</div>
            <div class="compliance-check">Directiva de Cookies de la UE</div>
            <div class="compliance-check">Ley de Servicios de la Sociedad de la Información (LSSI)</div>
            <p class="mb-0 mt-3"><small><strong>Nota:</strong> Asegúrate de personalizar los textos y enlaces según tu política de privacidad específica.</small></p>
        </div>

        <h3>Banner de Cookies Completo (Inferior)</h3>
        <div class="demo-container">
            <div class="cookie-banner show">
                <div class="cookie-content">
                    <div class="cookie-text">
                        <div class="cookie-title">Uso de Cookies</div>
                        <div class="cookie-description">
                            Utilizamos cookies propias y de terceros para mejorar tu experiencia de navegación, personalizar contenido y anuncios, proporcionar funciones de redes sociales y analizar nuestro tráfico.
                            <a href="/cookies" target="_blank">Más información sobre cookies</a> |
                            <a href="/privacidad" target="_blank">Política de Privacidad</a>
                        </div>
                        <div class="cookie-details">
                            Al hacer clic en "Aceptar todas", consientes el uso de TODAS las cookies. También puedes configurar qué cookies deseas permitir.
                        </div>
                    </div>
                    <div class="cookie-actions">
                        <button class="btn btn-ghost-white btn-sm">Configurar</button>
                        <button class="btn btn-secondary btn-sm">Solo necesarias</button>
                        <button class="btn btn-success">Aceptar todas</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
            <h4>HTML del banner completo:</h4>
            <pre><code class="language-html">&lt;div class="cookie-banner" id="cookieBanner"&gt;
  &lt;div class="cookie-content"&gt;
    &lt;div class="cookie-text"&gt;
      &lt;div class="cookie-title"&gt;Uso de Cookies&lt;/div&gt;
      &lt;div class="cookie-description"&gt;
        Utilizamos cookies propias y de terceros para mejorar tu experiencia...
        &lt;a href="/cookies"&gt;Más información&lt;/a&gt; |
        &lt;a href="/privacidad"&gt;Política de Privacidad&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="cookie-actions"&gt;
      &lt;button class="btn btn-ghost-white btn-sm"&gt;Configurar&lt;/button&gt;
      &lt;button class="btn btn-secondary btn-sm"&gt;Solo necesarias&lt;/button&gt;
      &lt;button class="btn btn-success"&gt;Aceptar todas&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Banner de Cookies Superior (Minimalista)</h3>
        <div class="demo-container">
            <div class="cookie-banner-top show">
                🍪 Este sitio utiliza cookies para mejorar tu experiencia.
                <div class="cookie-actions">
                    <button class="btn btn-ghost-white btn-xs">Configurar</button>
                    <button class="btn btn-primary btn-xs">Aceptar</button>
                </div>
            </div>
        </div>

        <div class="code-example">
            <pre><code class="language-html">&lt;div class="cookie-banner-top" id="cookieBannerTop"&gt;
  🍪 Este sitio utiliza cookies para mejorar tu experiencia.
  &lt;div class="cookie-actions"&gt;
    &lt;button class="btn btn-ghost-white btn-xs"&gt;Configurar&lt;/button&gt;
    &lt;button class="btn btn-primary btn-xs"&gt;Aceptar&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Banner de Cookies Flotante</h3>
        <div class="demo-container" style="position: relative; height: 300px;">
            <div class="cookie-banner-float show">
                <div class="cookie-title">Cookies</div>
                <div class="cookie-text">
                    Usamos cookies para personalizar contenido y anuncios.
                    <a href="/cookies">Leer más</a>
                </div>
                <div class="cookie-actions">
                    <button class="btn btn-ghost btn-xs">Rechazar</button>
                    <button class="btn btn-primary btn-xs">Aceptar</button>
                </div>
            </div>
        </div>

        <div class="code-example">
            <pre><code class="language-html">&lt;div class="cookie-banner-float" id="cookieFloat"&gt;
  &lt;div class="cookie-title"&gt;Cookies&lt;/div&gt;
  &lt;div class="cookie-text"&gt;
    Usamos cookies para personalizar contenido...
    &lt;a href="/cookies"&gt;Leer más&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class="cookie-actions"&gt;
    &lt;button class="btn btn-ghost btn-xs"&gt;Rechazar&lt;/button&gt;
    &lt;button class="btn btn-primary btn-xs"&gt;Aceptar&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>JavaScript para Cookies</h3>
        <div class="code-example">
            <h4>Script de control (ejemplo):</h4>
            <pre><code class="language-javascript">// Control de banner de cookies RGPD compliant
class CookieBanner {
    constructor(bannerId) {
        this.banner = document.getElementById(bannerId);
        this.init();
    }

    init() {
        // Mostrar banner si no hay consentimiento
        if (!this.hasConsent()) {
            this.show();
        }

        this.bindEvents();
    }

    show() {
        this.banner.classList.add('show');
    }

    hide() {
        this.banner.classList.remove('show');
    }

    hasConsent() {
        return localStorage.getItem('cookieConsent') !== null;
    }

    acceptAll() {
        this.setConsent({
            necessary: true,
            analytics: true,
            marketing: true,
            preferences: true
        });
        this.hide();
    }

    acceptNecessary() {
        this.setConsent({
            necessary: true,
            analytics: false,
            marketing: false,
            preferences: false
        });
        this.hide();
    }

    setConsent(preferences) {
        localStorage.setItem('cookieConsent', JSON.stringify({
            preferences: preferences,
            timestamp: new Date().toISOString()
        }));
    }

    bindEvents() {
        // Eventos de botones
        const acceptAllBtn = this.banner.querySelector('[data-action="accept-all"]');
        const acceptNecessaryBtn = this.banner.querySelector('[data-action="necessary"]');
        const configureBtn = this.banner.querySelector('[data-action="configure"]');

        if (acceptAllBtn) {
            acceptAllBtn.addEventListener('click', () => this.acceptAll());
        }

        if (acceptNecessaryBtn) {
            acceptNecessaryBtn.addEventListener('click', () => this.acceptNecessary());
        }

        if (configureBtn) {
            configureBtn.addEventListener('click', () => this.openConfiguration());
        }
    }

    openConfiguration() {
        // Abrir modal de configuración de cookies
        // Implementar según tu sistema de modales
        console.log('Abrir configuración de cookies');
    }
}

// Inicializar al cargar la página
document.addEventListener('DOMContentLoaded', () => {
    new CookieBanner('cookieBanner');
});</code></pre>
        </div>
    </div>

    <!-- Notifications Tab -->
    <div class="tab-pane fade" id="notifications" role="tabpanel">
        <h2>Banners de Notificación</h2>
        <p>Notificaciones flotantes que aparecen temporalmente para informar al usuario.</p>

        <h3>Notificaciones Flotantes</h3>
        <div class="demo-container" style="position: relative; height: 400px;">
            <div class="notification-banner show">
                <div class="banner banner-success banner-sm">
                    <div class="banner-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="banner-content">
                        <div class="banner-title">¡Guardado!</div>
                        <div class="banner-text">Los cambios se guardaron correctamente.</div>
                    </div>
                    <button class="banner-close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="code-example">
            <pre><code class="language-html">&lt;div class="notification-banner" id="notification1"&gt;
  &lt;div class="banner banner-success banner-sm"&gt;
    &lt;div class="banner-icon"&gt;
      &lt;i class="fas fa-check"&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class="banner-content"&gt;
      &lt;div class="banner-title"&gt;¡Guardado!&lt;/div&gt;
      &lt;div class="banner-text"&gt;Los cambios se guardaron correctamente.&lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="banner-close"&gt;
      &lt;i class="fas fa-times"&gt;&lt;/i&gt;
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Notificación con Auto-dismiss</h3>
        <div class="demo-container" style="position: relative; height: 200px;">
            <div class="notification-banner auto-dismiss show">
                <div class="banner banner-info banner-sm">
                    <div class="banner-icon">
                        <i class="fas fa-info-circle"></i>
                    </div>
                    <div class="banner-content">
                        <div class="banner-title">Información</div>
                        <div class="banner-text">Esta notificación se cierra automáticamente en 5 segundos.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
            <pre><code class="language-html">&lt;div class="notification-banner auto-dismiss"&gt;
  &lt;div class="banner banner-info banner-sm"&gt;
    &lt;div class="banner-icon"&gt;
      &lt;i class="fas fa-info-circle"&gt;&lt;/i&gt;
    &lt;/div&gt;
    &lt;div class="banner-content"&gt;
      &lt;div class="banner-title"&gt;Información&lt;/div&gt;
      &lt;div class="banner-text"&gt;Se cierra automáticamente en 5s.&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>JavaScript para Notificaciones</h3>
        <div class="code-example">
            <pre><code class="language-javascript">// Sistema de notificaciones
class NotificationSystem {
    constructor() {
        this.container = this.createContainer();
        this.notifications = [];
    }

    createContainer() {
        const container = document.createElement('div');
        container.className = 'notification-container';
        container.style.cssText = `
            position: fixed;
            top: 2rem;
            right: 2rem;
            z-index: 10000;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        `;
        document.body.appendChild(container);
        return container;
    }

    show(type, title, message, duration = 5000) {
        const notification = this.createNotification(type, title, message);
        this.container.appendChild(notification);

        // Animación de entrada
        setTimeout(() => notification.classList.add('show'), 100);

        // Auto-dismiss
        if (duration > 0) {
            setTimeout(() => this.hide(notification), duration);
        }

        return notification;
    }

    createNotification(type, title, message) {
        const notification = document.createElement('div');
        notification.className = 'notification-banner';

        notification.innerHTML = `
            &lt;div class="banner banner-${type} banner-sm"&gt;
                &lt;div class="banner-icon"&gt;
                    &lt;i class="fas fa-${this.getIcon(type)}"&gt;&lt;/i&gt;
                &lt;/div&gt;
                &lt;div class="banner-content"&gt;
                    &lt;div class="banner-title"&gt;${title}&lt;/div&gt;
                    &lt;div class="banner-text"&gt;${message}&lt;/div&gt;
                &lt;/div&gt;
                &lt;button class="banner-close"&gt;
                    &lt;i class="fas fa-times"&gt;&lt;/i&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        `;

        // Event listener para cerrar
        notification.querySelector('.banner-close').addEventListener('click', () => {
            this.hide(notification);
        });

        return notification;
    }

    hide(notification) {
        notification.classList.add('notification-slide-out');
        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, 400);
    }

    getIcon(type) {
        const icons = {
            success: 'check',
            danger: 'exclamation-circle',
            warning: 'exclamation-triangle',
            info: 'info-circle'
        };
        return icons[type] || 'info-circle';
    }
}

// Instancia global
const notifications = new NotificationSystem();

// Funciones de ayuda
function showSuccess(title, message) {
    notifications.show('success', title, message);
}

function showError(title, message) {
    notifications.show('danger', title, message);
}

function showWarning(title, message) {
    notifications.show('warning', title, message);
}

function showInfo(title, message) {
    notifications.show('info', title, message);
}</code></pre>
        </div>
    </div>

    <!-- Special Banners Tab -->
    <div class="tab-pane fade" id="special" role="tabpanel">
        <h2>Banners Especiales</h2>

        <h3>Banner de Promoción</h3>
        <div class="demo-banner-container">
            <div class="promo-banner">
                <div class="promo-content">
                    <div class="promo-title">🎉 ¡Oferta Especial!</div>
                    <div class="promo-subtitle">50% de descuento en todos los planes Premium</div>
                    <button class="btn btn-ghost-white">Aprovechar Oferta</button>
                </div>
            </div>
        </div>

        <div class="code-example">
            <pre><code class="language-html">&lt;div class="promo-banner"&gt;
  &lt;div class="promo-content"&gt;
    &lt;div class="promo-title"&gt;🎉 ¡Oferta Especial!&lt;/div&gt;
    &lt;div class="promo-subtitle"&gt;50% de descuento en todos los planes Premium&lt;/div&gt;
    &lt;button class="btn btn-ghost-white"&gt;Aprovechar Oferta&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Banner de Mantenimiento</h3>
        <div class="demo-banner-container">
            <div class="maintenance-banner">
                <span class="maintenance-icon">🔧</span>
                <span class="maintenance-text">Mantenimiento programado: Domingo 15 de Octubre, 02:00 - 04:00 GMT</span>
            </div>
        </div>

        <div class="code-example">
            <pre><code class="language-html">&lt;div class="maintenance-banner"&gt;
  &lt;span class="maintenance-icon"&gt;🔧&lt;/span&gt;
  &lt;span class="maintenance-text"&gt;
    Mantenimiento programado: Domingo 15 de Octubre, 02:00 - 04:00 GMT
  &lt;/span&gt;
&lt;/div&gt;</code></pre>
        </div>

        <h3>Banner con Gradiente Animado</h3>
        <div class="demo-banner-container">
            <div class="banner banner-primary" style="background: linear-gradient(-45deg, #007bff, #6610f2, #007bff, #6610f2); background-size: 400% 400%; animation: gradient-shift 3s ease infinite;">
                <div class="banner-icon">
                    <i class="fas fa-sparkles"></i>
                </div>
                <div class="banner-content">
                    <div class="banner-title">Banner Animado</div>
                    <div class="banner-text">Este banner tiene un fondo con gradiente animado para llamar más la atención.</div>
                </div>
                <div class="banner-actions">
                    <button class="btn btn-ghost-white btn-sm">Acción</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Positions Tab -->
    <div class="tab-pane fade" id="positions" role="tabpanel">
        <h2>Posicionamiento de Banners</h2>

        <h3>Clases de Posición</h3>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Posiciones Fijas</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><code>.banner-fixed-top</code> - Fijo en la parte superior</li>
                            <li><code>.banner-fixed-bottom</code> - Fijo en la parte inferior</li>
                            <li><code>.banner-sticky</code> - Sticky en la parte superior</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Estados y Utilidades</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><code>.banner-hidden</code> - Ocultar banner</li>
                            <li><code>.banner-dismissible</code> - Mostrar botón cerrar</li>
                            <li><code>.banner-fade-in</code> - Animación de entrada</li>
                            <li><code>.banner-fade-out</code> - Animación de salida</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="code-example">
            <h4>Ejemplos de uso:</h4>
            <pre><code class="language-html">&lt;!-- Banner fijo superior --&gt;
&lt;div class="banner banner-warning banner-fixed-top banner-dismissible"&gt;
  &lt;div class="banner-content"&gt;
    &lt;div class="banner-text"&gt;Mensaje importante en la parte superior&lt;/div&gt;
  &lt;/div&gt;
  &lt;button class="banner-close"&gt;&lt;i class="fas fa-times"&gt;&lt;/i&gt;&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Banner sticky --&gt;
&lt;div class="banner banner-info banner-sticky"&gt;
  &lt;div class="banner-content"&gt;
    &lt;div class="banner-text"&gt;Este banner se mantiene visible al hacer scroll&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    <!-- Examples Tab -->
    <div class="tab-pane fade" id="examples" role="tabpanel">
        <h2>Ejemplos de Implementación</h2>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Sistema de Alertas</h4>
                    </div>
                    <div class="card-body">
                        <div class="banner banner-success banner-sm mb-3">
                            <div class="banner-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="banner-content">
                                <div class="banner-text">Perfil actualizado correctamente.</div>
                            </div>
                        </div>

                        <div class="banner banner-warning banner-sm mb-3">
                            <div class="banner-icon">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="banner-content">
                                <div class="banner-text">Verifica tu email para activar tu cuenta.</div>
                            </div>
                            <div class="banner-actions">
                                <button class="btn btn-sm btn-primary">Reenviar</button>
                            </div>
                        </div>

                        <div class="banner banner-danger banner-sm">
                            <div class="banner-icon">
                                <i class="fas fa-times-circle"></i>
                            </div>
                            <div class="banner-content">
                                <div class="banner-text">Error al procesar el pago. Inténtalo de nuevo.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Banners de Marketing</h4>
                    </div>
                    <div class="card-body">
                        <div class="banner banner-primary mb-3">
                            <div class="banner-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="banner-content">
                                <div class="banner-title">¡Upgrade a Premium!</div>
                                <div class="banner-text">Desbloquea todas las funciones avanzadas.</div>
                            </div>
                            <div class="banner-actions">
                                <button class="btn btn-ghost-white btn-sm">Ver Planes</button>
                            </div>
                        </div>

                        <div class="promo-banner">
                            <div class="promo-content">
                                <div class="promo-title">🚀 Lanzamiento Especial</div>
                                <div class="promo-subtitle">3 meses gratis en plan anual</div>
                                <button class="btn btn-ghost-white btn-sm">Empezar Ahora</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Implementación de Cookies Completa</h4>
                    </div>
                    <div class="card-body">
                        <div class="code-example">
                            <pre><code class="language-html">&lt;!-- Banner RGPD completo con todas las opciones --&gt;
&lt;div class="cookie-banner" id="cookieBanner"&gt;
  &lt;div class="cookie-content"&gt;
    &lt;div class="cookie-text"&gt;
      &lt;div class="cookie-title"&gt;Configuración de Cookies&lt;/div&gt;
      &lt;div class="cookie-description"&gt;
        Utilizamos cookies propias y de terceros para personalizar el contenido,
        proporcionar funcionalidades de redes sociales y analizar el tráfico web.
        También compartimos información sobre el uso que haga del sitio web con
        nuestros partners de redes sociales, publicidad y análisis web.
        &lt;a href="/politica-cookies" target="_blank"&gt;Política de Cookies&lt;/a&gt; |
        &lt;a href="/politica-privacidad" target="_blank"&gt;Política de Privacidad&lt;/a&gt;
      &lt;/div&gt;
      &lt;div class="cookie-details"&gt;
        Puedes aceptar todas las cookies, rechazar las no necesarias o configurar
        tus preferencias. Las cookies necesarias para el funcionamiento del sitio
        siempre están activas.
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="cookie-actions"&gt;
      &lt;button class="btn btn-ghost-white btn-sm" data-action="configure"&gt;
        ⚙️ Configurar Cookies
      &lt;/button&gt;
      &lt;button class="btn btn-secondary btn-sm" data-action="necessary"&gt;
        Solo Necesarias
      &lt;/button&gt;
      &lt;button class="btn btn-success" data-action="accept-all"&gt;
        ✅ Aceptar Todas
      &lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-success mt-4">
            <h4>💡 Mejores Prácticas</h4>
            <ul class="mb-0">
                <li><strong>Cookies:</strong> Siempre incluye enlaces a políticas de privacidad y cookies</li>
                <li><strong>Accesibilidad:</strong> Usa colores con suficiente contraste y botones de cierre visibles</li>
                <li><strong>Mobile:</strong> Los banners se adaptan automáticamente en dispositivos móviles</li>
                <li><strong>Performance:</strong> Usa <code>transform</code> y <code>opacity</code> para animaciones suaves</li>
                <li><strong>UX:</strong> No abuses de banners múltiples que puedan molestar al usuario</li>
                <li><strong>Legal:</strong> Personaliza los textos según tu jurisdicción específica</li>
            </ul>
        </div>
    </div>
</div>

</x-layouts.docs>
