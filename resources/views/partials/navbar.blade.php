<nav>
    <ul class="tc _o sf yo cg ep">
        <li>
            <a href="/" class="xl" :class="{ 'mk': page === 'home' }">Accueil</a>
        </li>

        <li><a href="{{route('activities.all')}}" class="xl">Culture</a></li>

        <!-- Sports con submenú -->
        <li class="c i" x-data="{ dropdown: false }" @mouseenter="dropdown = true" @mouseleave="dropdown = false">
            <a href="#" class="xl tc wf yf bg"
               @click.prevent="dropdown = !dropdown">
                Sports
                <svg :class="{ 'wh': dropdown }"
                     class="th mm we fd pf"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 512 512">
                    <path
                            d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5
                           12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7
                           86.6 169.4c-12.5-12.5-32.8-12.5-45.3
                           0s-12.5 32.8 0 45.3l192 192z"/>
                </svg>
            </a>
            <!-- Dropdown -->
            <ul class="a flex flex-col gap-2 p-2 bg-white shadow-lg rounded-lg w-56"
                :class="{ 'tc': dropdown }">

                @php
                $sports = \Illuminate\Support\Facades\DB::table('sports')->where('is_active',1)->get();
                @endphp

                @foreach($sports as $sport)
                    <li class="flex items-center gap-2 hover:bg-gray-100 p-2 rounded">
                        <img src="{{ asset('storage/' . $sport->image) }}" alt="Icono {{ $sport->name }}" class="w-10 h-10 rounded">
                        <a href="{{ route('sport.calendar', ['slug' => $sport->slug]) }}" class="xl">{{ $sport->name }}</a>
                    </li>
                @endforeach
            </ul>
        </li>
        <!-- location -->
        <li>
            <a href="{{route('location.index')}}" class="xl" :class="{ 'mk': page === 'location' }">Location</a>
        </li>

        <!-- Vidéothèque -->
        <li class="c i" x-data="{ dropdown: false }" @mouseenter="dropdown = true" @mouseleave="dropdown = false">
            <a href="#" class="xl tc wf yf bg"
               @click.prevent="dropdown = !dropdown">
                Vidéothèque
                <svg :class="{ 'wh': dropdown }"
                     class="th mm we fd pf"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 512 512">
                    <path
                            d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5
                           12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7
                           86.6 169.4c-12.5-12.5-32.8-12.5-45.3
                           0s-12.5 32.8 0 45.3l192 192z"/>
                </svg>
            </a>
            <!-- Dropdown -->
            <ul class="a" :class="{ 'tc': dropdown }">
                <li><a href="{{route('professional')}}" class="xl">Métiers professionnels</a></li>
                <li><a href="{{route('violences')}}" class="xl">Violences</a></li>
            </ul>
        </li>

        <li><a href="{{ config('app.url') }}/#contact" class="xl">Contact</a></li>
        <!-- Ícono del carrito -->
        <li class="relative mr-4">
            <a href="{{route('cart.index')}}" class="xl flex items-center">
                <!-- Ícono carrito -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>


                <!-- Badge con contador -->
                <span
                        x-show="count > 0"
                        x-text="count"
                        class="absolute -top-1 -right-2 bg-red-600 text-white text-xs font-bold
                   w-5 h-5 rounded-full flex items-center justify-center"
                ></span>
            </a>
        </li>
    </ul>
</nav>
