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
        x-data="{ sectionTitle: `Tous les produits` }"
        class="bb ye ki xn vq jb jo"
    >

        <div class="animate_top bb ze rj ki xn vq ">
            <h2
                x-text="sectionTitle"
                class="fk vj pr kk wm on/5 gq/2 bb _b"
            ></h2>

        </div>
        <div class="flex justify-center mx-auto">
            <form action="{{ route('blog.search') }}" method="POST" class="tc">
                @csrf
                <div class="i">
                    <input
                        type="text"
                        placeholder="Rechercher ici..."
                        class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi"
                        name="search"
                    />

                    <button class="h r q _h">
                        <svg
                            class="th ul ml il"
                            width="21"
                            height="21"
                            viewBox="0 0 21 21"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M16.031 14.617L20.314 18.899L18.899 20.314L14.617 16.031C13.0237 17.3082 11.042 18.0029 9 18C4.032 18 0 13.968 0 9C0 4.032 4.032 0 9 0C13.968 0 18 4.032 18 9C18.0029 11.042 17.3082 13.0237 16.031 14.617ZM14.025 13.875C15.2941 12.5699 16.0029 10.8204 16 9C16 5.132 12.867 2 9 2C5.132 2 2 5.132 2 9C2 12.867 5.132 16 9 16C10.8204 16.0029 12.5699 15.2941 13.875 14.025L14.025 13.875Z"
                            />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Section Title End -->

    <div class="bb ye ki xn vq jb jo">
        <div class="wc qf pn xo zf iq">
            <!-- Blog Item -->

            @foreach($products as $product)
                <div class="animate_top sg vk rm xm">
                    <div class="c rc i z-1 pg">
                        @if($product->image_path)
                        <img class="w-full" src="{{asset('storage/'. $product->image_path)}}" alt="{{$product->name}}" />
                        @endif

                    </div>

                    <div class="text-center">

                        <h4 class="ek tj ml il kk wm xl eq lb">
                            <a href="{{route('location.show', $product->slug)}}"
                            >{{ $product->name }}</a
                            >
                        </h4>
                    </div>
                    <p class="ek il wm eq lb">{{ $product->description }}</p>
                    <ul class="text-sm space-y-1 mb-4">
                        <li class="">
                            Prix : €{{ number_format($product->price_per_day, 2) }} / jour
                        </li>
                        <li class="wm">
                            Stock : {{ $product->stock }}
                        </li>
                    </ul>
                    <div class="mb-10 text-center">
                        <a href="{{route('location.show', $product->slug)}}" class="rg lk gh  ml il gi hi">Louer maintenant</a>
                    </div>
                </div>
            @endforeach
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
