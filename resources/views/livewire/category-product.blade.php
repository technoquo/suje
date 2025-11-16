<div
        x-data="{ isOpen: false, selectedProductId: null }"
        @open-slide-over.window="
        isOpen = true;
        selectedProductId = $event.detail?.id;
    "
        @close="isOpen = false"
>


    <form class="max-w-sm mx-auto justify-end mb-6">
        <label for="products" class="block mb-2 font-medium text-gray-900 dark:text-white text-2xl text-center">
            Sélectionner le produit
        </label>
        <select id="products" wire:model.live="selectedCategory"
                class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi">
                 <option  class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi" value="0" selected>Tous</option>
            @foreach ($categories as $category)
                <option  class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi" value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </form>
        <div class="bb ye ki xn vq jb jo">
            <div class="wc qf pn xo zf iq">
                <!-- Blog Item -->

                @foreach($groupedProducts as $product)
                    <div class="animate_top sg vk rm xm">
                        <div class="c rc i z-1 pg">
                            @if($product->image_path)
                            <img class="w-full" src="{{asset('storage/'. $product->image_path)}}" alt="{{$product->name}}" />
                            @endif

                        </div>

                        <div class="text-center">

                            <h4 class="ek tj ml il kk wm xl eq lb">
                                <a href="{{route('location.show', $product->slug)}}"
                                >{{ $product->name }}</a
                                >
                            </h4>
                        </div>
                        <p class="ek il wm eq lb">{{ $product->description }}</p>
                        <ul class="text-sm space-y-1 mb-4">
                            <li class="">
                                Prix : €{{ number_format($product->price_per_day, 2) }} / jour
                            </li>
                            <li class="wm">
                                Stock : {{ $product->stock }}
                            </li>
                        </ul>
                        <div class="mb-10 text-center">
                            <a href="{{route('location.show', $product->slug)}}" class="rg lk gh  ml il gi hi">Louer maintenant</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</div>
