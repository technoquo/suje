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
    <!-- ===== Blog Start ===== -->
    <section class="ji gp uq" >
        <!-- Section Title Start -->
        <div
            x-data="{ sectionTitle: {{$year}} }"
            class="bb ye ki xn vq jb jo"
        >
            <div class="animate_top bb ze rj ki xn vq ">
                <h2
                    x-text="sectionTitle"
                    class="fk vj pr kk wm on/5 gq/2 bb _b"
                ></h2>

            </div>
        </div>
        <!-- Section Title End -->

        <div class="bb ye ki xn vq jb jo">
            <div class="wc qf pn xo zf iq">
                <!-- Galleries -->
                @foreach($images as $image)

                    <div class="animate_top sg vk rm xm">
                        <div class="c rc i z-1 pg">
                            <img class="w-full" src="{{asset($image->image_path)}}" alt="{{$image->image_alt}}" />
                        </div>
                        <div class="text-center">{{$image->image_alt}}</div>
                    </div>
                @endforeach


                <!-- End Galleries -->
            </div>
        </div>
    </section>
    <!-- ===== Blog End ===== -->
</main>
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
