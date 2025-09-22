@extends('layouts.app')
@section('content')
    <!-- ===== Blog Start ===== -->
    <section class="ji gp uq" >
        <!-- Section Title Start -->

            <div class="animate_top bb ze rj ki xn vq ">
                <h2

                    class="fk vj pr kk wm on/5 gq/2 bb _b"
                >{{$year}}</h2>

            </div>

        <!-- Section Title End -->

        <div class="bb ye ki xn vq jb jo">
            <div class="wc qf pn xo zf iq">
                <!-- Galleries -->
                @foreach($images as $image)

                    <div class="animate_top sg vk rm xm">
                        <div class="c rc i z-1 pg">
                            <img class="w-full" src="{{ asset('storage/'. $image->image_path) }}" alt="{{$image->image_alt}}" />
                        </div>
                        <div class="text-center">{{$image->image_alt}}</div>
                    </div>
                @endforeach


                <!-- End Galleries -->
            </div>
        </div>
    </section>
    <!-- ===== Blog End ===== -->
@endsection