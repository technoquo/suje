<nav>
    <ul class="tc _o sf yo cg ep">
        <li>
            <a href="/" class="xl" :class="{ 'mk': page === 'home' }">Accueil</a>
        </li>

        <li><a href="{{route('activities.all')}}" class="xl">Culture</a></li>

        <!-- Sports con submenú -->
        <li class="c i" x-data="{ dropdown: false }" @mouseenter="dropdown = true" @mouseleave="dropdown = false">
            <a href="#" class="xl tc wf yf bg"
               @click.prevent="dropdown = !dropdown"
               :class="{ 'mk': page === 'sports' }">
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

        <!-- Vidéothèque -->
        <li class="c i" x-data="{ dropdown: false }" @mouseenter="dropdown = true" @mouseleave="dropdown = false">
            <a href="#" class="xl tc wf yf bg"
               @click.prevent="dropdown = !dropdown"
               :class="{ 'mk': page === 'videotheque' }">
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
    </ul>
</nav>
