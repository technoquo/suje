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
<section class="ji gp uq mt-6">
    <h2  class="fk vj pr kk wm on/5 gq/2 bb _b text-center uppercase">{{$service->title}} - {{$serviceImage->name}} </h2>
    <div class="bb ye ki xn vq jb jo">
        <div class="wc qf pn xo zf iq">

            <!-- Blog Item -->
            @foreach($groups as $sport)
                <div class="animate_top sg vk rm xm">
                    <div class="flex flex-col items-center justify-center w-full h-full p-4  border rounded-lg shadow sm:p-8">

                        <div class="block p-6  border border-gray-200 rounded-lg w-full flex flex-col items-center text-center">
                            <h5 class="yj go kk wm ob zb">{{$sport->title}}</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400 mb-4">{{$sport->subtitle}}</p>

                            <a href="{{ route('sport.activities', ['slug' => $service->title,'sport' => $sport_slug, 'group' => $sport->title]) }}"
                               class="inline-block px-4 py-2 text-white bg-gray-100 rounded hover:bg-gray-300 transition mt-5">
                                Voir plus de détails
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="flex justify-center items-center bb ze ki xn yq mb en">
        <div class="flex flex-wrap justify-center gap-8">
            @foreach($services as $service)

                <div class="animate_top sg oi pi zq ml il am cn _m">
                    <div class="flex justify-center gap-4 mb-4">
                        @foreach($service->images as $image)
                            <div class="flex flex-col items-center">
                                <a href="{{ route('sport', ['slug' => $service->title, 'sport' => $image->name]) }}" class="ek zj kk wm nb _b">
                                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->name }}" class="w-32 h-32 filter dark:invert dark:bg-white rounded-2xl" />
                                </a>
                                <h1 class="text-center text-xl font-bold mt-2 ">{{ $image->name }}</h1>
                            </div>
                        @endforeach
                    </div>
                    <h4 class="ek zj kk wm nb _b">{{ $service->title }}</h4>
                    <p>
                        {{ $service->description }}
                    </p>
                </div>
            @endforeach

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
