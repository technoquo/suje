<nav>
    <ul class="tc _o sf yo cg ep">
        <li><a href="/" class="xl" :class="{ 'mk': page === 'home' }">Accueil</a></li>
        <li><a href="{{route('galeries')}}" class="xl">Galeries</a></li>
        <li class="c i" x-data="{ dropdown: false }">
            <a
                    href="#"
                    class="xl tc wf yf bg"
                    @click.prevent="dropdown = !dropdown"
                    :class="{ 'mk': page === 'blog-grid' || page === 'blog-single' || page === 'signin' || page === 'signup' || page === '404' }"
            >

                Tornée

                <svg
                        :class="{ 'wh': dropdown }"
                        class="th mm we fd pf" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                </svg>
            </a>

            <!-- Dropdown Start -->
            <ul class="a" :class="{ 'tc': dropdown }">
                <li><a href="/L.F.F.S/futsal" class="xl">L.F.F.S - Futsal</a></li>
                <li><a href="/L.S.F.S/futsal" class="xl">L.S.F.S - Futsal</a></li>
                <li><a href="/L.S.F.S/padel" class="xl">L.S.F.S - Padel</a></li>
            </ul>
            <!-- Dropdown End -->
        </li>
        <li class="c i" x-data="{ dropdown: false }">
            <a
                    href="#"
                    class="xl tc wf yf bg"
                    @click.prevent="dropdown = !dropdown"
                    :class="{ 'mk': page === 'blog-grid' || page === 'blog-single' || page === 'signin' || page === 'signup' || page === '404' }"
            >
                Pages

                <svg
                        :class="{ 'wh': dropdown }"
                        class="th mm we fd pf" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                </svg>
            </a>

            <!-- Dropdown Start -->
            <ul class="a" :class="{ 'tc': dropdown }">
                <li><a href="{{route('blog.all')}}" class="xl" :class="{ 'mk': page === 'blog-grid' }">Blog</a></li>
                <li><a href="{{route('professional')}}" class="xl" :class="{ 'mk': page === 'blog-single' }">Métiers</a></li>
                <li><a href="{{route('location.index')}}" class="xl" :class="{ 'mk': page === 'signin' }">Location</a></li>
                <li><a href="{{route('activities.all')}}" class="xl" :class="{ 'mk': page === 'signup' }">Evénements</a></li>
                {{--                            <li><a href="404.html" class="xl" :class="{ 'mk': page === '404' }">404</a></li>--}}
            </ul>
            <!-- Dropdown End -->
        </li>
        <li><a href="{{ config('app.url') }}/#contact" class="xl">Contact</a></li>
    </ul>
</nav>