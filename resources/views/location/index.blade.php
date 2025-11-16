@extends('layouts.app')
@section('content')
<!-- ===== Blog Start ===== -->
{{--<section class="ji gp uq" >--}}
{{--    <!-- Section Title Start -->--}}
{{--    <div>--}}

{{--        <div class="animate_top bb ze rj ki xn vq ">--}}
{{--            <h2--}}

{{--                class="fk vj pr kk wm on/5 gq/2 bb _b"--}}
{{--            >Tous les produits</h2>--}}

{{--        </div>--}}
{{--        <div class="flex justify-center mx-auto">--}}
{{--            <form action="{{ route('blog.search') }}" method="POST" class="tc">--}}
{{--                @csrf--}}
{{--                <div class="i">--}}
{{--                    <input--}}
{{--                        type="text"--}}
{{--                        placeholder="Rechercher ici..."--}}
{{--                        class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi"--}}
{{--                        name="search"--}}
{{--                    />--}}

{{--                    <button class="h r q _h">--}}
{{--                        <svg--}}
{{--                            class="th ul ml il"--}}
{{--                            width="21"--}}
{{--                            height="21"--}}
{{--                            viewBox="0 0 21 21"--}}
{{--                            fill="none"--}}
{{--                            xmlns="http://www.w3.org/2000/svg"--}}
{{--                        >--}}
{{--                            <path--}}
{{--                                d="M16.031 14.617L20.314 18.899L18.899 20.314L14.617 16.031C13.0237 17.3082 11.042 18.0029 9 18C4.032 18 0 13.968 0 9C0 4.032 4.032 0 9 0C13.968 0 18 4.032 18 9C18.0029 11.042 17.3082 13.0237 16.031 14.617ZM14.025 13.875C15.2941 12.5699 16.0029 10.8204 16 9C16 5.132 12.867 2 9 2C5.132 2 2 5.132 2 9C2 12.867 5.132 16 9 16C10.8204 16.0029 12.5699 15.2941 13.875 14.025L14.025 13.875Z"--}}
{{--                            />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Section Title End -->--}}

{{--    <div class="bb ye ki xn vq jb jo">--}}
{{--        <div class="wc qf pn xo zf iq">--}}
{{--            <!-- Blog Item -->--}}

{{--            @foreach($products as $product)--}}
{{--                <div class="animate_top sg vk rm xm">--}}
{{--                    <div class="c rc i z-1 pg">--}}
{{--                        @if($product->image_path)--}}
{{--                        <img class="w-full" src="{{asset('storage/'. $product->image_path)}}" alt="{{$product->name}}" />--}}
{{--                        @endif--}}

{{--                    </div>--}}

{{--                    <div class="text-center">--}}

{{--                        <h4 class="ek tj ml il kk wm xl eq lb">--}}
{{--                            <a href="{{route('location.show', $product->slug)}}"--}}
{{--                            >{{ $product->name }}</a--}}
{{--                            >--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                    <p class="ek il wm eq lb">{{ $product->description }}</p>--}}
{{--                    <ul class="text-sm space-y-1 mb-4">--}}
{{--                        <li class="">--}}
{{--                            Prix : €{{ number_format($product->price_per_day, 2) }} / jour--}}
{{--                        </li>--}}
{{--                        <li class="wm">--}}
{{--                            Stock : {{ $product->stock }}--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <div class="mb-10 text-center">--}}
{{--                        <a href="{{route('location.show', $product->slug)}}" class="rg lk gh  ml il gi hi">Louer maintenant</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- ===== Blog End ===== -->
<!-- ===== Location Section Start ===== -->
<section class="ji gp uq">

    <livewire:category-product />

</section>
<!-- ===== Location Section End ===== -->
@endsection
