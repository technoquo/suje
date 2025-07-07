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
<main>
    <!-- ===== Professionals Start ===== -->
    <section class="ji gp uq">
        <!-- Bg Shapes -->
        <span class="rc h s r vd fd/5 fh rm"></span>
        <img src="images/shape-08.svg" alt="Shape Bg" class="h q r"/>
        <img src="images/shape-09.svg" alt="Shape" class="of h y z/2"/>
        <img src="images/shape-10.svg" alt="Shape" class="h _ aa"/>
        <img src="images/shape-11.svg" alt="Shape" class="of h m ba"/>

        <!-- Section Title Start -->
        <div
            x-data="{ sectionTitle: `Connaître les mérites professionnels`}"
            class="bb ye ki xn vq jb jo"
        >
            <div class="animate_top bb ze rj ki xn vq">
                <h2
                    x-text="sectionTitle"
                    class="fk vj pr kk wm on/5 gq/2 bb _b"
                ></h2>

            </div>
        </div>
        <!-- Section Title End -->

        <div class="bb ze i va ki xn xq jb jo">
            <div class="wc qf pn xo gg cp">

                @foreach($professionals as $professional)

                    <div class="animate_top rj">
                        <div class="c i pg z-1">
                            <a
                                data-fslightbox
                                href="#vimeo-{{$professional->id}}">
                                <img class="vd" src="{{ asset('storage/' . $professional->image) }}"
                                     alt="{{ $professional->full_name }}"/>
                            </a>


                            <div class="ef im nl il">

                  <span
                      class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"
                  ></span>
                                <span class="h s p rc vd hd mh va"></span>
                                <div class="h s p vd ij jj xa">
                                    <h4 class="yj go kk wm ob zb">{{$professional->full_name}}</h4>
                                </div>

                            </div>
                        </div>
                        <iframe
                            src="{{$professional->video}}"
                            id="vimeo-{{$professional->id}}"
                            class="fslightbox-source"
                            width="1280"
                            height="720"

                            allow="autoplay; fullscreen"
                            allowFullScreen
                        ></iframe>


                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
        <!-- ===== Professionals End ===== -->
        <x-partials.footer :heroes="$heroes" :socialnetworks="$socialnetworks"/>

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

    </main>@livewireScripts

</body>
</html>
