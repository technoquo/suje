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
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')
</head>
<body
    x-data="{ page: 'home', 'darkMode': false, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
            $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b eh': darkMode === false}"
>
<!-- ===== Header Start ===== -->
<x-partials.header :heroes="$heroes"/>
<!-- ===== Header End ===== -->
<main>
    <!-- ===== Blog Start ===== -->
    <section class="ji gp uq">
        <section class="">
            <div class="bb ze ki xn 2xl:ud-px-0">
                <div class="tc sf yo zf kq">
                    <div class="ro">
                        <div class="animate_top rounded-md shadow-solid-13 bg-white dark:bg-blacksection border border-stroke dark:border-strokedark p-7.5 md:p-10">

                            {{-- Imagen principal --}}
                            <img src="{{ asset('storage/'. $product->image_path) }}" alt="Producto" class="mb-6" />

                            <h2 class="ek vj 2xl:ud-text-title-lg kk wm nb gb">{{ $product->name }}</h2>

                            <div class="mb-6">
                                {!! $product->description !!}
                            </div>

                            {{-- Slider de imágenes --}}
                            @php
                                $product_images = [
                                    'https://cdn.pixabay.com/photo/2017/04/25/05/44/basketball-2258650_1280.jpg',
                                    'https://media.istockphoto.com/id/2121354204/photo/basketball-resting-on-a-court-during-a-big-championship-game.jpg?s=2048x2048&w=is&k=20&c=JHRdI5Hsb741bohGgeaaIS7QCGrmkA5SQY7j6SeHASQ=',
                                    'https://unsplash.com/photos/shanghai-skyline-on-a-cloudy-day-0p37Ch2LYQc',
                                    'https://unsplash.com/photos/a-hand-holds-a-payment-terminal-K-TCG8UZPLg',
                                ];
                            @endphp

                            <div x-data="{ active: 0 }" class="relative w-full overflow-hidden rounded-md mt-6">
                                <div class="flex transition-transform duration-500 ease-in-out"
                                     :style="'transform: translateX(-' + active * 100 + '%)'">
                                    @foreach($product_images as $img)
                                        <div class="min-w-full flex-shrink-0">
                                            <img src="{{ $img }}" alt="Imagen del producto" class="w-full h-64 object-cover rounded-md">
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Botones de navegación -->
                                <div class="absolute inset-0 flex justify-between items-center px-4">
                                    <button @click="active = (active === 0) ? {{ count($product_images) - 1 }} : active - 1"
                                            class="bg-black bg-opacity-30 text-white px-2 py-1 rounded-full">
                                        ‹
                                    </button>
                                    <button @click="active = (active === {{ count($product_images) - 1 }}) ? 0 : active + 1"
                                            class="bg-black bg-opacity-30 text-white px-2 py-1 rounded-full">
                                        ›
                                    </button>
                                </div>

                                <!-- Indicadores -->
                                <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
                                    @foreach($product_images as $index => $img)
                                        <div @click="active = {{ $index }}"
                                             class="w-3 h-3 rounded-full cursor-pointer"
                                             :class="active === {{ $index }} ? 'bg-white' : 'bg-gray-400'"></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="jn/2 so">
                        <div class="animate_top fb">
                            <form action="}" method="POST" class="tc">
                                @csrf
                                <div class="i">
                                    <input
                                        type="text"
                                        placeholder="Rechercher ici..."
                                        class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi"
                                        name="search"
                                    />
                                    <button class="h r q _h">
                                        <svg class="th ul ml il" width="21" height="21" viewBox="0 0 21 21" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.031 14.617L20.314 18.899L18.899 20.314L14.617 16.031C13.0237 17.3082 11.042 18.0029 9 18C4.032 18 0 13.968 0 9C0 4.032 4.032 0 9 0C13.968 0 18 4.032 18 9C18.0029 11.042 17.3082 13.0237 16.031 14.617ZM14.025 13.875C15.2941 12.5699 16.0029 10.8204 16 9C16 5.132 12.867 2 9 2C5.132 2 2 5.132 2 9C2 12.867 5.132 16 9 16C10.8204 16.0029 12.5699 15.2941 13.875 14.025L14.025 13.875Z"
                                            />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </section>
    <!-- ===== Blog End ===== -->
</main>

<x-partials.footer :heroes="$heroes" :socialnetworks="$socialnetworks"/>

<!-- ====== Back To Top Start ===== -->
<button
    class="xc wf xf ie ld vg sr gh tr g sa ta _a"
    @click="window.scrollTo({top: 0, behavior: 'smooth'})"
    @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
    :class="{ 'uc' : scrollTop }"
>
    <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
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
