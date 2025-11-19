<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-data="appData()"
      x-init="init()"
      :class="darkMode ? 'dark' : ''">

<head>
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}" sizes="96x96"/>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}" />
    <meta name="apple-mobile-web-app-title" content="Suje" />

    @if(app()->environment('production'))
        <meta name="robots" content="index,follow">
    @else
        <meta name="robots" content="noindex,nofollow">
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Open Graph -->
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}">
    <meta property="og:description" content="ASBL promouvant les activités sportives, culturelles et sociaux dans toute la Belgique">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Lucide icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => lucide.createIcons());
    </script>

    <!-- Flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')
</head>

<body>

@include('partials.header')

<main>
    @yield('content')
</main>

@include('partials.footer')

<!-- Back to Top -->
<button
        class="xc wf xf ie ld vg sr gh tr g sa ta _a"
        @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        @scroll.window="scrollTop = (window.pageYOffset > 50)"
        :class="{ 'uc' : scrollTop }"
>
    <svg class="uh se qd" viewBox="0 0 512 512">
        <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"/>
    </svg>
</button>

@stack('scripts')
@livewireScripts

</body>
</html>
