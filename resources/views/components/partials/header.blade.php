<header
    class="g s r vd ya cj"
    :class="{ 'hh sm _k dj bl ll' : stickyMenu }"
    @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false"
>

    <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i">
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
            <nav>
                <ul class="tc _o sf yo cg ep">
                    <li><a href="/" class="xl" :class="{ 'mk': page === 'home' }">Accueil</a></li>
                    <li><a href="#" class="xl">Gallérie</a></li>
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

            <div class="tc wf ig pb no">
                <div class="pc h io pa ra" :class="navigationOpen ? '!-ud-visible' : 'd'">
                    <label class="rc ab i">
                        <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode" class="pf vd yc uk h r za ab" />
                        <!-- Icon Sun -->
                        <svg :class="{ 'wn' : page === 'home', 'xh' : page === 'home' && stickyMenu }" class="th om" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0908 18.6363C10.3549 18.6363 8.69 17.9467 7.46249 16.7192C6.23497 15.4916 5.54537 13.8268 5.54537 12.0908C5.54537 10.3549 6.23497 8.69 7.46249 7.46249C8.69 6.23497 10.3549 5.54537 12.0908 5.54537C13.8268 5.54537 15.4916 6.23497 16.7192 7.46249C17.9467 8.69 18.6363 10.3549 18.6363 12.0908C18.6363 13.8268 17.9467 15.4916 16.7192 16.7192C15.4916 17.9467 13.8268 18.6363 12.0908 18.6363ZM12.0908 16.4545C13.2481 16.4545 14.358 15.9947 15.1764 15.1764C15.9947 14.358 16.4545 13.2481 16.4545 12.0908C16.4545 10.9335 15.9947 9.8236 15.1764 9.00526C14.358 8.18692 13.2481 7.72718 12.0908 7.72718C10.9335 7.72718 9.8236 8.18692 9.00526 9.00526C8.18692 9.8236 7.72718 10.9335 7.72718 12.0908C7.72718 13.2481 8.18692 14.358 9.00526 15.1764C9.8236 15.9947 10.9335 16.4545 12.0908 16.4545ZM10.9999 0.0908203H13.1817V3.36355H10.9999V0.0908203ZM10.9999 20.8181H13.1817V24.0908H10.9999V20.8181ZM2.83446 4.377L4.377 2.83446L6.69082 5.14828L5.14828 6.69082L2.83446 4.37809V4.377ZM17.4908 19.0334L19.0334 17.4908L21.3472 19.8046L19.8046 21.3472L17.4908 19.0334ZM19.8046 2.83337L21.3472 4.377L19.0334 6.69082L17.4908 5.14828L19.8046 2.83446V2.83337ZM5.14828 17.4908L6.69082 19.0334L4.377 21.3472L2.83446 19.8046L5.14828 17.4908ZM24.0908 10.9999V13.1817H20.8181V10.9999H24.0908ZM3.36355 10.9999V13.1817H0.0908203V10.9999H3.36355Z" fill=""/>
                        </svg>
                        <!-- Icon Sun -->
                        <img class="xc nm" src="{{asset('images/icon-moon.svg')}}" alt="Moon" />
                    </label>
                </div>

                <a href="#" :class="{ 'nk yl' : page === 'home', 'ok' : page === 'home' && stickyMenu }" class="ek pk xl">S'identifier</a>
                <a href="#" :class="{ 'hh/[0.15]' : page === 'home', 'sh' : page === 'home' && stickyMenu }" class="lk gh dk rg tc wf xf _l gi hi">S'enregistrer</a>
            </div>
        </div>
    </div>
</header>
