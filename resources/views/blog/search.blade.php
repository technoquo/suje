@extends('layouts.app')
@section('content')
<!-- ===== Header End ===== -->
<body
    x-data="{ page: 'home', 'darkMode': false, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b eh': darkMode === false}"
>
<section class="ji gp uq">
        <div class="animate_top bb ze rj ki xn vq">
            <h2 class="fk vj pr kk wm on/5 gq/2 bb _b"
            >Résultats des blogs</h2>
        </div>

    <div class="bb ye ki xn vq jb jo">
        @if($posts->isEmpty())
            <div>
            @else
            <div class="wc qf pn xo zf iq">
             @endif

            <!-- Blog Item -->
            @forelse($posts as $post)
            <div class="animate_top sg vk rm xm">
                <div class="c rc i z-1 pg">
                    <img class="w-full" src="{{asset('storage/'. $post->image)}}" alt="Blog" />

                    <div
                        class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10"
                    >
                        <a href="{{route('blog', $post->slug)}}" class="vc ek rg lk gh sl ml il gi hi"
                        >Plus d'informations</a
                        >
                    </div>
                </div>

                <div class="yh">
                    <div class="tc uf wf ag jq">
                        <div class="tc wf ag">
                            <img src="../images/icon-man.svg" alt="User" />
                            <p>{{$post->user->name}}</p>
                        </div>
                        <div class="tc wf ag">
                            <img src="../images/icon-calender.svg" alt="Calender" />
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
                @empty
                    <div class="flex items-center justify-center min-h-[200px] w-full">
                        <p class="text-center text-gray-500 text-lg font-medium">
                            Aucun article trouvé.
                        </p>
                    </div>
                @endforelse

        </div>


    </div>
</section>

<x-partials.footer :heroes="$heroes"  :socialnetworks="$socialnetworks"/>

<!-- ====== Back To Top Start ===== -->
<button
    class="xc wf xf ie ld vg sr gh tr g sa ta _a"
    @click="window.scrollTo({top: 0, behavior: 'smooth'})"
    @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
    :class="{ 'uc' : scrollTop }"
>
    <svg
        class="uh se qd"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512"
    >
        <path
            d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"
        />
    </svg>
</button>
<!-- ====== Back To Top End ===== -->
@endsection
