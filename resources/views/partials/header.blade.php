<header
    class="g s r vd ya cj"
    :class="{ 'hh sm _k dj bl ll' : stickyMenu }"
    @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false"
>

    <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf">
        <div class="vd to/4 tc wf yf">
            <a href="/">
                <img class="bg-white rounded p-4" src="{{ asset('storage/'. $heroes->logo) }}" alt="{{$heroes->name}}" />
{{--                <img class="xc nm" src="{{ asset('images/logo-dark.svg') }}" alt="Logo Dark" />--}}
            </a>

            <!-- Hamburger Toggle BTN -->
            <button class="po rc" @click="navigationOpen = !navigationOpen">
        <span class="rc i pf re pd">
          <span class="du-block h q vd yc">
            <span class="rc i r s eh um tg te rd eb ml jl dl" :class="{ 'ue el': !navigationOpen }"></span>
            <span class="rc i r s eh um tg te rd eb ml jl fl" :class="{ 'ue qr': !navigationOpen }"></span>
            <span class="rc i r s eh um tg te rd eb ml jl gl" :class="{ 'ue hl': !navigationOpen }"></span>
          </span>
          <span class="du-block h q vd yc lf">
            <span class="rc eh um tg ml jl el h na r ve yc" :class="{ 'sd dl': !navigationOpen }"></span>
            <span class="rc eh um tg ml jl qr h s pa vd rd" :class="{ 'sd rr': !navigationOpen }"></span>
          </span>
        </span>
            </button>
            <!-- Hamburger Toggle BTN -->
        </div>

        <div
            class="vd wo/4 sd qo f ho oo wf yf"
            :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }"
        >
            {{-- Navbar --}}
            @include('partials.navbar')

            <div class="tc wf ig pb no">
                <div class="flex items-center gap-2 cursor-pointer" @click="toggleDark()">

                    <!-- Ícono sol (modo claro) -->
                    <svg
                            x-show="!darkMode"
                            class="w-6 h-6 text-black"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                    >
                        <path stroke="currentColor" stroke-width="2"
                              d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Zm0-14V2m0 20v-2m8-8h2M2 12h2m12.95-6.95 1.414-1.414M5.636 18.364 7.05 16.95m10.9 1.414 1.414-1.414M5.636 5.636 7.05 7.05"/>
                    </svg>

                    <!-- Ícono luna (modo oscuro) -->
                    <svg
                            x-show="darkMode"
                            class="w-6 h-6 text-white"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                    >
                        <path stroke="currentColor" stroke-width="2"
                              d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79Z"/>
                    </svg>

                </div>


                {{-- Si NO está logueado --}}
                @guest
                    <a href="{{ route('login') }}" class="lk gh dk rg tc wf xf _l gi hi">S'identifier</a>
                    <a href="{{ route('register') }}" class="lk gh dk rg tc wf xf _l gi hi">S'enregistrer</a>
                @endguest

                {{-- Si está logueado --}}
                @auth
                    <span class="text-sm mr-4">Bonjour, {{ Auth::user()->name }}</span>

                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="lk gh dk rg tc wf xf _l gi hi">
                            Se déconnecter
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</header>
