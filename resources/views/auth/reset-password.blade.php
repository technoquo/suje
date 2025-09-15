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
<!-- ===== Header Start ===== -->
<x-partials.header :heroes="$heroes"/>
<!-- ===== Header End ===== -->

<!-- ===== Header End ===== -->

<main>
    <!-- ===== Formulaire de Connexion Début ===== -->
    <section class="i pg fh rm ki xn vq gj qp gr hj rp hr">


        <div class="animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp">
            <!-- Bordure d'arrière-plan -->
            <span class="rc h r s zd/2 od zg gh"></span>
            <span class="rc h r q zd/2 od xg mh"></span>

            <form method="POST" action="{{ route('password.update') }}" class="sb">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="wb">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                           class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40">
                    @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
                </div>

                <div class="wb">
                    <label for="password">Nouveau mot de passe</label>
                    <input type="password" name="password"
                           class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40">
                    @error('password') <p class="text-red-500">{{ $message }}</p> @enderror
                </div>

                <div class="wb">
                    <label for="password_confirmation">Confirmer le mot de passe</label>
                    <input type="password" name="password_confirmation"
                           class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40">
                </div>

                <button type="submit" class="vd rj ek rc rg gh lk ml il _l gi hi">
                    Réinitialiser
                </button>
            </form>



        </div>
    </section>
    <!-- ===== Formulaire de Connexion Fin ===== -->
</main>


<x-partials.footer :heroes="$heroes" :socialnetworks="$socialnetworks" />

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
