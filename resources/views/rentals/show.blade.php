<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Suje</title>

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
<!-- ===== Header Start ===== -->
<x-partials.header :heroes="$heroes"/>
<!-- ===== Header End ===== -->
<body
        x-data="{ page: 'home', 'darkMode': false, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
        x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{'b eh': darkMode === false}"
>
<section class="flex flex-col items-center justify-center min-h-screen  p-6">

    <!-- Título de la commande -->
    <h1 class="fk vj pr kk wm on/5 gq/2 bb _b  text-center">
        #Commande {{ $rental->id }}
    </h1>

    <!-- Card -->
    <div class="max-w-sm w-full bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mt-2">

        <!-- Imagen centrada -->
        <div class="flex justify-center items-center h-64 bg-gray-100 dark:bg-gray-700 rounded-t-lg">
            <img
                    class="object-contain max-h-full"
                    src="{{ asset($rental->product->image_path) }}"
                    alt="{{ $rental->product->name }}"
            />
        </div>

        <!-- Contenido -->
        <div class="p-5 text-center">
            <!-- Nombre del producto -->
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $rental->product->name }}
            </h5>

            <!-- Fechas -->
            <p class="mb-3 font-medium text-gray-700 dark:text-gray-300">
                Du <span class="font-semibold">{{ \Carbon\Carbon::parse($rental->date_debut)->format('d/m/Y') }}</span>
                au <span class="font-semibold">{{ \Carbon\Carbon::parse($rental->date_fin)->format('d/m/Y') }}</span>
            </p>

            <!-- Opcional: cantidad y precio -->
            @if(!empty($rental->quantity))
                <p class="text-gray-600 dark:text-gray-400">
                    Quantité : <span class="font-semibold">{{ $rental->quantity }}</span>
                </p>
            @endif

            <p class="text-gray-600 dark:text-gray-400">
                Prix total : <span class="font-semibold">{{ number_format($rental->prix_total, 2) }} €</span>
            </p>
        </div>
    </div>

</section>






<x-partials.footer :heroes="$heroes"  :socialnetworks="$socialnetworks"/>

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
