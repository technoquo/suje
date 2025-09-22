@extends('layouts.app')
@section('content')
    <!-- ===== Blog Start ===== -->
    <section class="ji gp uq" >
        <!-- Section Title Start -->

            <div class="animate_top bb ze rj ki xn vq ">
                <h2

                    class="fk vj pr kk wm on/5 gq/2 bb _b"
                >Galeries</h2>

            </div>

        <!-- Section Title End -->

        <div class="bb ye ki xn vq jb jo">
            <div class="wc qf pn xo zf iq">
                <!-- Galleries -->

                @foreach($galleries as $gallery)
                    <div class="animate_top sg vk rm xm">
                        <div class="c rc i z-1 pg">
                            <img class="w-full" src="{{asset('storage/'. $gallery->image)}}" alt="" />

                            <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                                <a
                                    href="{{route('galeries.show', ['year' => $gallery->years->year])}}"
                                    class="vc ek rg lk gh sl ml il gi hi"
                                >{{$gallery->years->year}}</a
                                >
                            </div>
                        </div>

                        <div class="yh">
                            <div class="tc uf wf ag jq">
                                <div class="tc wf ag">

                                    <p>{{$gallery->title}}</p>
                                </div>

                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ===== Blog End ===== -->
@endsection
