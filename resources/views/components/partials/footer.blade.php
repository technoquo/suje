<!-- ===== Footer Start ===== -->
<footer>
    <div class="bb ze ki xn 2xl:ud-px-0">

        <!-- Footer Top -->
        <div class="ji gp">
            <div class="tc uf ap gg fp">
                <div class="animate_top zd/2 to/4">
                    <a href="/">
                        <img src="{{asset('storage/'.$heroes->logo)}}" alt="Logo" class="om" />

                    </a>

                    <p class="lc fb">
                        {{$heroes->title}}
                    </p>

                    <ul class="tc wf cg">
                        @foreach ($socialnetworks as $socialnetwork)
                            <li>
                                <a href="{{ $socialnetwork->url }}" target="_blank">
                                    <i data-lucide="{{ $socialnetwork->icon }}" class="w-6 h-6 text-gray-600 hover:text-blue-500 transition-colors duration-30"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="vd ro tc sf rn un gg vn">
                    <div class="animate_top">
                        <h4 class="kk wm tj ec">Liens rapides</h4>

                        <ul>
                            <li><a href="#suje" class="sc xl vb">Accueil</a></li>
                            <li><a href="#" class="sc xl vb">Gallérie</a></li>
                            <li><a href="#" class="sc xl vb">Location</a></li>
                        </ul>
                    </div>

                    <div class="animate_top">
                        <h4 class="kk wm tj ec">Soutien</h4>

                        <ul>
                            <li><a href="#suje" class="sc xl vb">Suje ASBL</a></li>
                            <li><a href="#" class="sc xl vb">Notre blog</a></li>
                            <li><a href="#contact" class="sc xl vb">Contactez-nous</a></li>
                        </ul>
                    </div>

                    <div class="animate_top">
                        <h4 class="kk wm tj ec">Newsletter</h4>
                        <p class="ac qe">S'abonner pour recevoir les futures mises à jour</p>

                        <form
                            action="https://formbold.com/s/unique_form_id"
                            method="POST"
                        >
                            <div class="i">
                                <input
                                    type="text"
                                    placeholder="Email address"
                                    class="vd sm _g ch pm vk xm rg gm dm dn gi mi"
                                />

                                <button class="h q fi">
                                    <svg
                                        class="th vm ul"
                                        width="20"
                                        height="20"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g clip-path="url(#clip0_48_1487)">
                                            <path
                                                d="M3.1175 1.17318L18.5025 9.63484C18.5678 9.67081 18.6223 9.72365 18.6602 9.78786C18.6982 9.85206 18.7182 9.92527 18.7182 9.99984C18.7182 10.0744 18.6982 10.1476 18.6602 10.2118C18.6223 10.276 18.5678 10.3289 18.5025 10.3648L3.1175 18.8265C3.05406 18.8614 2.98262 18.8792 2.91023 18.8781C2.83783 18.8769 2.76698 18.857 2.70465 18.8201C2.64232 18.7833 2.59066 18.7308 2.55478 18.6679C2.51889 18.6051 2.50001 18.5339 2.5 18.4615V1.53818C2.50001 1.46577 2.51889 1.39462 2.55478 1.33174C2.59066 1.26885 2.64232 1.2164 2.70465 1.17956C2.76698 1.14272 2.83783 1.12275 2.91023 1.12163C2.98262 1.12051 3.05406 1.13828 3.1175 1.17318ZM4.16667 10.8332V16.3473L15.7083 9.99984L4.16667 3.65234V9.16651H8.33333V10.8332H4.16667Z"
                                                fill=""
                                            />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_48_1487">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Top -->

        <!-- Footer Bottom -->
        <div class="bh ch pm tc uf sf yo wf xf ap cg fp bj">
            <div class="animate_top">
                <p>&copy; {{ date('Y') }} {{$heroes->name}}.  Tous droits réservés</p>
            </div>
        </div>
        <!-- Footer Bottom -->
    </div>
</footer>
<!-- ===== Footer End ===== -->
