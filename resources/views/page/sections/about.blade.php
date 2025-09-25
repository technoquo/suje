<!-- ===== About Start ===== -->
<section class="mt-10">


        <div class="tc wf gg qq">
            <!-- About Images -->
            <div class="animate_left xc gn gg jn/2 i">
                <div>
                    <img
                        src="images/shape-05.svg"
                        alt="Shape"
                        class="h -ud-left-5 x"
                    />
                    <img src="{{asset('storage/'.$abouts->image1)}}" alt="About" class="ib" />
                    <img src="{{asset('storage/'.$abouts->image2)}}" alt="About" />
                </div>
                <div>
                    <img src="images/shape-06.svg" alt="Shape" />
                    <img src="{{asset('storage/'.$abouts->image3)}}" alt="About" class="ob gb" />
                    <img src="images/shape-07.svg" alt="Shape" class="bb" />
                </div>
            </div>

            <!-- About Content -->
            <div class="animate_right jn/2">
                <h4 class="ek yj mk gb">{{ $abouts->title }}</h4>
                <h2 class="fk vj zp pr kk wm qb">
                  {{ $abouts->subtitle }}
                </h2>
                <p class="uo">
                   {{ $abouts->description }}
                </p>
                <a
                    data-fslightbox
                    href="#vimeo"
                    class="vc wf hg mb">
                     <span class="tc wf xf be dd rg i gh ua">
                    <span class="nf h vc yc vd rg gh qk -ud-z-1"></span>
                     <img src="images/icon-play.svg" alt="Play" />
                </span>
                    <span class="kk">COMMENT NOUS TRAVAILLONS</span>
                </a>
                <iframe
                    src="{{ $abouts->link_video }}"
                    id="vimeo"
                    class="fslightbox-source"
                    width="1280"
                    height="720"
                    allow="autoplay; fullscreen"
                    allowFullScreen
                ></iframe>

            </div>
        </div>

</section>
<!-- ===== About End ===== -->
