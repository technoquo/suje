<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cupcake">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Suje - ASBL</title>

    <!-- Fonts -->

    @if (Route::is('home'))
    <!-- Load Glide CSS directly -->
    <link rel="stylesheet" href="{{ asset('css/glide.core.min.css') }}">
    @endif
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
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
                    <a href="{{ route('home') }}">Accueil</a>
                    <div
                        class="absolute hidden group-hover:flex tooltip tooltip-bottom p-2 bg-base-200 rounded top-9">
                        <img src="https://www.escaleasbl.be/images/tooltip/actualite.gif" alt="Tooltip GIF"
                            class="object-cover w-24 h-24">
                    </div>
                </li>
                <li class="relative group z-10">
                    <a href="{{ route('sommes-nous') }}">Qui sommes-nous</a>
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
                            <li><a href="{{route('equipes')}}">Équipes</a></li>
                            <li><a href="https://www.google.be" target="_blank">Inscription</a></li>
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
                    <a href="{{ route('contact') }}">Contact</a>
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
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('sommes-nous') }}">Qui sommes-nous</a></li>
            <li>
                <details>
                    <summary>Sports</summary>
                    <ul class="bg-base-100 rounded-t-none p-2">
                        <li><a class="{{route('equipes')}}">Détails des équipes</a></li>
                        <li><a>Formularie d'inscription</a></li>
                    </ul>
                </details>
            </li>
            <li><a>Archives</a></li>
            <li><a>Location</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>

    <div class="container mx-auto px-4">
                @yield('content')
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

    <script src="{{ asset('js/scripts.js') }}"></script>
    <script async src="//www.instagram.com/embed.js"></script>

</body>
</html>
