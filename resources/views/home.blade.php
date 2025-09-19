<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{asset('favicon.svg')}}" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
    <meta name="apple-mobile-web-app-title" content="Suje" />
    @if(app()->environment('production'))
        <meta name="robots" content="index,follow">
    @else
        <meta name="robots" content="noindex,nofollow">
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="Suje">
    <meta property="og:description" content="Le Centre Francophone de la Langue des Signes s'est donné pour mission de diffuser la langue des signes par des cours, des publications et de la recherche en L.S.">
    <meta name="keywords" content="Suje, Sports, Club, Football, Padel, FutSal">
    <meta property="og:image" content="{{ asset('img/og-cfls-1200x630.png') }}">
    <meta property="og:url" content="https://suje.be">
    <meta property="og:site_name" content="C.F.L.S. asbl">
    <meta property="og:type" content="website">

    <title>{{  config('app.name', 'Laravel') ?? 'Laravel' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            lucide.createIcons();
        });
    </script

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')
</head>
<body
    x-data="{ page: 'home', 'darkMode': false, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b eh': darkMode === false}"
>
<!-- ===== Header Start ===== -->
<x-partials.header :heroes="$heroes"/>
<!-- ===== Header End ===== -->
<main>
    @include('page.sections.hero')
    @include('page.sections.features')
    @include('page.sections.about')
    @include('page.sections.team')
    @include('page.sections.services')
{{--    @include('page.sections.price')--}}
{{--    @include('page.sections.projects')--}}
    @include('page.sections.testimonial')
    @include('page.sections.counter')
    @include('page.sections.clients')
    @include('page.sections.blog')
    @include('page.sections.contact')
{{--    @include('page.sections.cta')--}}
</main>
     <x-partials.footer :heroes="$heroes" :socialnetworks="$socialnetworks" />

    <!-- ====== Back To Top Start ===== -->
    <button
        class="xc wf xf ie ld vg sr gh tr g sa ta _a"
        @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
        :class="{ 'uc' : scrollTop }"
    >
        <svg
            class="uh se qd"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
        >
            <path
                d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"
            />
        </svg>
    </button>
    <!-- ====== Back To Top End ===== -->


@stack('scripts')
 <script src="{{ asset('js/bundle.js') }}"></script>

@livewireScripts

</body>
</html>
