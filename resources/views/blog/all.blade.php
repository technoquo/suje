@extends('layouts.app')
@section('content')
<!-- ===== Blog Start ===== -->
<section class="ji gp uq">
    <!-- Section Title Start -->
    <div>

        <div class="animate_top bb ze rj ki xn vq">
            <h2

                class="fk vj pr kk wm on/5 gq/2 bb _b"
            >Tous les blogs</h2>

        </div>
        <div class="flex justify-center mx-auto">
        <form action="{{ route('blog.search') }}" method="POST" class="tc">
            @csrf
            <div class="i">
                <input
                    type="text"
                    placeholder="Rechercher ici..."
                    class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi"
                    name="search"
                />

                <button class="h r q _h">
                    <svg
                        class="th ul ml il"
                        width="21"
                        height="21"
                        viewBox="0 0 21 21"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M16.031 14.617L20.314 18.899L18.899 20.314L14.617 16.031C13.0237 17.3082 11.042 18.0029 9 18C4.032 18 0 13.968 0 9C0 4.032 4.032 0 9 0C13.968 0 18 4.032 18 9C18.0029 11.042 17.3082 13.0237 16.031 14.617ZM14.025 13.875C15.2941 12.5699 16.0029 10.8204 16 9C16 5.132 12.867 2 9 2C5.132 2 2 5.132 2 9C2 12.867 5.132 16 9 16C10.8204 16.0029 12.5699 15.2941 13.875 14.025L14.025 13.875Z"
                        />
                    </svg>
                </button>
            </div>
        </form>
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
@endsection