<!-- ===== Testimonials Start ===== -->
<section class="hj rp hr mt-6">
    <!-- Section Title Start -->
    <div>
        <div class="animate_top bb ze rj ki xn vq">
            <h2

                class="fk vj pr kk wm on/5 gq/2 bb _b"
            ></h2>
            <p class="bb on/5 wo/5 hq">Connaître les mérites professionnels</p>
        </div>
    </div>
    <!-- Section Title End -->

    <div class="bb ze ki xn ar">
        <div class="animate_top jb cq">
            <!-- Slider main container -->
            <div class="swiper testimonial-01">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach($testimonials as $testimonial)
                    <div class="swiper-slide">

                        <div class="i hh rm sg vk xm bi qj">
                            <!-- Border Shape -->
                            <span class="rc je md/2 gh xg h q r"></span>
                            <span class="rc je md/2 mh yg h q p"></span>

                            <div class="tc sf rn tn un zf dp">
                                <img class="bf" src="{{asset('storage/'.$testimonial->image)}}" alt="User" />

                                <div>
                                    <img src="images/icon-quote.svg" alt="Quote" />
                                    <p class="ek ik xj _p kc fb">
                                       {{$testimonial->testimony}}
                                    </p>

                                    <div class="tc yf vf">
                                        <div>
                                            <span class="rc ek xj kk wm zb">{{$testimonial->full_name}}</span>
                                            <span class="rc">{{$testimonial->position}}</span>
                                        </div>
                                        <div>
                                            <a href="{{route('professional')}}" class="lk gh dk rg tc wf xf _l gi hi">Allez reconnaître les mérites</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
                <!-- If we need navigation -->
                <div class="tc wf xf fg jb">
                    <div
                        class="swiper-button-prev c tc wf xf ie ld rg _g dh pf ml vr hh rm tl zm rl ym"
                    >
                        <svg
                            class="th lm"
                            width="14"
                            height="14"
                            viewBox="0 0 14 14"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M3.52366 7.83336L7.99366 12.3034L6.81533 13.4817L0.333663 7.00002L6.81533 0.518357L7.99366 1.69669L3.52366 6.16669L13.667 6.16669L13.667 7.83336L3.52366 7.83336Z"
                                fill=""
                            />
                        </svg>
                    </div>
                    <div
                        class="swiper-button-next c tc wf xf ie ld rg _g dh pf ml vr hh rm tl zm rl ym"
                    >
                        <svg
                            class="th lm"
                            width="14"
                            height="14"
                            viewBox="0 0 14 14"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z"
                                fill=""
                            />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== Testimonials End ===== -->
