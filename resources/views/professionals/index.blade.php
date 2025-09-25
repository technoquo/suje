@extends('layouts.app')
@section('content')
    <!-- ===== Professionals Start ===== -->
    <section class="ji gp uq">
        <!-- Bg Shapes -->
        <span class="rc h s r vd fd/5 fh rm"></span>
        <img src="images/shape-08.svg" alt="Shape Bg" class="h q r"/>
        <img src="images/shape-09.svg" alt="Shape" class="of h y z/2"/>
        <img src="images/shape-10.svg" alt="Shape" class="h _ aa"/>
        <img src="images/shape-11.svg" alt="Shape" class="of h m ba"/>

        <!-- Section Title Start -->
        <div
            x-data="{ sectionTitle: `Connaître les mérites professionnels`}"
            class="bb ye ki xn vq jb jo"
        >
            <div class="animate_top bb ze rj ki xn vq">
                <h2
                    x-text="sectionTitle"
                    class="fk vj pr kk wm on/5 gq/2 bb _b"
                ></h2>

            </div>
        </div>
        <!-- Section Title End -->

        <div class="bb ze i va ki xn xq jb jo">
            <div class="wc qf pn xo gg cp">

                @foreach($professionals as $professional)

                    <div class="animate_top rj">
                        <div class="c i pg z-1">
                            <a
                                data-fslightbox
                                href="#vimeo-{{$professional->id}}">
                                <img class="vd" src="{{ asset('storage/' . $professional->image) }}"
                                     alt="{{ $professional->full_name }}"/>
                            </a>


                            <div class="ef im nl il">

                  <span
                      class="h -ud-left-5 -ud-bottom-21 rc de gd gh if wa"
                  ></span>
                                <span class="h s p rc vd hd mh va"></span>
                                <div class="h s p vd ij jj xa">
                                    <h4 class="yj go kk wm ob zb">{{$professional->full_name}}</h4>
                                </div>

                            </div>
                        </div>
                        <iframe
                            src="{{$professional->vimeo_url}}"
                            id="vimeo-{{$professional->id}}"
                            class="fslightbox-source"
                            width="1280"
                            height="720"

                            allow="autoplay; fullscreen"
                            allowFullScreen
                        ></iframe>


                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection