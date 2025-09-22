<!-- ===== Services Start ===== -->
<section class="lj tp kr">

    <div class="flex justify-center items-center bb ze ki xn yq mb en">
        <div class="flex flex-wrap justify-center gap-8">
           @foreach($services as $service)

            <div class="animate_top sg oi pi zq ml il am cn _m">
                <div class="flex justify-center gap-4 mb-4">
                    @foreach($service->images as $image)
                        <div class="flex flex-col items-center">
                            <a href="{{ route('sport', ['slug' => $service->title, 'sport' => $image->name]) }}" class="ek zj kk wm nb _b">
                                <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->name }}" class="w-32 h-32 filter dark:invert dark:bg-white rounded-2xl" />
                            </a>
                            <h1 class="text-center text-xl font-bold mt-2 ">{{ $image->name }}</h1>
                        </div>
                    @endforeach
                </div>
                <h4 class="ek zj kk wm nb _b">{{ $service->title }}</h4>
                <p>
                    {{ $service->description }}
                </p>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- ===== Services End ===== -->
