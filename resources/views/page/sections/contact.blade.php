<!-- ===== Contact Start ===== -->
<section id="support" class="i pg fh rm ji gp uq">
    <!-- Bg Shapes -->
    <img src="images/shape-06.svg" alt="Shape" class="h aa y" />
    <img src="images/shape-03.svg" alt="Shape" class="h ca u" />
    <img src="images/shape-07.svg" alt="Shape" class="h w da ee" />
    <img src="images/shape-12.svg" alt="Shape" class="h p s" />
    <img src="images/shape-13.svg" alt="Shape" class="h r q" />

    <!-- Section Title Start -->
    <div
        x-data="{ sectionTitle: `Contactez-nous`}"
        id="contact"
    >
        <div class="animate_top bb ze rj ki xn vq">
            <h2
                x-text="sectionTitle"
                class="fk vj pr kk wm on/5 gq/2 bb _b"
            ></h2>

        </div>
    </div>
    <!-- Section Title End -->

    <div class="i va bb ye ki xn wq jb mo">
        <div class="tc uf sn tf rn un zf xl:gap-10">
            <div class="animate_top w-full mn/5 to/3 vk sg hh sm yh rq i pg">
                <!-- Bg Shapes -->
                <img src="images/shape-03.svg" alt="Shape" class="h la x wd" />
                <img
                    src="images/shape-06.svg"
                    alt="Shape"
                    class="h la ma ne kf"
                />

                <div class="fb">
                    <h4 class="wj kk wm cc">Adresse e-mail</h4>
                    <p><a href="#">{{ $heroes->email }}</a></p>
                </div>
                <div class="fb">
                    <h4 class="wj kk wm cc">Lieu du bureau</h4>
                    <p>{{ $heroes->address }}</p>
                </div>
                <div class="fb">
                    <h4 class="wj kk wm cc">Numéro de téléphone</h4>
                    <p><a href="#">{{ $heroes->phone }}</a></p>
                </div>
                <div class="fb">
                    <h4 class="wj kk wm cc">Liens directs:</h4>
                    <p><a href="#">{{ $heroes->lines }}</a></p>
                </div>


                <span class="rc nd rh tm lc fb"></span>

                <div>
                    <h4 class="wj kk wm qb">Médias sociaux</h4>
                    <ul class="tc wf cg">
                        @php
                            $whatsappMessage = urlencode("Bonjour, je suis intéressé(e) par plus d’informations sur vos services");
                        @endphp

                        @foreach ($socialnetworks as $socialnetwork)
                            <li>
                                @if($socialnetwork->platform === 'whatsapp')
                                    <a href="https://wa.me/{{ $socialnetwork->url }}?text=Bonjour%2C%20je%20suis%20intéressé(e)%20par%20vos%20services"
                                       target="_blank"
                                       class="tc wf yf bg">
                                        <img src="{{asset('whatsapp.svg')}}" alt="WhatsApp" class="w-6 h-6">

                                    </a>
                                @else
                                    <a href="{{ $socialnetwork->url }}"
                                       target="_blank"
                                       class="tc wf yf bg">
                                        <!-- Otros iconos con Lucide -->
                                        <i data-lucide="{{ $socialnetwork->icon }}"
                                           class="w-6 h-6 text-gray-600 hover:text-blue-500 transition-colors duration-300"></i>
                                    </a>
                                @endif
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="animate_top w-full nn/5 vo/3 vk sg hh sm yh tq">
                <!-- New divs below the original container -->
                <div class="container py-5">
                    <div class="row g-4">
                        <!-- Google Map Div -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Location</h5>
                                    <div class="map-responsive">
                                        <iframe
                                            src="https://maps.google.com/maps?q={{ $heroes->address }}&output=embed"
                                            width="100%"
                                            height="450"
                                            style="border:0;"
                                            allowfullscreen=""
                                        ></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- Image Div -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Image</h5>
                                    <img src="{{ asset('storage/'.$heroes->image_photo) }}" class="img-fluid rounded w-full" alt="Sample Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<!-- ===== Contact End ===== -->
