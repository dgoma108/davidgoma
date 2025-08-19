<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')

    <style>

    /* Estilos específicos para documentación */
    .docs-sidebar {
        background: #f8f9fa;
        border-right: 1px solid #dee2e6;
        min-height: calc(100vh - 76px); /* Altura completa menos navbar */
        position: sticky;
        top: 76px; /* Altura del navbar sticky */
    }

    .docs-nav .nav-link {
        color: #495057;
        border-radius: 0.375rem;
        margin-bottom: 0.25rem;
        padding: 0.5rem 1rem;
        display: flex;
        align-items: center;
        transition: all 0.15s ease-in-out;
    }

    .docs-nav .nav-link:hover {
        background-color: #e9ecef;
        color: #212529;
    }

    .docs-nav .nav-link.active {
        background-color: #007bff;
        color: white;
        font-weight: 500;
    }

    .docs-nav .nav-section {
        font-size: 0.875rem;
        font-weight: 600;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        padding: 1rem 1rem 0.5rem;
        margin-top: 1.5rem;
    }

    .docs-nav .nav-section:first-child {
        margin-top: 0;
    }

    .docs-content {
        padding-left: 2rem;
    }

    .docs-header {
        border-bottom: 1px solid #dee2e6;
        padding-bottom: 1rem;
        margin-bottom: 2rem;
    }

    .docs-toc {
        position: sticky;
        top: 100px;
        max-height: calc(100vh - 120px);
        overflow-y: auto;
    }

    .docs-toc .nav-link {
        padding: 0.25rem 0;
        font-size: 0.875rem;
        color: #6c757d;
        border: none;
    }

    .docs-toc .nav-link:hover {
        color: #007bff;
    }

    .docs-toc .nav-link.active {
        color: #007bff;
        font-weight: 500;
    }

    /* Mobile responsive */
    @media (max-width: 991.98px) {
        .docs-sidebar {
            position: relative;
            top: auto;
            min-height: auto;
            border-right: none;
            border-bottom: 1px solid #dee2e6;
        }

        .docs-content {
            padding-left: 0;
            margin-top: 1rem;
        }
    }
    </style>
    
</head>
<body>
<div id="app">
    @include('partials.nav')

    <main class="">
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                @include('partials/sidebar')

                <!-- Main content -->
                <main class="col-lg-9 col-xl-8 docs-content">
                    {{ $slot }}
                </main>

                <!-- Table of Contents (si es necesario) -->
                <div class="col-xl-2 d-none d-xl-block">
                    <div class="docs-toc">
                        <h6 class="fw-semibold text-muted mb-2">En esta página</h6>
                        <nav class="nav flex-column" id="docs-toc-nav">
                            <!-- Se generará dinámicamente -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@include('partials.footer')

{{ $footerScripts ?? '' }}

<script>
// Smooth scrolling para links internos
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
// Auto-generar TOC basado en h2, h3, h4
document.addEventListener('DOMContentLoaded', function() {
    const tocNav = document.getElementById('docs-toc-nav');
    const headings = document.querySelectorAll('.docs-content h2, .docs-content h3, .docs-content h4');

    headings.forEach(function(heading) {
        if (!heading.id) {
            heading.id = heading.textContent.toLowerCase().replace(/\s+/g, '-').replace(/[^\w-]/g, '');
        }

        const link = document.createElement('a');
        link.className = 'nav-link';
        link.href = '#' + heading.id;
        link.textContent = heading.textContent;
        tocNav.appendChild(link);
    });
});

// Service Worker
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function () {
    navigator.serviceWorker.register('/storage/service-worker.js')
        .then(reg => {
        console.log('Service Worker registrado con éxito', reg.scope);
        }).catch(err => {
        console.log('Error al registrar el Service Worker', err);
        });
    });
} else {
    console.warn('🚫 El navegador no soporta Service Workers');
}
</script>
</body>
</html>
