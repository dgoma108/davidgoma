<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Banner - Modern Bootstrap Extension</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Copiando el estilo de tu documentación */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .docs-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 3rem 0 2rem;
            margin-bottom: 2rem;
        }

        .docs-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .docs-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }

        .section-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border: 1px solid #e9ecef;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .section-subtitle {
            font-size: 1.3rem;
            font-weight: 600;
            color: #4a5568;
            margin: 2rem 0 1rem;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin: 1.5rem 0;
        }

        .feature-item {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }

        .feature-item h6 {
            color: #2d3748;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .feature-item p {
            color: #718096;
            font-size: 0.9rem;
            margin: 0;
        }

        .code-example {
            background: #2d3748;
            color: #e2e8f0;
            padding: 1.5rem;
            border-radius: 8px;
            overflow-x: auto;
            margin: 1rem 0;
            position: relative;
        }

        .code-example pre {
            margin: 0;
            font-family: 'Fira Code', 'Monaco', 'Consolas', monospace;
            font-size: 0.875rem;
        }

        .copy-btn {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: #667eea;
            border: none;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            font-size: 0.8rem;
            cursor: pointer;
            transition: all 0.2s;
        }

        .copy-btn:hover {
            background: #5a67d8;
        }

        .demo-container {
            background: #f7fafc;
            border: 2px dashed #cbd5e1;
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
            margin: 1.5rem 0;
        }

        .badge-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin: 1rem 0;
        }

        .badge-custom {
            background: #667eea;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .legal-warning {
            background: #fef5e7;
            border: 1px solid #f6ad55;
            border-radius: 8px;
            padding: 1.5rem;
            margin: 1.5rem 0;
        }

        .legal-warning h6 {
            color: #c05621;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .legal-warning p {
            color: #744210;
            margin: 0;
        }

        /* Cookie Banner Styles */
        .cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            border-top: 1px solid #e2e8f0;
            padding: 1.5rem 0;
            z-index: 1050;
            transform: translateY(100%);
            transition: transform 0.3s ease;
            box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .cookie-banner.show {
            transform: translateY(0);
        }

        .cookie-category {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 1.25rem;
            margin-bottom: 1rem;
        }

        .cookie-category:hover {
            border-color: #667eea;
        }

        @media (prefers-color-scheme: dark) {
            body {
                background: #1a202c;
                color: #e2e8f0;
            }

            .section-card {
                background: #2d3748;
                border-color: #4a5568;
            }

            .cookie-banner {
                background: rgba(45, 55, 72, 0.98);
                border-top-color: #4a5568;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="docs-header">
        <div class="container">
            <h1 class="docs-title">Cookie Banner</h1>
            <p class="docs-subtitle">
                Sistema completo de gestión de cookies conforme a la legislación española
                (RGPD y LSSI-CE) con diseño moderno y funcionalidad avanzada.
            </p>
            <div class="badge-list">
                <span class="badge-custom">RGPD Compliant</span>
                <span class="badge-custom">LSSI-CE</span>
                <span class="badge-custom">Bootstrap 5</span>
                <span class="badge-custom">Responsive</span>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Banner Básico -->
        <div class="section-card">
            <h2 class="section-title">
                <i class="fas fa-cookie-bite text-primary"></i>
                Banner Básico
            </h2>
            <p>El banner aparece en la parte inferior con opciones para aceptar, rechazar o configurar cookies.</p>

            <div class="demo-container">
                <p><strong>Demo en Vivo</strong></p>
                <button class="btn btn-primary" onclick="showDemoBanner()">
                    <i class="fas fa-eye me-2"></i>Mostrar Banner
                </button>
                <button class="btn btn-outline-secondary ms-2" onclick="resetDemo()">
                    <i class="fas fa-refresh me-2"></i>Reset Demo
                </button>
            </div>

            <div class="code-example">
                <button class="copy-btn" onclick="copyCode('basic-banner')">Copiar</button>
                <pre><code id="basic-banner">&lt;!-- Cookie Banner --&gt;
&lt;div id="cookieBanner" class="cookie-banner"&gt;
    &lt;div class="container"&gt;
        &lt;div class="row align-items-center"&gt;
            &lt;div class="col-lg-8"&gt;
                &lt;h6 class="fw-bold mb-2"&gt;
                    &lt;i class="fas fa-cookie-bite text-primary me-2"&gt;&lt;/i&gt;
                    Configuración de Cookies
                &lt;/h6&gt;
                &lt;p class="mb-0 small"&gt;
                    Utilizamos cookies propias y de terceros para mejorar nuestros servicios.
                    Puedes obtener más información en nuestra
                    &lt;a href="/politica-cookies" class="text-primary"&gt;Política de Cookies&lt;/a&gt;.
                &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="col-lg-4 text-end mt-3 mt-lg-0"&gt;
                &lt;button class="btn btn-outline-secondary btn-sm me-2" onclick="openCookieSettings()"&gt;
                    Configurar
                &lt;/button&gt;
                &lt;button class="btn btn-secondary btn-sm me-2" onclick="rejectAllCookies()"&gt;
                    Rechazar
                &lt;/button&gt;
                &lt;button class="btn btn-primary btn-sm" onclick="acceptAllCookies()"&gt;
                    Aceptar todo
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
        </div>

        <!-- Modal de Configuración -->
        <div class="section-card">
            <h2 class="section-title">
                <i class="fas fa-cog text-success"></i>
                Modal de Configuración
            </h2>
            <p>Permite al usuario elegir qué tipos de cookies acepta, cumpliendo con el consentimiento granular del RGPD.</p>

            <div class="demo-container">
                <button class="btn btn-success" onclick="openCookieSettings()">
                    <i class="fas fa-cog me-2"></i>Abrir Configuración
                </button>
            </div>

            <div class="feature-grid">
                <div class="feature-item">
                    <h6>Cookies Técnicas</h6>
                    <p>Necesarias para el funcionamiento, siempre activas</p>
                </div>
                <div class="feature-item">
                    <h6>Cookies de Análisis</h6>
                    <p>Google Analytics, métricas de uso</p>
                </div>
                <div class="feature-item">
                    <h6>Cookies de Publicidad</h6>
                    <p>Anuncios personalizados y remarketing</p>
                </div>
                <div class="feature-item">
                    <h6>Cookies de Personalización</h6>
                    <p>Preferencias del usuario, idioma</p>
                </div>
            </div>

            <div class="code-example">
                <button class="copy-btn" onclick="copyCode('modal-config')">Copiar</button>
                <pre><code id="modal-config">&lt;!-- Cookie Settings Modal --&gt;
&lt;div class="modal fade" id="cookieSettingsModal" tabindex="-1"&gt;
    &lt;div class="modal-dialog modal-lg"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h5 class="modal-title"&gt;
                    &lt;i class="fas fa-cog text-primary me-2"&gt;&lt;/i&gt;
                    Configuración de Cookies
                &lt;/h5&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                &lt;div class="cookie-category"&gt;
                    &lt;div class="d-flex justify-content-between align-items-start"&gt;
                        &lt;div&gt;
                            &lt;h6 class="fw-bold"&gt;Cookies Técnicas&lt;/h6&gt;
                            &lt;p class="small text-muted mb-0"&gt;
                                Necesarias para el funcionamiento básico del sitio web.
                            &lt;/p&gt;
                        &lt;/div&gt;
                        &lt;div class="form-check form-switch"&gt;
                            &lt;input class="form-check-input" type="checkbox"
                                   id="technicalCookies" checked disabled&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;!-- Más categorías... --&gt;
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"&gt;
                    Cancelar
                &lt;/button&gt;
                &lt;button type="button" class="btn btn-primary" onclick="saveCustomCookieSettings()"&gt;
                    Guardar Configuración
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
        </div>

        <!-- Funcionalidad JavaScript -->
        <div class="section-card">
            <h2 class="section-title">
                <i class="fas fa-code text-warning"></i>
                Funcionalidad JavaScript
            </h2>
            <p>Clase completa para gestionar el consentimiento, almacenar preferencias y aplicar configuraciones.</p>

            <div class="section-subtitle">Características Principales</div>
            <div class="feature-grid">
                <div class="feature-item">
                    <h6>🎯 Consentimiento</h6>
                    <p>Guarda las preferencias en localStorage por 365 días</p>
                </div>
                <div class="feature-item">
                    <h6>🔄 Gestión de Estado</h6>
                    <p>Verifica y aplica configuraciones automáticamente</p>
                </div>
                <div class="feature-item">
                    <h6>📊 Integración Analytics</h6>
                    <p>Activa/desactiva Google Analytics según consentimiento</p>
                </div>
                <div class="feature-item">
                    <h6>🎨 Interfaz Fluida</h6>
                    <p>Animaciones suaves y feedback visual</p>
                </div>
            </div>

            <div class="code-example">
                <button class="copy-btn" onclick="copyCode('js-class')">Copiar</button>
                <pre><code id="js-class">// Clase principal CookieBanner
class CookieBanner {
    constructor() {
        this.COOKIE_NAME = 'mbe_cookie_consent';
        this.COOKIE_DURATION = 365; // días
        this.banner = document.getElementById('cookieBanner');
        this.modal = new bootstrap.Modal(document.getElementById('cookieSettingsModal'));
        this.init();
    }

    init() {
        if (!this.hasConsent()) {
            this.showBanner();
        }
        this.loadSavedSettings();
    }

    saveConsent(settings) {
        const consentData = {
            timestamp: Date.now(),
            settings: settings,
            version: '1.0'
        };

        localStorage.setItem(this.COOKIE_NAME, JSON.stringify(consentData));
        this.hideBanner();
        this.applyCookieSettings(settings);
    }

    applyCookieSettings(settings) {
        if (settings.analytics) {
            this.enableAnalytics();
        } else {
            this.disableAnalytics();
        }
        // Más configuraciones...
    }
}</code></pre>
            </div>
        </div>

        <!-- Requisitos Legales -->
        <div class="section-card">
            <h2 class="section-title">
                <i class="fas fa-balance-scale text-danger"></i>
                Requisitos Legales
            </h2>

            <div class="legal-warning">
                <h6><i class="fas fa-exclamation-triangle me-2"></i>Importante - Advertencia Legal</h6>
                <p>
                    Esta implementación proporciona una base técnica, pero siempre debes consultar
                    con un asesor legal para asegurar el cumplimiento total en tu caso específico.
                </p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="feature-item">
                        <h6>📊 RGPD (Reglamento General de Protección de Datos)</h6>
                        <ul class="small mt-2 mb-0">
                            <li>Consentimiento libre, específico e informado</li>
                            <li>Posibilidad de retirar el consentimiento</li>
                            <li>Información clara sobre el tratamiento</li>
                            <li>Registro del consentimiento</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-item">
                        <h6>📝 LSSI-CE (Ley de Servicios de la Sociedad de la Información)</h6>
                        <ul class="small mt-2 mb-0">
                            <li>Información sobre el uso de cookies</li>
                            <li>Consentimiento previo del usuario</li>
                            <li>Excepciones para cookies técnicas</li>
                            <li>Derecho a rechazar cookies no esenciales</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Páginas Legales Obligatorias -->
        <div class="section-card">
            <h2 class="section-title">
                <i class="fas fa-file-alt text-info"></i>
                Páginas Legales Obligatorias
            </h2>
            <p>Para cumplir completamente con la ley española, necesitas estas páginas adicionales:</p>

            <div class="feature-grid">
                <div class="feature-item">
                    <h6>📋 Aviso Legal</h6>
                    <p>Obligatorio por LSSI-CE. Identificación del responsable, datos de contacto, actividad.</p>
                </div>
                <div class="feature-item">
                    <h6>🔒 Política de Privacidad</h6>
                    <p>Obligatorio por RGPD. Qué datos recoges, cómo los usas, derechos del usuario.</p>
                </div>
                <div class="feature-item">
                    <h6>🍪 Política de Cookies</h6>
                    <p>Obligatorio por LSSI-CE. Tipos de cookies, finalidades, cómo gestionarlas.</p>
                </div>
            </div>

            <div class="demo-container">
                <p><strong>Templates incluidos</strong></p>
                <button class="btn btn-outline-info me-2" onclick="showLegalPage('aviso-legal')">
                    Ver Aviso Legal
                </button>
                <button class="btn btn-outline-info me-2" onclick="showLegalPage('politica-privacidad')">
                    Ver Política de Privacidad
                </button>
                <button class="btn btn-outline-info" onclick="showLegalPage('politica-cookies')">
                    Ver Política de Cookies
                </button>
            </div>
        </div>

        <!-- Integración con Google Analytics -->
        <div class="section-card">
            <h2 class="section-title">
                <i class="fas fa-chart-line text-success"></i>
                Integración con Google Analytics
            </h2>

            <div class="code-example">
                <button class="copy-btn" onclick="copyCode('ga-integration')">Copiar</button>
                <pre><code id="ga-integration">enableAnalytics() {
    // Solo cargar GA si el usuario acepta cookies de análisis
    window.gtag = window.gtag || function(){dataLayer.push(arguments);};
    window.dataLayer = window.dataLayer || [];

    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX', {
        anonymize_ip: true,
        cookie_flags: 'SameSite=None;Secure'
    });

    // Cargar el script de GA4
    const script = document.createElement('script');
    script.async = true;
    script.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX';
    document.head.appendChild(script);
}

disableAnalytics() {
    // Desactivar GA y eliminar cookies
    window['ga-disable-G-XXXXXXXXXX'] = true;
    this.deleteCookie('_ga');
    this.deleteCookie('_ga_XXXXXXXXXX');
    this.deleteCookie('_gid');
}</code></pre>
            </div>
        </div>

        <!-- 💡 Mejores Prácticas -->
        <div class="section-card">
            <h2 class="section-title">
                <i class="fas fa-lightbulb text-warning"></i>
                💡 Mejores Prácticas
            </h2>

            <div class="section-subtitle">🎯 UX/UI</div>
            <ul>
                <li><strong>Texto claro</strong>: Usa lenguaje comprensible, evita jerga técnica</li>
                <li><strong>Consentimiento granular</strong>: Permite elegir tipos específicos de cookies</li>
                <li><strong>Fácil acceso</strong>: Enlace a configuración siempre visible en footer</li>
                <li><strong>Feedback visual</strong>: Confirma acciones con notificaciones</li>
            </ul>

            <div class="section-subtitle">⚡ Performance</div>
            <ul>
                <li><strong>Carga condicional</strong>: Solo carga scripts si se acepta la categoría</li>
                <li><strong>Lazy loading</strong>: Muestra el banner después de 1 segundo</li>
                <li><strong>Cache de preferencias</strong>: Almacena durante 365 días</li>
                <li><strong>Cleanup automático</strong>: Elimina cookies rechazadas</li>
            </ul>

            <div class="section-subtitle">🔧 Personalización Avanzada</div>
            <div class="code-example">
                <button class="copy-btn" onclick="copyCode('customization')">Copiar</button>
                <pre><code id="customization">// Variables CSS personalizables
:root {
    --cookie-banner-bg: rgba(255, 255, 255, 0.98);
    --cookie-primary-color: #667eea;
    --cookie-border-radius: 12px;
    --cookie-transition: all 0.3s ease;
}

// Configuración personalizada
const cookieConfig = {
    duration: 365,
    showDelay: 1000,
    texts: {
        title: 'Configuración de Cookies',
        acceptAll: 'Aceptar todo',
        rejectAll: 'Rechazar'
    },
    urls: {
        cookiePolicy: '/politica-cookies',
        privacyPolicy: '/politica-privacidad'
    }
};</code></pre>
            </div>
        </div>

        <!-- Instalación Completa -->
        <div class="section-card">
            <h2 class="section-title">
                <i class="fas fa-download text-primary"></i>
                Instalación Completa
            </h2>

            <div class="alert alert-info">
                <h6 class="alert-heading">
                    <i class="fas fa-info-circle me-2"></i>Paso a paso
                </h6>
                <ol class="mb-0">
                    <li><strong>HTML</strong>: Copia el banner y modal al final de tu página</li>
                    <li><strong>JavaScript</strong>: Incluye la clase CookieBanner antes de &lt;/body&gt;</li>
                    <li><strong>CSS</strong>: Añade los estilos personalizados (opcional)</li>
                    <li><strong>Páginas legales</strong>: Crea Aviso Legal, Política de Privacidad y Cookies</li>
                    <li><strong>Enlaces</strong>: Actualiza URLs a tus páginas legales</li>
                    <li><strong>Analytics</strong>: Configura tu ID de Google Analytics</li>
                    <li><strong>Pruebas</strong>: Verifica funcionamiento en diferentes navegadores</li>
                </ol>
            </div>

            <div class="demo-container">
                <p><strong>Estado actual del consentimiento:</strong></p>
                <span id="consentStatus" class="badge bg-secondary">Verificando...</span>
            </div>
        </div>
    </div>

    <!-- Cookie Banner (Demo) -->
    <div id="cookieBanner" class="cookie-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h6 class="fw-bold mb-2">
                        <i class="fas fa-cookie-bite text-primary me-2"></i>
                        Configuración de Cookies
                    </h6>
                    <p class="mb-0 small">
                        Utilizamos cookies propias y de terceros para mejorar nuestros servicios y
                        mostrarle publicidad relacionada con sus preferencias. Si continúa navegando,
                        consideramos que acepta su uso. Puede obtener más información en nuestra
                        <a href="#" class="text-primary">Política de Cookies</a>.
                    </p>
                </div>
                <div class="col-lg-4 text-end mt-3 mt-lg-0">
                    <button class="btn btn-outline-secondary btn-sm me-2" onclick="openCookieSettings()">
                        Configurar
                    </button>
                    <button class="btn btn-secondary btn-sm me-2" onclick="rejectAllCookies()">
                        Rechazar
                    </button>
                    <button class="btn btn-primary btn-sm" onclick="acceptAllCookies()">
                        Aceptar todo
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Cookie Settings Modal -->
    <div class="modal fade" id="cookieSettingsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-cog text-primary me-2"></i>
                        Configuración de Cookies
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Puedes configurar tus preferencias de cookies. Las cookies técnicas son
                        necesarias para el funcionamiento del sitio web y no pueden desactivarse.
                    </p>

                    <div class="cookie-category">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="fw-bold">Cookies Técnicas</h6>
                                <p class="small text-muted mb-0">
                                    Necesarias para el funcionamiento básico del sitio web.
                                </p>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="technicalCookies" checked disabled>
                            </div>
                        </div>
                    </div>

                    <div class="cookie-category">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="fw-bold">Cookies de Análisis</h6>
                                <p class="small text-muted mb-0">
                                    Nos ayudan a mejorar el sitio web analizando cómo lo utilizas.
                                </p>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="analyticsCookies">
                            </div>
                        </div>
                    </div>

                    <div class="cookie-category">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="fw-bold">Cookies de Publicidad</h6>
                                <p class="small text-muted mb-0">
                                    Para mostrarte anuncios relevantes según tus intereses.
                                </p>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="advertisingCookies">
                            </div>
                        </div>
                    </div>

                    <div class="cookie-category">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="fw-bold">Cookies de Personalización</h6>
                                <p class="small text-muted mb-0">
                                    Para recordar tus preferencias y personalizar tu experiencia.
                                </p>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="personalizationCookies">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Cancelar
                    </button>
                    <button type="button" class="btn btn-primary" onclick="saveCustomCookieSettings()">
                        Guardar Configuración
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        // Modern Bootstrap Extension - Cookie Banner
        class CookieBanner {
            constructor() {
                this.COOKIE_NAME = 'mbe_cookie_consent';
                this.COOKIE_DURATION = 365; // días
                this.banner = document.getElementById('cookieBanner');
                this.modal = new bootstrap.Modal(document.getElementById('cookieSettingsModal'));

                this.init();
            }

            init() {
                // Verificar si ya existe consentimiento
                if (!this.hasConsent()) {
                    // No mostrar automáticamente en la demo
                    // this.showBanner();
                }

                // Cargar configuración guardada en el modal
                this.loadSavedSettings();
                this.updateConsentStatus();
            }

            hasConsent() {
                return localStorage.getItem(this.COOKIE_NAME) !== null;
            }

            showBanner() {
                setTimeout(() => {
                    this.banner.classList.add('show');
                }, 100);
            }

            hideBanner() {
                this.banner.classList.remove('show');
            }

            saveConsent(settings) {
                const consentData = {
                    timestamp: Date.now(),
                    settings: settings,
                    version: '1.0'
                };

                localStorage.setItem(this.COOKIE_NAME, JSON.stringify(consentData));
                this.hideBanner();
                this.applyCookieSettings(settings);
                this.updateConsentStatus();
            }

            loadSavedSettings() {
                const saved = localStorage.getItem(this.COOKIE_NAME);
                if (saved) {
                    const data = JSON.parse(saved);
                    const settings = data.settings;

                    // Aplicar configuración a los switches del modal
                    document.getElementById('analyticsCookies').checked = settings.analytics || false;
                    document.getElementById('advertisingCookies').checked = settings.advertising || false;
                    document.getElementById('personalizationCookies').checked = settings.personalization || false;
                }
            }

            applyCookieSettings(settings) {
                console.log('Aplicando configuración de cookies:', settings);

                if (settings.analytics) {
                    this.enableAnalytics();
                } else {
                    this.disableAnalytics();
                }

                if (settings.advertising) {
                    this.enableAdvertising();
                } else {
                    this.disableAdvertising();
                }

                if (settings.personalization) {
                    this.enablePersonalization();
                } else {
                    this.disablePersonalization();
                }
            }

            enableAnalytics() {
                console.log('✅ Cookies de análisis activadas');
                // Aquí integrarías Google Analytics
                // gtag('config', 'G-XXXXXXXXXX');
            }

            disableAnalytics() {
                console.log('❌ Cookies de análisis desactivadas');
                // Aquí desactivarías Google Analytics
                // window['ga-disable-G-XXXXXXXXXX'] = true;
            }

            enableAdvertising() {
                console.log('✅ Cookies de publicidad activadas');
            }

            disableAdvertising() {
                console.log('❌ Cookies de publicidad desactivadas');
            }

            enablePersonalization() {
                console.log('✅ Cookies de personalización activadas');
            }

            disablePersonalization() {
                console.log('❌ Cookies de personalización desactivadas');
            }

            resetConsent() {
                localStorage.removeItem(this.COOKIE_NAME);
                this.updateConsentStatus();
                console.log('🔄 Consentimiento restablecido');
            }

            updateConsentStatus() {
                const statusEl = document.getElementById('consentStatus');
                if (statusEl) {
                    if (this.hasConsent()) {
                        const data = JSON.parse(localStorage.getItem(this.COOKIE_NAME));
                        const date = new Date(data.timestamp).toLocaleDateString();
                        statusEl.className = 'badge bg-success';
                        statusEl.textContent = `Consentimiento dado (${date})`;
                    } else {
                        statusEl.className = 'badge bg-warning';
                        statusEl.textContent = 'Sin consentimiento';
                    }
                }
            }
        }

        // Funciones globales para los botones
        function acceptAllCookies() {
            const settings = {
                technical: true,
                analytics: true,
                advertising: true,
                personalization: true
            };

            cookieBannerInstance.saveConsent(settings);
        }

        function rejectAllCookies() {
            const settings = {
                technical: true,
                analytics: false,
                advertising: false,
                personalization: false
            };

            cookieBannerInstance.saveConsent(settings);
        }

        function openCookieSettings() {
            cookieBannerInstance.modal.show();
        }

        function saveCustomCookieSettings() {
            const settings = {
                technical: true,
                analytics: document.getElementById('analyticsCookies').checked,
                advertising: document.getElementById('advertisingCookies').checked,
                personalization: document.getElementById('personalizationCookies').checked
            };

            cookieBannerInstance.saveConsent(settings);
            cookieBannerInstance.modal.hide();
        }

        function resetDemo() {
            cookieBannerInstance.resetConsent();
            cookieBannerInstance.hideBanner();
        }

        function showDemoBanner() {
            cookieBannerInstance.showBanner();
        }

        function showLegalPage(page) {
            const urls = {
                'aviso-legal': 'https://davidgoma.es/legal/aviso-legal',
                'politica-privacidad': 'https://davidgoma.es/legal/politica-privacidad',
                'politica-cookies': 'https://davidgoma.es/legal/politica-cookies'
            };

            if (urls[page]) {
                window.open(urls[page], '_blank');
            } else {
                alert('Próximamente: Template de ' + page.replace('-', ' '));
            }
        }

        // Función para copiar código
        function copyCode(elementId) {
            const element = document.getElementById(elementId);
            const text = element.textContent;

            navigator.clipboard.writeText(text).then(() => {
                const btn = event.target;
                const originalText = btn.textContent;
                btn.textContent = '¡Copiado!';
                btn.style.background = '#10b981';

                setTimeout(() => {
                    btn.textContent = originalText;
                    btn.style.background = '';
                }, 2000);
            }).catch(() => {
                // Fallback para navegadores sin soporte
                const textarea = document.createElement('textarea');
                textarea.value = text;
                document.body.appendChild(textarea);
                textarea.select();
                document.execCommand('copy');
                document.body.removeChild(textarea);

                const btn = event.target;
                const originalText = btn.textContent;
                btn.textContent = '¡Copiado!';
                setTimeout(() => {
                    btn.textContent = originalText;
                }, 2000);
            });
        }

        // Inicializar cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', function() {
            window.cookieBannerInstance = new CookieBanner();
        });
    </script>
</body>
</html>
