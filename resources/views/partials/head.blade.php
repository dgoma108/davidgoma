<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- SEO Meta Tags -->
<title>{{ $title ?? 'David Goma - Full Stack Developer'}}</title>
<meta name="description"
    content="{{ $description ?? 'Web personal de David Gomà. Programador PHP Laravel'}}" />
<meta name="keywords" content="{{ $keywords ?? 'developer, php, laravel, bootstrap'}}">
<meta name="author" content="David Gomà" />
<meta name="language" content="es">
<meta name="geo.region" content="ES">

<!-- Robots -->
<meta name="robots" content="noindex, nofollow"/>

<!-- Canonical URL -->
<link rel="canonical" href="{{ request()->url() }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://davidgoma.es">
<meta property="og:title" content="David Gomà">
<meta property="og:description" content="Web personal de David Gomà. Programador PHP Laravel.">
<meta property="og:site_name" content="davidgoma.es">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://davidgoma.es">
<meta property="twitter:title" content="David Gomà">
<meta property="twitter:description" content="Web personal de David Gomà. Programador PHP Laravel.">

{{-- Etiquetas meta --}}
{{ $meta ?? ''}}

<!-- Fonts -->
{{ $fonts ?? '' }}
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Nunito:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Scripts -->
@vite(['resources/css/app.scss', 'resources/js/app.js'])

<!-- Google Analytics -->
{{-- <x-google-analytics/> --}}

{{-- Estilos --}}
{{ $styles ?? '' }}
