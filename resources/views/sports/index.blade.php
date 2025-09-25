@extends('layouts.app')
@section('content')
<section class="ji gp uq mt-6">
    <h2  class="fk vj pr kk wm on/5 gq/2 bb _b text-center uppercase">{{$service->title}} - {{$serviceImage->name}} </h2>
    <div class="bb ye ki xn vq jb jo">
        <div class="wc qf pn xo zf iq">

            <!-- Blog Item -->
            @foreach($groups as $sport)
                <div class="animate_top sg vk rm xm">
                    <div class="flex flex-col items-center justify-center w-full h-full p-4  border rounded-lg shadow sm:p-8">

                        <div class="block p-6  border border-gray-200 rounded-lg w-full flex flex-col items-center text-center" style="background-color: {{$sport->color}}">
                            <h5 class=" text-white">{{$sport->title}}</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400 mb-4">{{$sport->subtitle}}</p>

                            <a href="{{ route('sport.activities', ['slug' => $service->title,'sport' => $sport_slug, 'group' => $sport->title]) }}"
                               class="inline-block px-4 py-2 text-blue-700 bg-white rounded hover:bg-gray-200 transition mt-5">
                                Voir plus de détails
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
{{--    <div class="flex justify-center items-center bb ze ki xn yq mb en">--}}
{{--        <div class="flex flex-wrap justify-center gap-8">--}}
{{--            @foreach($services as $service)--}}

{{--                <div class="animate_top sg oi pi zq ml il am cn _m">--}}
{{--                    <div class="flex justify-center gap-4 mb-4">--}}
{{--                        @foreach($service->images as $image)--}}
{{--                            <div class="flex flex-col items-center">--}}
{{--                                <a href="{{ route('sport', ['slug' => $service->title, 'sport' => $image->name]) }}" class="ek zj kk wm nb _b">--}}
{{--                                    <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->name }}" class="w-32 h-32 filter dark:invert dark:bg-white rounded-2xl" />--}}
{{--                                </a>--}}
{{--                                <h1 class="text-center text-xl font-bold mt-2 ">{{ $image->name }}</h1>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                    <h4 class="ek zj kk wm nb _b">{{ $service->title }}</h4>--}}
{{--                    <p>--}}
{{--                        {{ $service->description }}--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            @endforeach--}}

{{--        </div>--}}
{{--    </div>--}}
</section>
@endsection