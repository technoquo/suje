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
<section>
    <!-- ===== Blog Start ===== -->
    <section class="ji gp uq">


        <section class="">
            <div class="bb ze ki xn 2xl:ud-px-0">
                <div class="tc sf yo zf kq">
                    <div class="ro">
                        <div class="animate_top rounded-md shadow-solid-13 bg-white dark:bg-blacksection border border-stroke dark:border-strokedark p-7.5 md:p-10">
                            <img src="{{asset('storage/'. $activity->image)}}" alt="Blog" />

                            <h2 class="ek vj 2xl:ud-text-title-lg kk wm nb gb">{{$activity->title}}</h2>

                            <ul class="tc uf cg 2xl:ud-gap-15 fb">
                                <li><span class="rc kk wm">Author: </span>{{ $activity->user->name }}</li>
                                <li><span class="rc kk wm">Published On: </span>{{ \Carbon\Carbon::parse($activity->date_published)->locale('fr')->isoFormat('D MMMM YYYY') }}</li>
                                @if($activity->link_video)
                                    <li><span class="rc kk wm">Video LSFB: </span>
                                        <iframe width="560" height="315" src="{{ $activity->link_video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </li>
                                @endif
                            </ul>

                            <div>
                                {!! $activity->description !!}
                            </div>
                            @if($activity->link_google)
                                <div class="mt-4">
                                    <a href="{{ $activity->link_google }}" target="_blank" class="inline-block px-4 py-2 text-white bg-gray-100 rounded hover:bg-gray-300 transition mt-5">
                                        Inscrivez-vous ici
                                    </a>
                                </div>
                            @endif



                        </div>
                    </div>

                    <div class="jn/2 so">
                        <div class="animate_top fb">
                            <form action="" method="POST" class="tc">
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
                        <!--
                        <div class="animate_top fb">
                            <h4 class="tj kk wm qb">Étiquettes</h4>

                            <ul>
                                foreach($tags as $tag)
                                    <li class="ql vb du-ease-in-out il xl">
                                        <a href=""></a>
                                    </li>
                                endforeach

                            </ul>
                        </div>

                        <div class="animate_top">
                            <h4 class="tj kk wm qb">Articles connexes</h4>

                            <div>
                                foreach($relatedPostsTags as $relatedPostTag)
                                    <div class="tc fg 2xl:ud-gap-6 qb">

                                        <h5 class="wj kk wm xl bn ml il">

                                        </h5>
                                    </div>
                                endforeach
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- ===== Blog End ===== -->

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
