<!-- ===== Blog Start ===== -->
<section class="ji gp uq">
    <!-- Section Title Start -->
    <div
        x-data="{ sectionTitle: `Blogs Récents`}"
    >
        <div class="animate_top bb ze rj ki xn vq">
            <h2
                x-text="sectionTitle"
                class="fk vj pr kk wm on/5 gq/2 bb _b"
            ></h2>

        </div>
    </div>
    <!-- Section Title End -->

    <div class="bb ye ki xn vq jb jo">
        <div class="wc qf pn xo zf iq">
            <!-- Blog Item -->

            @foreach($posts as $post)
                <div class="animate_top sg vk rm xm">
                    <div class="c rc i z-1 pg">
                        <img class="w-full" src="{{asset('storage/'. $post->image)}}" alt="{{$post->title}}" />

                        <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                            <a
                                href="{{route('blog', $post->slug)}}"
                                class="vc ek rg lk gh sl ml il gi hi"
                            >Plus d'informations</a
                            >
                        </div>
                    </div>

                    <div class="yh">
                        <div class="tc uf wf ag jq">
                            <div class="tc wf ag">
                                <img src="images/icon-man.svg" alt="User" />
                                <p>{{$post->user->name}}</p>
                            </div>
                            <div class="tc wf ag">
                                <img src="images/icon-calender.svg" alt="Calender" />
                                <p>{{ \Carbon\Carbon::parse($post->date_published)->translatedFormat('l, d F Y') }}</p>
                            </div>
                        </div>
                        <h4 class="ek tj ml il kk wm xl eq lb">
                            <a  href="{{route('blog', $post->slug)}}"
                            >{{ $post->title }}</a
                            >
                        </h4>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</section>
<!-- ===== Blog End ===== -->
