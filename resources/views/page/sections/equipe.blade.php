<!-- ===== About Start ===== -->
<section class="ji gp uq 2xl:ud-py-35 pg">


    <div class="bb ze ki xn wq">
        <div class="tc wf gg qq">
            <!-- About Images -->
            <div class="animate_left xc gn gg jn/2 i" data-sr-id="50" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: all, opacity 2.8s cubic-bezier(0.5, 0, 0, 1), transform 2.8s cubic-bezier(0.5, 0, 0, 1);">
{{--                <div>--}}
{{--                    <img src="images/shape-05.svg" alt="Shape" class="h -ud-left-5 x">--}}
{{--                    <img src="images/about-01.png" alt="About" class="ib">--}}
{{--                    <img src="images/about-02.png" alt="About">--}}
{{--                </div>--}}
                <div>
                    <img src="images/shape-06.svg" alt="Shape">
                    <img src="{{asset('storage/'.$abouts->image3)}}" alt="About" class="ob gb" />
                    <img src="images/shape-07.svg" alt="Shape" class="bb">
                </div>
            </div>

            <!-- About Content -->
            <div class="animate_right jn/2" data-sr-id="53" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: all, opacity 2.8s cubic-bezier(0.5, 0, 0, 1), transform 2.8s cubic-bezier(0.5, 0, 0, 1);">
                <h4 class="ek yj mk gb">{{ $abouts->title }}</h4>
                <h2 class="fk vj zp pr kk wm qb"> {{ $abouts->subtitle }}</h2>
                <p class="uo">{{ $abouts->description }}</p>
                    <div class="tc yf vf mt-10">
                      <a href="{{route('teams')}}" class="lk gh dk rg tc wf xf _l gi hi">Venez rencontrer l'équipe</a>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>
<!-- ===== About End ===== -->
