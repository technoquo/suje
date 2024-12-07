<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cupcake">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Suje</title>

    <!-- Fonts -->


      <!-- Load Glide CSS directly -->
     <link rel="stylesheet" href="{{ asset('css/glide.core.min.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="container mx-auto px-4">


        <div class="navbar bg-base-100">
            <!-- Toggle button for mobile -->
            <button id="menuToggle" class="btn btn-square btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block w-6 h-6 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <div class="flex-1">
                <a href="/">
                    <img src="/img/suje.webp" alt="Logo" class="bg-slate-100 px-2 py-2 rounded">
                </a>
            </div>
            <div class="flex-none">
                <!-- Menu for desktop, hidden on mobile -->
                <ul class="menu menu-horizontal px-1 hidden lg:flex" id="menu">
                    <li class="relative group z-10">
                        <a>Accueil</a>
                        <div
                            class="absolute hidden group-hover:flex tooltip tooltip-bottom p-2 bg-base-200 rounded top-9">
                            <img src="https://www.escaleasbl.be/images/tooltip/actualite.gif" alt="Tooltip GIF"
                                class="object-cover w-24 h-24">
                        </div>
                    </li>
                    <li class="relative group z-10">
                        <a>Qui sommes-nous</a>
                        <div
                            class="absolute hidden group-hover:flex tooltip tooltip-bottom p-2 bg-base-200 rounded top-9">
                            <img src="https://www.escaleasbl.be/images/tooltip/actualite.gif" alt="Tooltip GIF"
                                class="object-cover w-24 h-24">
                        </div>
                    </li>
                    <li class="relative group group-sport z-10">
                        <div
                            class="absolute hidden group-hover:flex tooltip tooltip-bottom p-2 bg-base-200 rounded top-9">
                            <img src="https://www.escaleasbl.be/images/tooltip/actualite.gif" alt="Tooltip GIF"
                                class="object-cover w-24 h-24">
                        </div>
                        <details id="sportsDetails">
                            <summary>Sports</summary>
                            <ul class="bg-base-100 rounded-t-none p-2 z-10">
                                <li><a>Équipes</a></li>
                                <li><a>Inscription</a></li>
                            </ul>
                        </details>
                    </li>
                    <li class="relative group z-10">
                        <a>Archives</a>
                        <div
                            class="absolute hidden group-hover:flex tooltip tooltip-bottom p-2 bg-base-200 rounded top-9">
                            <img src="https://www.escaleasbl.be/images/tooltip/actualite.gif" alt="Tooltip GIF"
                                class="object-cover w-24 h-24">
                        </div>
                    </li>
                    <li class="relative group z-10">
                        <a>Location</a>
                        <div
                            class="absolute hidden group-hover:flex tooltip tooltip-bottom p-2 bg-base-200 rounded top-9">
                            <img src="https://www.escaleasbl.be/images/tooltip/actualite.gif" alt="Tooltip GIF"
                                class="object-cover w-24 h-24">
                        </div>
                    </li>
                    <li class="relative group z-10">
                        <a>Contact</a>
                        <div
                            class="absolute hidden group-hover:flex tooltip tooltip-bottom p-2 bg-base-200 rounded top-9">
                            <img src="https://www.escaleasbl.be/images/tooltip/actualite.gif" alt="Tooltip GIF"
                                class="object-cover w-24 h-24">
                        </div>
                    </li>
                </ul>
                <label class="swap swap-rotate">
                    <input type="checkbox" class="theme-controller hidden" id="themeSwitcher" />
                    <svg class="swap-off h-10 w-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
                    </svg>

                    <!-- moon icon -->
                    <svg class="swap-on h-10 w-10 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
                    </svg>
                </label>
            </div>
        </div>

        <!-- Mobile dropdown menu -->
        <div id="mobileMenu" class="hidden lg:hidden">
            <ul class="menu bg-base-100 p-2">
                <li><a>Accueil</a></li>
                <li><a>Qui sommes-nous</a></li>
                <li>
                    <details>
                        <summary>Sports</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a>Détails des équipes</a></li>
                            <li><a>Formularie d'inscription</a></li>
                        </ul>
                    </details>
                </li>
                <li><a>Archives</a></li>
                <li><a>Location</a></li>
                <li><a>Contact</a></li>
            </ul>
        </div>

        <div class="hero min-h-screen relative">
            <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover filte brightness-50">
                <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="hero-content text-neutral-content text-center relative z-10">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                    <p class="mb-5">
                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.
                    </p>

                </div>
            </div>
        </div>




        {{-- <div x-data="carousel" x-init="startCarousel()" class="carousel w-full overflow-hidden relative mt-6">
            <div class="relative flex w-[400%] transition-transform duration-700"
                :style="`transform: translateX(-${(currentSlide - 1) * 100}%)`">

                <!-- Slide 1 -->
                <div class="carousel-item w-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp"
                        class="w-full" />
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item w-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp"
                        class="w-full" />
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item w-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp"
                        class="w-full" />
                </div>

                <!-- Slide 4 -->
                <div class="carousel-item w-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
                        class="w-full" />
                </div>
            </div>

            <!-- Navigation buttons -->
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <button @click="prevSlide()" class="btn btn-circle">❮</button>
                <button @click="nextSlide()" class="btn btn-circle">❯</button>
            </div>
        </div> --}}


        <div class="mt-6" x-data="{
                init() {
                    new Glide(this.$refs.glide, {
                        perView: 3,
                        autoplay: 3000,
                        breakpoints: {
                            640: {
                                perView: 1,
                            },
                        },
                    }).mount()
                },
            }">
            <div x-ref="glide" class="glide block relative px-12">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide flex flex-col items-center justify-center pb-6">
                            <img class="w-full" src="https://picsum.photos/800/400?random=1" alt="placeholder image">
                        </li>

                        <li class="glide__slide flex flex-col items-center justify-center pb-6">
                            <img class="w-full" src="https://picsum.photos/800/400?random=2" alt="placeholder image">
                        </li>

                        <li class="glide__slide flex flex-col items-center justify-center pb-6">
                            <img class="w-full" src="https://picsum.photos/800/400?random=3" alt="placeholder image">
                        </li>

                        <li class="glide__slide flex flex-col items-center justify-center pb-6">
                            <img class="w-full" src="https://picsum.photos/800/400?random=4" alt="placeholder image">
                        </li>

                        <li class="glide__slide flex flex-col items-center justify-center pb-6">
                            <img class="w-full" src="https://picsum.photos/800/400?random=5" alt="placeholder image">
                        </li>

                        <li class="glide__slide flex flex-col items-center justify-center pb-6">
                            <img class="w-full" src="https://picsum.photos/800/400?random=6" alt="placeholder image">
                        </li>
                    </ul>
                </div>

                <div class="glide__arrows pointer-events-none absolute inset-0 flex items-center justify-between"
                    data-glide-el="controls">
                    <!-- Previous Button -->
                    <button
                        class="glide__arrow glide__arrow--left pointer-events-auto disabled:opacity-50 rounded-lg border border-gray-200 p-1 inline-flex items-center justify-center"
                        data-glide-dir="<">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </span>
                        <span class="sr-only">Skip to previous slide page</span>
                    </button>

                    <!-- Next Button -->
                    <button
                        class="glide__arrow glide__arrow--left pointer-events-auto disabled:opacity-50 rounded-lg border border-gray-200 p-1 inline-flex items-center justify-center"
                        data-glide-dir=">">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                        <span class="sr-only">Skip to next slide page</span>
                    </button>
                </div>

                <!-- Bullets -->
                <div class="glide__bullets flex w-full items-center justify-center gap-1"
                    data-glide-el="controls[nav]">
                    <button class="glide__bullet h-3 w-3 rounded-full bg-gray-200 transition-colors"
                        data-glide-dir="=0"></button>
                    <button class="glide__bullet h-3 w-3 rounded-full bg-gray-200 transition-colors"
                        data-glide-dir="=1"></button>
                    <button class="glide__bullet h-3 w-3 rounded-full bg-gray-200 transition-colors"
                        data-glide-dir="=2"></button>
                    <button class="glide__bullet h-3 w-3 rounded-full bg-gray-200 transition-colors"
                        data-glide-dir="=3"></button>
                    <button class="glide__bullet h-3 w-3 rounded-full bg-gray-200 transition-colors"
                        data-glide-dir="=4"></button>
                    <button class="glide__bullet h-3 w-3 rounded-full bg-gray-200 transition-colors"
                        data-glide-dir="=5"></button>
                </div>
            </div>
        </div>



        {{-- <div class="hero bg-base-200 min-h-screen">
            <div class="hero-content text-center">
                <div class="max-w-md">
                    <h1 class="text-5xl font-bold">Hello there</h1>
                    <p class="py-6">
                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.
                    </p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
            </div>
        </div> --}}



        <div class="grid grid-cols-1 md:grid-cols-2 mt-6 gap-4" x-data
            x-intersect:enter="$el.querySelectorAll('.grid-item').forEach((item, i) => {
            item.style.animationDelay = `${i * 0.2}s`;
            item.classList.add('animate-fade-in');
            })">

            <div class="hero bg-base-200 grid-item">
                <div class="hero-content flex-col lg:flex-row">
                    <img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
                        class="max-w-sm rounded-lg shadow-2xl" />
                    <div>
                        <h1 class="text-5xl font-bold">Notre Mission</h1>
                        <p class="py-6">
                            Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                            quasi. In deleniti eaque aut repudiandae et a id nisi.
                        </p>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
            </div>
            <div class="hero bg-base-200 grid-item">
                <div class="hero-content flex-col lg:flex-row-reverse">
                    <img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
                        class="max-w-sm rounded-lg shadow-2xl" />
                    <div>
                        <h1 class="text-5xl font-bold">Notre Valeurs</h1>
                        <p class="py-6">
                            Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                            quasi. In deleniti eaque aut repudiandae et a id nisi.
                        </p>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
            </div>


        </div>

        <div class="mt-6">
            <h1 class="text-2xl font-bold text-center">Informations provenant d'Instagram Suje</h1>
            <div class="flex flex-wrap justify-center gap-3 mt-6" x-data
                x-intersect:enter="$el.querySelectorAll('.grid-item').forEach((item, i) => {
                    item.style.animationDelay = `${i * 0.2}s`;
                    item.classList.add('animate-fade-in');
                    })">
                <div class="grid-item">
                    <div class="card bg-base-100 w-96 shadow-xl">
                        <blockquote class="instagram-media" data-instgrm-captioned
                            data-instgrm-permalink="https://www.instagram.com/p/DDJ0BrMMC_H/?utm_source=ig_embed&amp;utm_campaign=loading"
                            data-instgrm-version="14"
                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                            <div style="padding:16px;"> <a
                                    href="https://www.instagram.com/p/DDJ0BrMMC_H/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                    target="_blank">
                                    <div style=" display: flex; flex-direction: row; align-items: center;">
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 19% 0;"></div>
                                    <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                            width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                            xmlns="https://www.w3.org/2000/svg"
                                            xmlns:xlink="https://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                    <g>
                                                        <path
                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></div>
                                    <div style="padding-top: 8px;">
                                        <div
                                            style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                            View this post on Instagram</div>
                                    </div>
                                    <div style="padding: 12.5% 0;"></div>
                                    <div
                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                        <div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                            </div>
                                        </div>
                                        <div style="margin-left: 8px;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                            </div>
                                        </div>
                                        <div style="margin-left: auto;">
                                            <div
                                                style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                        </div>
                                    </div>
                                </a>
                                <p
                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                    <a href="https://www.instagram.com/p/DDJ0BrMMC_H/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                        target="_blank">A post shared by SUJE (@suje_asbl)</a>
                                </p>
                            </div>
                        </blockquote>

                    </div>
                </div>
                <div class="grid-item">
                    <div class="card bg-base-100 w-96 shadow-xl">
                        <blockquote class="instagram-media" data-instgrm-captioned
                            data-instgrm-permalink="https://www.instagram.com/p/DDJwniSsLCG/?utm_source=ig_embed&amp;utm_campaign=loading"
                            data-instgrm-version="14"
                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                            <div style="padding:16px;"> <a
                                    href="https://www.instagram.com/p/DDJwniSsLCG/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                    target="_blank">
                                    <div style=" display: flex; flex-direction: row; align-items: center;">
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 19% 0;"></div>
                                    <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                            width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                            xmlns="https://www.w3.org/2000/svg"
                                            xmlns:xlink="https://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                    <g>
                                                        <path
                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></div>
                                    <div style="padding-top: 8px;">
                                        <div
                                            style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                            View this post on Instagram</div>
                                    </div>
                                    <div style="padding: 12.5% 0;"></div>
                                    <div
                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                        <div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                            </div>
                                        </div>
                                        <div style="margin-left: 8px;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                            </div>
                                        </div>
                                        <div style="margin-left: auto;">
                                            <div
                                                style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                        </div>
                                    </div>
                                </a>
                                <p
                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                    <a href="https://www.instagram.com/p/DDJwniSsLCG/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                        target="_blank">A post shared by SUJE (@suje_asbl)</a>
                                </p>
                            </div>
                        </blockquote>

                    </div>
                </div>
                <div class="grid-item">
                    <div class="card bg-base-100 w-96 shadow-xl">
                        <blockquote class="instagram-media" data-instgrm-captioned
                            data-instgrm-permalink="https://www.instagram.com/p/DCjlqECsWXw/?utm_source=ig_embed&amp;utm_campaign=loading"
                            data-instgrm-version="14"
                            style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                            <div style="padding:16px;"> <a
                                    href="https://www.instagram.com/p/DCjlqECsWXw/?utm_source=ig_embed&amp;utm_campaign=loading"
                                    style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                    target="_blank">
                                    <div style=" display: flex; flex-direction: row; align-items: center;">
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding: 19% 0;"></div>
                                    <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                            width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                            xmlns="https://www.w3.org/2000/svg"
                                            xmlns:xlink="https://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                    <g>
                                                        <path
                                                            d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></div>
                                    <div style="padding-top: 8px;">
                                        <div
                                            style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                            View this post on Instagram</div>
                                    </div>
                                    <div style="padding: 12.5% 0;"></div>
                                    <div
                                        style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                        <div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                            </div>
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                            </div>
                                        </div>
                                        <div style="margin-left: 8px;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                            </div>
                                        </div>
                                        <div style="margin-left: auto;">
                                            <div
                                                style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                            </div>
                                            <div
                                                style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                        </div>
                                    </div>
                                </a>
                                <p
                                    style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                    <a href="https://www.instagram.com/p/DCjlqECsWXw/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                        target="_blank">A post shared by SUJE (@suje_asbl)</a>
                                </p>
                            </div>
                        </blockquote>


                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12">
            <h1 class="text-2xl font-bold text-center">Les activités et événements</h1>

            <div class="flex flex-wrap justify-center gap-3 mt-6" x-data
                x-intersect:enter="$el.querySelectorAll('.grid-item').forEach((item, i) => {
                item.style.animationDelay = `${i * 0.2}s`
                item.classList.add('animate-fade-in');
                })">
                <div class="grid-item">
                    <div class="card bg-base-100 w-96 shadow-xl">
                        <figure class="px-10 pt-10">
                            <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">Sunt ad ad consequat </h2>
                            <p>Mollit mollit aliqua tempor officia magna laborum ea non</p>
                            <div class="card-actions">
                                <button class="btn btn-primary">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card bg-base-100 w-96 shadow-xl">
                        <figure class="px-10 pt-10">
                            <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">Sunt ad ad consequat </h2>
                            <p>Mollit mollit aliqua tempor officia magna laborum ea non</p>
                            <div class="card-actions">
                                <button class="btn btn-primary">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card bg-base-100 w-96 shadow-xl">
                        <figure class="px-10 pt-10">
                            <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">Sunt ad ad consequat </h2>
                            <p>Mollit mollit aliqua tempor officia magna laborum ea non</p>
                            <div class="card-actions">
                                <button class="btn btn-primary">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card bg-base-100 w-96 shadow-xl">
                        <figure class="px-10 pt-10">
                            <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">Sunt ad ad consequat </h2>
                            <p>Mollit mollit aliqua tempor officia magna laborum ea non</p>
                            <div class="card-actions">
                                <button class="btn btn-primary">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card bg-base-100 w-96 shadow-xl">
                        <figure class="px-10 pt-10">
                            <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">Sunt ad ad consequat </h2>
                            <p>Mollit mollit aliqua tempor officia magna laborum ea non</p>
                            <div class="card-actions">
                                <button class="btn btn-primary">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="card bg-base-100 w-96 shadow-xl">
                        <figure class="px-10 pt-10">
                            <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">Sunt ad ad consequat </h2>
                            <p>Mollit mollit aliqua tempor officia magna laborum ea non</p>
                            <div class="card-actions">
                                <button class="btn btn-primary">Plus d'informations</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="hero bg-base-200 shadow-xl mt-6">
            <div class="hero-content flex-col 2 lg:flex-row-reverse">
                <div x-data="imageRotator()" class="max-w-sm rounded-lg shadow-2xl">
                    <img :src="currentImage" alt="Rotating Image"
                        class="w-full rounded-lg transition-opacity duration-500 ease-in-out"
                        :class="{ 'opacity-0': fadingOut, 'opacity-100': !fadingOut }"
                        @transitionend="fadingOut = false" />
                </div>
                <div>
                    <h1 class="text-2xl font-bold">Connaître les mérites professionnels</h1>
                    <div class="py-6 w-80">
                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.
                    </div>
                    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                    <div class="drawer-content">
                        <!-- Page content here -->
                        <label for="my-drawer" class="btn btn-primary drawer-button">Mérites
                            professionnels</label>
                    </div>
                    <div class="drawer-side">
                        <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                        <ul
                            class="menu bg-base-200 text-base-content min-h-full w-80 p-4 overflow-y-auto max-h-screen">
                            <!-- Sidebar content here -->
                            <li><a><img src="/img/1-photo.png" class="w-24 h-24"
                                        class="max-w-sm rounded-lg shadow-2xl" alt="Photo 1" tooltip="dddd" /></a>
                            </li>
                            <li><a><img src="/img/2-photo.png" class="w-24 h-24"
                                        class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                            <li><a><img src="/img/3-photo.png" class="w-24 h-24"
                                        class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                            <li><a><img src="/img/4-photo.png" class="w-24 h-24"
                                        class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                            <li><a><img src="/img/5-photo.png" class="w-24 h-24"
                                        class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                            <li><a><img src="/img/6-photo.png" class="w-24 h-24"
                                        class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                            <li><a><img src="/img/7-photo.png" class="w-24 h-24"
                                        class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                            <li><a><img src="/img/8-photo.png" class="w-24 h-24"
                                        class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                            <li><a><img src="/img/9-photo.png" class="w-24 h-24"
                                        class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                            <li><a><img src="/img/10-photo.png" class="w-24 h-24"
                                        class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                            <li><a><img src="/img/11-photo.png" class="w-24 h-24"
                                        class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                            <li><a><img src="/img/12-photo.png" class="w-24 h-24"
                                        class="max-w-sm rounded-lg shadow-2xl" /></a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>





        <footer class="footer footer-center bg-primary text-primary-content p-10 mt-6">
            <aside>
                <img src="/img/suje.webp" alt="Logo" class="bg-slate-100 px-2 py-2 rounded">
                <p class="font-bold">
                    Providing reliable tech since 2001
                </p>
                <p>Copyright © {{ now()->year }} - All right reserved</p>
            </aside>
            <nav>
                <div class="grid grid-flow-col gap-4">
                    <a href="https://www.facebook.com/SUJEsourdoof" target="_blank" class="cursor-pointer">
                        <svg class="w-8 h-8 text-gray-800 dark:text-white hover:text-blue-700" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                clip-rule="evenodd" />
                        </svg>


                    </a>
                    <a href="https://www.instagram.com/suje_asbl" target="_blank" class="cursor-pointer">
                        <svg class="w-8 h-8 text-gray-800 dark:text-white hover:text-red-700" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                clip-rule="evenodd" />
                        </svg>

                    </a>
                </div>
            </nav>
        </footer>


        <script>
            // Function to change the theme
            function changeTheme(themeName) {
                document.documentElement.setAttribute('data-theme', themeName);
                localStorage.setItem('theme', themeName); // Save the theme in localStorage
            }

            // Load the theme from localStorage when the page loads
            document.addEventListener('DOMContentLoaded', function() {
                const savedTheme = localStorage.getItem('theme') ||
                    'cupcake'; // Default to 'cupcake' if no theme is saved
                changeTheme(savedTheme);
            });

            // Example: Switch between light and dark themes
            document.getElementById('themeSwitcher').addEventListener('click', function() {
                const currentTheme = document.documentElement.getAttribute('data-theme');

                if (currentTheme === 'cupcake') {
                    document.querySelectorAll('.glide__arrow').forEach(arrow => {
                    arrow.classList.replace('border-gray-200', 'border-indigo-500/100');
                    });
                    changeTheme('retro');
                } else {
                    document.querySelectorAll('.glide__arrow').forEach(arrow => {
                    arrow.classList.replace('border-indigo-500', 'border-gray-500');
                    });
                    changeTheme('cupcake');
                }
            });

            document.addEventListener('alpine:init', () => {
                Alpine.data('carousel', () => ({
                    currentSlide: 1,
                    totalSlides: 4,
                    interval: null,

                    startCarousel() {
                        this.interval = setInterval(() => {
                            this.nextSlide();
                        }, 3000);
                    },

                    nextSlide() {
                        this.currentSlide = this.currentSlide === this.totalSlides ? 1 : this.currentSlide +
                            1;
                    },

                    prevSlide() {
                        this.currentSlide = this.currentSlide === 1 ? this.totalSlides : this.currentSlide -
                            1;
                    },
                }));
            });


            document.getElementById('menuToggle').addEventListener('click', function() {
                const mobileMenu = document.getElementById('mobileMenu');
                mobileMenu.classList.toggle('hidden');
            });


            const detailsElement = document.getElementById('sportsDetails');
            console.log(detailsElement);
            // Close details when mouse leaves the group
            document.querySelector('.group-sport').addEventListener('mouseleave', () => {

                if (detailsElement.open) {
                    detailsElement.removeAttribute('open');
                }
            });

            function imageRotator() {
                return {
                    images: [
                        '/img/1-photo.png',
                        '/img/2-photo.png',
                        '/img/3-photo.png',
                        '/img/4-photo.png',
                        '/img/5-photo.png',
                        '/img/6-photo.png',
                        '/img/7-photo.png',
                        '/img/8-photo.png',
                        '/img/9-photo.png',
                        '/img/10-photo.png',
                        '/img/11-photo.png',
                        '/img/12-photo.png',

                    ],
                    currentImage: '/img/1-photo.png',
                    fadingOut: false,
                    init() {
                        this.startRotation();
                    },
                    startRotation() {
                        setInterval(() => {
                            this.fadingOut = true; // Start fade out
                            setTimeout(() => {
                                this.currentImage = this.images[Math.floor(Math.random() * this.images.length)];
                                this.fadingOut = false; // Fade back in
                            }, 500); // Match the fade-out duration
                        }, 2000); // Change image every 5 seconds
                    }
                };
            }
        </script>
        <script async src="//www.instagram.com/embed.js"></script>




</body>

</html>
