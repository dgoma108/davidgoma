<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body>
    <div id="app">
        @include('partials.nav')

        <main class="">
            {{ $slot }}
        </main>
    </div>

    @include('partials.footer')

    {{ $footerScripts ?? '' }}

    <script>
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
