<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Bootstrap Extension - Cookie Banner</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-tomorrow.min.css" rel="stylesheet">
    <style>
        :root {
            --mbe-primary: #6366f1;
            --mbe-secondary: #8b5cf6;
            --mbe-success: #10b981;
            --mbe-warning: #f59e0b;
            --mbe-danger: #ef4444;
            --mbe-dark: #1f2937;
            --mbe-light: #f8fafc;
        }

        body {
            background: linear-gradient(135deg, var(--mbe-light) 0%, #e2e8f0 100%);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .hero-section {
            background: linear-gradient(135deg, var(--mbe-primary) 0%, var(--mbe-secondary) 100%);
            color: white;
            padding: 4rem 0;
            margin-bottom: 2rem;
        }

        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .btn-mbe-primary {
            background: linear-gradient(135deg, var(--mbe-primary) 0%, var(--mbe-secondary) 100%);
            border: none;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-mbe-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.4);
        }

        .code-block {
            background: #1e293b;
            border-radius: 12px;
            padding: 1.5rem;
            margin: 1rem 0;
            position: relative;
            overflow: hidden;
        }

        .code-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #334155;
        }

        .copy-btn {
            background: var(--mbe-primary);
            border: none;
            border-radius: 6px;
            color: white;
            padding: 0.25rem 0.75rem;
            font-size: 0.875rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .copy-btn:hover {
            background: var(--mbe-secondary);
        }

        /* Cookie Banner Styles */
        .cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            padding: 1.5rem 0;
            z-index: 1050;
            transform: translateY(100%);
            transition: transform 0.3s ease;
            box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .cookie-banner.show {
            transform: translateY(0);
        }

        .cookie-banner .btn {
            border-radius: 8px;
            font-weight: 600;
            padding: 0.5rem 1.25rem;
            margin: 0 0.25rem;
        }

        .cookie-preferences-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
            margin: 1rem 0;
        }

        @media (min-width: 768px) {
            .cookie-preferences-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .cookie-category {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.25rem;
            transition: all 0.2s ease;
        }

        .cookie-category:hover {
            border-color: var(--mbe-primary);
        }

        .demo-section {
            background: #f1f5f9;
            border-radius: 12px;
            padding: 2rem;
            margin: 2rem 0;
            border: 2px dashed #cbd5e1;
        }

        .legal-warning {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border: 1px solid #f59e0b;
            border-radius: 12px;
            padding: 1.5rem;
            margin: 2rem 0;
        }

        .table-of-contents {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            position: sticky;
            top: 2rem;
        }

        .toc-item {
            display: block;
            color: #64748b;
            text-decoration: none;
            padding: 0.5rem 0;
            border-bottom: 1px solid #e2e8f0;
            transition: color 0.2s ease;
        }

        .toc-item:hover {
            color: var(--mbe-primary);
        }

        .toc-item:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-cube text-primary me-2"></i>
                Modern Bootstrap Extension
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#overview">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#implementation">Implementación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#demo">Demo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <i class="fas fa-shield-alt fa-4x mb-4 opacity-75"></i>
            <h1 class="display-4 fw-bold mb-3">Cookie Banner</h1>
            <p class="lead mb-4">Banner de cookies conforme a la legislación española (RGPD y LSSI-CE)</p>
            <div class="d-flex justify-content-center gap-3">
                <span class="badge bg-light text-dark px-3 py-2">RGPD Compliant</span>
                <span class="badge bg-light text-dark px-3 py-2">LSSI-CE</span>
                <span class="badge bg-light text-dark px-3 py-2">Bootstrap 5</span>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <!-- Table of Contents -->
            <div class="col-lg-3">
                <div class="table-of-contents">
                    <h6 class="fw-bold mb-3">Contenidos</h6>
                    <a href="#overview" class="toc-item">Visión General</a>
                    <a href="#legal-requirements" class="toc-item">Requisitos Legales</a>
                    <a href="#implementation" class="toc-item">Implementación</a>
                    <a href="#customization" class="toc-item">Personalización</a>
                    <a href="#demo" class="toc-item">Demo en Vivo</a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-9">
                <!-- Overview Section -->
                <section id="overview" class="mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">
                                <i class="fas fa-info-circle text-primary me-2"></i>
                                Visión General
                            </h2>
                            <p class="card-text">
                                El <strong>Modern Bootstrap Extension Cookie Banner</strong> es una solución completa
                                para gestionar el consentimiento de cookies de acuerdo con la legislación española
                                y europea. Incluye todas las funcionalidades requeridas por el RGPD y la LSSI-CE.
                            </p>

                            <h5 class="mt-4 mb-3">Características principales:</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success me-2"></i>Cumple con RGPD</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Cumple con LSSI-CE</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Configuración granular</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Diseño responsive</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-success me-2"></i>Fácil integración</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Totalmente personalizable</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Sin dependencias externas</li>
                                        <li><i class="fas fa-check text-success me-2"></i>Almacenamiento local</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Legal Requirements -->
                <section id="legal-requirements" class="mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">
                                <i class="fas fa-balance-scale text-warning me-2"></i>
                                Requisitos Legales
                            </h2>

                            <div class="legal-warning">
                                <h6 class="fw-bold">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    Importante - Advertencia Legal
                                </h6>
                                <p class="mb-0">
                                    Esta implementación proporciona una base técnica para el cumplimiento de la
                                    legislación de cookies, pero siempre debes consultar con un asesor legal
                                    para asegurar el cumplimiento total en tu caso específico.
                                </p>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <h5>RGPD (Reglamento General de Protección de Datos)</h5>
                                    <ul>
                                        <li>Consentimiento libre, específico e informado</li>
                                        <li>Posibilidad de retirar el consentimiento</li>
                                        <li>Información clara sobre el tratamiento</li>
                                        <li>Registro del consentimiento</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5>LSSI-CE (Ley de Servicios de la Sociedad de la Información)</h5>
                                    <ul>
                                        <li>Información sobre el uso de cookies</li>
                                        <li>Consentimiento previo del usuario</li>
                                        <li>Excepciones para cookies técnicas</li>
                                        <li>Derecho a rechazar cookies no esenciales</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Implementation Section -->
                <section id="implementation" class="mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">
                                <i class="fas fa-code text-primary me-2"></i>
                                Implementación
                            </h2>

                            <h4 class="mt-4 mb-3">1. HTML Estructura</h4>
                            <p>Añade el siguiente HTML al final de tu página, antes del cierre del tag <code>&lt;/body&gt;</code>:</p>

                            <div class="code-block">
                                <div class="code-header">
                                    <span class="text-muted">HTML</span>
                                    <button class="copy-btn" onclick="copyCode('html-structure')">Copiar</button>
                                </div>
                                <pre><code id="html-structure" class="language-html">&lt;!-- Cookie Banner --&gt;
&lt;div id="cookieBanner" class="cookie-banner"&gt;
    &lt;div class="container"&gt;
        &lt;div class="row align-items-center"&gt;
            &lt;div class="col-lg-8"&gt;
                &lt;h6 class="fw-bold mb-2"&gt;
                    &lt;i class="fas fa-cookie-bite text-primary me-2"&gt;&lt;/i&gt;
                    Configuración de Cookies
                &lt;/h6&gt;
                &lt;p class="mb-0 small"&gt;
                    Utilizamos cookies propias y de terceros para mejorar nuestros servicios y
                    mostrarle publicidad relacionada con sus preferencias. Si continúa navegando,
                    consideramos que acepta su uso. Puede obtener más información en nuestra
                    &lt;a href="#" class="text-primary"&gt;Política de Cookies&lt;/a&gt;.
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

                            <h4 class="mt-5 mb-3">2. Modal de Configuración</h4>

                            <div class="code-block">
                                <div class="code-header">
                                    <span class="text-muted">HTML Modal</span>
                                    <button class="copy-btn" onclick="copyCode('html-modal')">Copiar</button>
                                </div>
                                <pre><code id="html-modal" class="language-html">&lt;!-- Cookie Settings Modal --&gt;
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
                &lt;p&gt;
                    Puedes configurar tus preferencias de cookies. Las cookies técnicas son
                    necesarias para el funcionamiento del sitio web y no pueden desactivarse.
                &lt;/p&gt;

                &lt;div class="cookie-preferences-grid"&gt;
                    &lt;div class="cookie-category"&gt;
                        &lt;div class="d-flex justify-content-between align-items-start"&gt;
                            &lt;div&gt;
                                &lt;h6 class="fw-bold"&gt;Cookies Técnicas&lt;/h6&gt;
                                &lt;p class="small text-muted mb-0"&gt;
                                    Necesarias para el funcionamiento básico del sitio web.
                                &lt;/p&gt;
                            &lt;/div&gt;
                            &lt;div class="form-check form-switch"&gt;
                                &lt;input class="form-check-input" type="checkbox" id="technicalCookies" checked disabled&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;

                    &lt;div class="cookie-category"&gt;
                        &lt;div class="d-flex justify-content-between align-items-start"&gt;
                            &lt;div&gt;
                                &lt;h6 class="fw-bold"&gt;Cookies de Análisis&lt;/h6&gt;
                                &lt;p class="small text-muted mb-0"&gt;
                                    Nos ayudan a mejorar el sitio web analizando cómo lo utilizas.
                                &lt;/p&gt;
                            &lt;/div&gt;
                            &lt;div class="form-check form-switch"&gt;
                                &lt;input class="form-check-input" type="checkbox" id="analyticsCookies"&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;

                    &lt;div class="cookie-category"&gt;
                        &lt;div class="d-flex justify-content-between align-items-start"&gt;
                            &lt;div&gt;
                                &lt;h6 class="fw-bold"&gt;Cookies de Publicidad&lt;/h6&gt;
                                &lt;p class="small text-muted mb-0"&gt;
                                    Para mostrarte anuncios relevantes según tus intereses.
                                &lt;/p&gt;
                            &lt;/div&gt;
                            &lt;div class="form-check form-switch"&gt;
                                &lt;input class="form-check-input" type="checkbox" id="advertisingCookies"&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;

                    &lt;div class="cookie-category"&gt;
                        &lt;div class="d-flex justify-content-between align-items-start"&gt;
                            &lt;div&gt;
                                &lt;h6 class="fw-bold"&gt;Cookies de Personalización&lt;/h6&gt;
                                &lt;p class="small text-muted mb-0"&gt;
                                    Para recordar tus preferencias y personalizar tu experiencia.
                                &lt;/p&gt;
                            &lt;/div&gt;
                            &lt;div class="form-check form-switch"&gt;
                                &lt;input class="form-check-input" type="checkbox" id="personalizationCookies"&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
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

                            <h4 class="mt-5 mb-3">3. JavaScript Funcionalidad</h4>

                            <div class="code-block">
                                <div class="code-header">
                                    <span class="text-muted">JavaScript</span>
                                    <button class="copy-btn" onclick="copyCode('js-functionality')">Copiar</button>
                                </div>
                                <pre><code id="js-functionality" class="language-javascript">// Modern Bootstrap Extension - Cookie Banner
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
            this.showBanner();
        }

        // Cargar configuración guardada en el modal
        this.loadSavedSettings();
    }

    hasConsent() {
        return localStorage.getItem(this.COOKIE_NAME) !== null;
    }

    showBanner() {
        setTimeout(() => {
            this.banner.classList.add('show');
        }, 1000); // Mostrar después de 1 segundo
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
        // Aquí implementarías la lógica para activar/desactivar cookies
        console.log('Aplicando configuración de cookies:', settings);

        // Ejemplo de implementación:
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
        // Ejemplo: Cargar Google Analytics
        console.log('✅ Cookies de análisis activadas');
        // gtag('config', 'GA_TRACKING_ID');
    }

    disableAnalytics() {
        console.log('❌ Cookies de análisis desactivadas');
        // Lógica para desactivar analytics
    }

    enableAdvertising() {
        console.log('✅ Cookies de publicidad activadas');
        // Lógica para activar publicidad
    }

    disableAdvertising() {
        console.log('❌ Cookies de publicidad desactivadas');
        // Lógica para desactivar publicidad
    }

    enablePersonalization() {
        console.log('✅ Cookies de personalización activadas');
        // Lógica para activar personalización
    }

    disablePersonalization() {
        console.log('❌ Cookies de personalización desactivadas');
        // Lógica para desactivar personalización
    }

    resetConsent() {
        localStorage.removeItem(this.COOKIE_NAME);
        location.reload();
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
        technical: true, // Siempre true
        analytics: document.getElementById('analyticsCookies').checked,
        advertising: document.getElementById('advertisingCookies').checked,
        personalization: document.getElementById('personalizationCookies').checked
    };

    cookieBannerInstance.saveConsent(settings);
    cookieBannerInstance.modal.hide();
}

function resetCookieConsent() {
    cookieBannerInstance.resetConsent();
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    window.cookieBannerInstance = new CookieBanner();
});

// Función para mostrar el modal de configuración desde cualquier lugar
function showCookieSettings() {
    cookieBannerInstance.modal.show();
}</code></pre>
                            </div>

                            <h4 class="mt-5 mb-3">4. CSS Adicional (Opcional)</h4>

                            <div class="code-block">
                                <div class="code-header">
                                    <span class="text-muted">CSS</span>
                                    <button class="copy-btn" onclick="copyCode('css-styles')">Copiar</button>
                                </div>
                                <pre><code id="css-styles" class="language-css">/* Estilos personalizados para el cookie banner */
.cookie-banner {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(255, 255, 255, 0.98);
    backdrop-filter: blur(10px);
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    padding: 1.5rem 0;
    z-index: 1050;
    transform: translateY(100%);
    transition: transform 0.3s ease;
    box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.1);
}

.cookie-banner.show {
    transform: translateY(0);
}

.cookie-preferences-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1rem;
    margin: 1rem 0;
}

@media (min-width: 768px) {
    .cookie-preferences-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

.cookie-category {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 1.25rem;
    transition: all 0.2s ease;
}

.cookie-category:hover {
    border-color: #6366f1;
}

/* Animaciones suaves */
.form-check-input:checked {
    background-color: #6366f1;
    border-color: #6366f1;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .cookie-banner .btn {
        font-size: 0.875rem;
        margin: 0.125rem;
    }
}</code></pre>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Customization Section -->
                <section id="customization" class="mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">
                                <i class="fas fa-paint-brush text-success me-2"></i>
                                Personalización
                            </h2>

                            <h4 class="mt-4 mb-3">Configuración Avanzada</h4>
                            <p>Puedes personalizar el comportamiento del banner modificando estas opciones:</p>

                            <div class="code-block">
                                <div class="code-header">
                                    <span class="text-muted">JavaScript Configuración</span>
                                    <button class="copy-btn" onclick="copyCode('js-config')">Copiar</button>
                                </div>
                                <pre><code id="js-config" class="language-javascript">// Configuración personalizada
const cookieConfig = {
    // Duración del consentimiento en días
    duration: 365,

    // Tiempo antes de mostrar el banner (ms)
    showDelay: 1000,

    // Textos personalizables
    texts: {
        title: 'Configuración de Cookies',
        description: 'Utilizamos cookies propias y de terceros...',
        acceptAll: 'Aceptar todo',
        rejectAll: 'Rechazar',
        configure: 'Configurar'
    },

    // URLs importantes
    urls: {
        cookiePolicy: '/politica-cookies',
        privacyPolicy: '/politica-privacidad'
    },

    // Categorías de cookies
    categories: {
        technical: {
            name: 'Cookies Técnicas',
            description: 'Necesarias para el funcionamiento básico...',
            required: true
        },
        analytics: {
            name: 'Cookies de Análisis',
            description: 'Nos ayudan a mejorar el sitio web...',
            required: false
        }
        // ... más categorías
    }
};</code></pre>
                            </div>

                            <h4 class="mt-5 mb-3">Integración con Google Analytics</h4>

                            <div class="code-block">
                                <div class="code-header">
                                    <span class="text-muted">Google Analytics</span>
                                    <button class="copy-btn" onclick="copyCode('ga-integration')">Copiar</button>
                                </div>
                                <pre><code id="ga-integration" class="language-javascript">// Integración con Google Analytics 4
enableAnalytics() {
    // Cargar Google Analytics solo si se acepta
    window.gtag = window.gtag || function(){dataLayer.push(arguments);};
    window.dataLayer = window.dataLayer || [];

    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX', {
        anonymize_ip: true,
        cookie_flags: 'SameSite=None;Secure'
    });

    // Cargar el script de GA
    const script = document.createElement('script');
    script.async = true;
    script.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX';
    document.head.appendChild(script);
}

disableAnalytics() {
    // Desactivar Google Analytics
    window['ga-disable-G-XXXXXXXXXX'] = true;

    // Eliminar cookies de GA
    this.deleteCookie('_ga');
    this.deleteCookie('_ga_XXXXXXXXXX');
    this.deleteCookie('_gid');
}

deleteCookie(name) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=.' + window.location.hostname + ';';
}</code></pre>
                            </div>

                            <h4 class="mt-5 mb-3">Estilos Personalizados</h4>
                            <p>Variables CSS para fácil personalización:</p>

                            <div class="code-block">
                                <div class="code-header">
                                    <span class="text-muted">CSS Variables</span>
                                    <button class="copy-btn" onclick="copyCode('css-variables')">Copiar</button>
                                </div>
                                <pre><code id="css-variables" class="language-css">:root {
    --cookie-banner-bg: rgba(255, 255, 255, 0.98);
    --cookie-banner-border: rgba(0, 0, 0, 0.1);
    --cookie-banner-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.1);
    --cookie-primary-color: #6366f1;
    --cookie-secondary-color: #64748b;
    --cookie-success-color: #10b981;
    --cookie-border-radius: 12px;
    --cookie-transition: all 0.3s ease;
}

/* Tema oscuro */
[data-bs-theme="dark"] {
    --cookie-banner-bg: rgba(31, 41, 55, 0.98);
    --cookie-banner-border: rgba(255, 255, 255, 0.1);
}</code></pre>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Demo Section -->
                <section id="demo" class="mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">
                                <i class="fas fa-play-circle text-info me-2"></i>
                                Demo en Vivo
                            </h2>

                            <div class="demo-section">
                                <div class="text-center">
                                    <i class="fas fa-cookie-bite fa-3x text-primary mb-3"></i>
                                    <h5>¡Prueba el Cookie Banner!</h5>
                                    <p class="text-muted mb-4">
                                        Haz clic en los botones para probar la funcionalidad
                                    </p>

                                    <div class="d-flex flex-wrap justify-content-center gap-2">
                                        <button class="btn btn-outline-primary" onclick="showDemoBanner()">
                                            <i class="fas fa-eye me-2"></i>Mostrar Banner
                                        </button>
                                        <button class="btn btn-outline-secondary" onclick="showCookieSettings()">
                                            <i class="fas fa-cog me-2"></i>Abrir Configuración
                                        </button>
                                        <button class="btn btn-outline-warning" onclick="resetCookieConsent()">
                                            <i class="fas fa-refresh me-2"></i>Reset Consentimiento
                                        </button>
                                    </div>

                                    <div class="mt-4 p-3 bg-light rounded">
                                        <small class="text-muted">
                                            <strong>Estado actual:</strong>
                                            <span id="consentStatus">Verificando...</span>
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <h4 class="mt-5 mb-3">Instalación Rápida</h4>
                            <div class="alert alert-info">
                                <h6 class="alert-heading">
                                    <i class="fas fa-download me-2"></i>Paso a paso
                                </h6>
                                <ol class="mb-0">
                                    <li>Copia el HTML del banner y modal a tu página</li>
                                    <li>Incluye el JavaScript antes del cierre de <code>&lt;/body&gt;</code></li>
                                    <li>Personaliza los textos y enlaces según tu necesidad</li>
                                    <li>Configura la integración con tus herramientas de análisis</li>
                                    <li>¡Prueba que todo funcione correctamente!</li>
                                </ol>
                            </div>

                            <h4 class="mt-4 mb-3">Soporte y Documentación</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card border-primary">
                                        <div class="card-body text-center">
                                            <i class="fas fa-book fa-2x text-primary mb-2"></i>
                                            <h6>Documentación</h6>
                                            <small class="text-muted">Guía completa de implementación</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-success">
                                        <div class="card-body text-center">
                                            <i class="fas fa-code fa-2x text-success mb-2"></i>
                                            <h6>Ejemplos</h6>
                                            <small class="text-muted">Casos de uso y configuraciones</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card border-warning">
                                        <div class="card-body text-center">
                                            <i class="fas fa-life-ring fa-2x text-warning mb-2"></i>
                                            <h6>Soporte</h6>
                                            <small class="text-muted">Ayuda técnica y consultas</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-2">&copy; 2025 Modern Bootstrap Extension - Cookie Banner</p>
            <p class="small text-muted mb-0">
                Desarrollado con ❤️ para cumplir con la legislación española
            </p>
        </div>
    </footer>

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

                    <div class="cookie-preferences-grid">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-core.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>

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
            }

            disableAnalytics() {
                console.log('❌ Cookies de análisis desactivadas');
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
                        statusEl.innerHTML = '<span class="text-success">Consentimiento dado</span> (' + new Date(data.timestamp).toLocaleDateString() + ')';
                    } else {
                        statusEl.innerHTML = '<span class="text-warning">Sin consentimiento</span>';
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

        function resetCookieConsent() {
            cookieBannerInstance.resetConsent();
        }

        function showCookieSettings() {
            cookieBannerInstance.modal.show();
        }

        function showDemoBanner() {
            cookieBannerInstance.showBanner();
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
            });
        }

        // Inicializar cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', function() {
            window.cookieBannerInstance = new CookieBanner();
        });
    </script>
</body>
</html>
