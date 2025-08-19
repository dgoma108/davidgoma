    <!-- Footer -->
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h5 class="fw-bold mb-3">David Goma</h5>
                    <p class="text-light">
                        Full Stack Developer especializado en PHP y Laravel y creador del Modern Bootstrap Extension.
                    </p>
                    <div class="d-flex gap-3">
                        <!-- Social Links -->
                        <a href="#" class="text-white-50 text-decoration-none">GitHub</a>
                        <a href="#" class="text-white-50 text-decoration-none">LinkedIn</a>
                        <a href="#" class="text-white-50 text-decoration-none">Twitter</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h6 class="fw-semibold mb-3">Proyectos</h6>
                    <ul class="list-unstyled">
                        <li><a href="https://calcunom.es" target="_blank" class="text-white-50 text-decoration-none">Calcunom.es</a></li>
                        <li><a href="https://losdelaroja.es" target="_blank" class="text-white-50 text-decoration-none">Los de la Roja</a></li>
                        <li><a href="{{ route('modern-bootstrap') }}" class="text-white-50 text-decoration-none">Modern Bootstrap Extension</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h6 class="fw-semibold mb-3">Documentación</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('docs.typography') }}" class="text-white-50 text-decoration-none">Typography</a></li>
                        <li><a href="{{ route('docs.components') }}" class="text-white-50 text-decoration-none">Components</a></li>
                        <li><a href="{{ route('docs.utilities') }}" class="text-white-50 text-decoration-none">Utilities</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <h6 class="fw-semibold mb-3">Legal</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal" class="text-white-50 text-decoration-none">Política de Privacidad</a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#cookiesModal" class="text-white-50 text-decoration-none">Política de Cookies</a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#legalModal" class="text-white-50 text-decoration-none">Aviso Legal</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 border-secondary">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <small class="text-white-50">© {{ date('Y') }} David Goma. Todos los derechos reservados.</small>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <small class="text-white-50">
                        Construido con Laravel {{ app()->version() }} y Modern Bootstrap Extension
                    </small>
                </div>
            </div>
        </div>
    </footer>

<!-- Banner de Cookies -->
<div class="cookie-banner" id="cookieBanner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <p class="cookie-text">
                    <i class="fas fa-cookie-bite me-2"></i>
                    Utilizamos cookies para mejorar tu experiencia de navegación. Al continuar navegando, aceptas nuestro uso de cookies.
                </p>
            </div>
            <div class="col-md-4 text-md-end">
                <button class="btn btn-sm cookie-btn-accept" onclick="acceptCookies()">Aceptar</button>
                <button class="btn btn-sm cookie-btn-config" data-bs-toggle="modal" data-bs-target="#cookiesModal">Configurar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modales Legales -->
<!-- Modal Política de Privacidad -->
<div class="modal fade" id="privacyModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content legal-modal">
            <div class="modal-header">
                <h5 class="modal-title">Política de Privacidad</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <h6>Responsable del tratamiento</h6>
                <p>Los de la Roja - [Tu nombre/empresa]<br>
                Email: contacto@losdelaroja.es</p>

                <h6>Datos que recopilamos</h6>
                <p>Recopilamos únicamente los datos que nos proporcionas voluntariamente a través de nuestro formulario de contacto: nombre, email y mensaje.</p>

                <h6>Finalidad del tratamiento</h6>
                <p>Utilizamos tus datos para responder a tus consultas y mantenerte informado sobre nuestras aventuras si así lo solicitas.</p>

                <h6>Legitimación</h6>
                <p>Base legal: Consentimiento del interesado para el tratamiento de datos personales.</p>

                <h6>Tus derechos</h6>
                <p>Tienes derecho a acceder, rectificar, suprimir, limitar el tratamiento, portabilidad y oposición. Contacta con nosotros para ejercer estos derechos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Política de Cookies -->
<div class="modal fade" id="cookiesModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content legal-modal">
            <div class="modal-header">
                <h5 class="modal-title">Política de Cookies</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <h6>¿Qué son las cookies?</h6>
                <p>Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo cuando visitas nuestro sitio web.</p>

                <h6>Cookies que utilizamos</h6>
                <div class="cookie-type">
                    <strong>Cookies técnicas (necesarias)</strong>
                    <p>Permiten el funcionamiento básico del sitio web.</p>
                    <label class="form-check">
                        <input type="checkbox" checked disabled> Siempre activas
                    </label>
                </div>

                <div class="cookie-type">
                    <strong>Cookies de análisis</strong>
                    <p>Nos ayudan a entender cómo interactúas con nuestro sitio (Google Analytics).</p>
                    <label class="form-check">
                        <input type="checkbox" id="analyticsCookies"> Permitir
                    </label>
                </div>

                <div class="cookie-type">
                    <strong>Cookies de redes sociales</strong>
                    <p>Para mostrar contenido de YouTube, Instagram y otras redes sociales.</p>
                    <label class="form-check">
                        <input type="checkbox" id="socialCookies"> Permitir
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="saveCookiePreferences()">Guardar Preferencias</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Aviso Legal -->
<div class="modal fade" id="legalModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content legal-modal">
            <div class="modal-header">
                <h5 class="modal-title">Aviso Legal</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <h6>Datos del titular</h6>
                <p>
                    Denominación social: Los de la Roja<br>
                    [Tu nombre completo]<br>
                    [Tu dirección]<br>
                    Email: contacto@losdelaroja.es
                </p>

                <h6>Objeto</h6>
                <p>Este sitio web tiene como finalidad compartir nuestras experiencias de viaje en autocaravana y crear una comunidad de viajeros.</p>

                <h6>Uso del sitio web</h6>
                <p>El acceso y uso de este sitio web se rige por la legislación española vigente y se somete a los tribunales de España.</p>

                <h6>Propiedad intelectual</h6>
                <p>Todos los contenidos (textos, imágenes, videos) son propiedad de Los de la Roja y están protegidos por las leyes de propiedad intelectual.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Mostrar banner de cookies al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        // Comprobar si ya se aceptaron las cookies
        if (!localStorage.getItem('cookiesAccepted')) {
            setTimeout(() => {
                document.getElementById('cookieBanner').classList.add('show');
            }, 2000);
        }
    });

    // Función para aceptar cookies
    function acceptCookies() {
        localStorage.setItem('cookiesAccepted', 'true');
        document.getElementById('cookieBanner').classList.remove('show');

        // Aquí puedes activar Google Analytics, etc.
        console.log('Cookies aceptadas');
    }

    // Función para guardar preferencias de cookies
    function saveCookiePreferences() {
        const analytics = document.getElementById('analyticsCookies').checked;
        const social = document.getElementById('socialCookies').checked;

        localStorage.setItem('cookiesAccepted', 'true');
        localStorage.setItem('analyticsCookies', analytics);
        localStorage.setItem('socialCookies', social);

        document.getElementById('cookieBanner').classList.remove('show');

        // Cerrar modal
        const modal = bootstrap.Modal.getInstance(document.getElementById('cookiesModal'));
        modal.hide();

        console.log('Preferencias guardadas:', { analytics, social });
    }
</script>
