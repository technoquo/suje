@extends('layouts.app')
@section('content')

@push('styles')

<style>
    /* toque dark */
    :root.dark .flatpickr-calendar {
        background: #111827; color: #e5e7eb; border-color: #374151;
    }
    :root.dark .flatpickr-day {
        color: #e5e7eb;
    }
    :root.dark .flatpickr-day.today {
        border-color: #3b82f6;
    }
    :root.dark .flatpickr-day.selected {
        background: #2563eb; border-color: #2563eb;
    }
</style>
@endpush
<main>
    <section class="ji gp uq">
        <div class="bb ze ki xn 2xl:ud-px-0">
            <div class="tc sf yo zf kq">
                <!-- Columna principal -->
                <div class="ro">
                    <div class="animate_top rounded-md shadow-solid-13  section border border-stroke dark:border-stroke dark p-7.5 md:p-10">
                        @php
                            use Illuminate\Support\Str;
                            // 1) Principal (puede ser null)
                            $mainImage = $product->image_path ? asset('storage/'.$product->image_path) : null;
                            // 2) Todas las imágenes relacionadas del producto
                            //    Soporta columnas: url | path | image_path
                            $relatedImages = collect($product->images ?? [])
                            ->map(function ($img) {
                            $u = $img->url ?? $img->path ?? $img->image_path ?? null;
                            if (!$u) return null;
                            // Si ya es absoluta, úsala tal cual; si es relativa, asume storage/
                            if (Str::startsWith($u, ['http://', 'https://'])) {
                            return $u;
                            }
                            return asset('storage/' . ltrim($u, '/'));
                            })
                            ->filter()        // quita null/empty
                            ->unique()        // deduplica
                            ->values()
                            ->all();
                            // 3) Arreglo final de todas las imágenes (principal + relacionadas), sin duplicados
                            $images = array_values(array_unique(array_filter(array_merge(
                            $mainImage ? [$mainImage] : [],
                            $relatedImages
                            ))));
                            // 4) Si necesitas miniaturas que NO repitan la principal:
                            $thumbs = array_values(array_filter($relatedImages, fn($u) => $u !== $mainImage));
                        @endphp
                        @if(count($images))
                            <!-- Imagen principal -->
                            <div id="mainImageContainer" class="w-full h-72 md:h-96 bg-gray-100 dark:bg-gray-800 rounded-md flex items-center justify-center mb-4 overflow-hidden">
                                <img id="mainImage" src="{{ $images[0] }}" alt="Imagen principal del producto" class="object-contain rounded-md">
                            </div>
                            <!-- Miniaturas -->
                            <div id="thumbsContainer" class="flex gap-3 overflow-x-auto px-10 md:px-12 no-scrollbar">
                                @foreach($images as $i => $src)
                                    <button
                                            type="button"
                                            class="thumb-btn shrink-0 w-20 h-16 md:w-24 md:h-20 border rounded-md flex items-center justify-center transition
                              {{ $i === 0 ? 'ring-2 ring-blue-500 border-blue-500' : 'border-gray-200 dark:border-gray-700' }}"
                                            data-src="{{ $src }}"
                                            aria-label="Miniatura {{ $i + 1 }}"
                                    >
                                        <img src="{{ $src }}" alt="Miniatura {{ $i + 1 }}" class="w-full h-full object-cover rounded-md" loading="lazy">
                                    </button>
                                @endforeach
                            </div>
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    const mainImage = document.getElementById('mainImage');
                                    const thumbs = document.querySelectorAll('#thumbsContainer .thumb-btn');

                                    thumbs.forEach(btn => {
                                        btn.addEventListener('click', () => {
                                            const newSrc = btn.dataset.src;
                                            mainImage.src = newSrc;

                                            // quitar clase activa de todas
                                            thumbs.forEach(b => b.classList.remove('ring-2', 'ring-blue-500', 'border-blue-500'));
                                            thumbs.forEach(b => b.classList.add('border-gray-200', 'dark:border-gray-700'));

                                            // agregar clase activa a la seleccionada
                                            btn.classList.add('ring-2', 'ring-blue-500', 'border-blue-500');
                                            btn.classList.remove('border-gray-200', 'dark:border-gray-700');
                                        });
                                    });
                                });
                            </script>
                        @endif
                        <!-- Título y descripción -->
                        <h2 class="ek vj 2xl:ud-text-title-lg kk wm nb gb mt-8 text-gray-900 dark:text-white">
                            {{ $product->name }}
                        </h2>
                        <div class="prose dark:prose-invert max-w-none mb-6">
                            {!! $product->description !!}
                        </div>
                        {{-- ==== Disponibilité + Réservation ==== --}}
                        <div id="rental-widget" class="mt-8 p-5 border rounded-lg bg-white dark:bg-blacksection">
                            <h3 class="text-lg font-semibold mb-4">Disponibilité de location</h3>

                            <!-- Selector de fechas -->
                            <label for="picker" class="text-sm font-medium text-gray-800">
                                Plage de dates
                            </label>
                            <div class="mt-2 w-72">
                                <input
                                        id="picker"
                                        type="text"
                                        class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi"
                                >
                            </div>

                            <!-- Campo cantidad -->
                            <div class="mt-4 w-32">
                                <label for="quantity" class="text-sm font-medium text-gray-800">
                                    Quantité
                                </label>
                                <input
                                        id="quantity"
                                        name="quantity"
                                        type="number"
                                        min="1"
                                        value="1"
                                        class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi text-center"
                                >
                            </div>

                            <!-- Botones -->
                            <div class="mt-6 flex items-center gap-4">
                                <button
                                        id="btn-check"
                                        type="button"
                                        class="lk gh dk rg tc wf xf _l gi hi"
                                        @click="
                                        window.dispatchEvent(new CustomEvent('add-to-cart', {
                                            detail: {
                                                id: {{ $product->id }},
                                                quantity: qty,

                                            }
                                        }));"
                                >
                                   Ajouter au panier
                                </button>

                                <button
                                        id="btn-reserve"
                                        type="button"
                                        class="lk gh dk rg tc wf xf _l gi hi text-white f"
                                >
                                    Réserver maintenant
                                </button>
                            </div>
                        </div>

                        <p id="availability-message" class="text-sm"></p>
                    </div>
                </div>
                <!-- Sidebar (buscador / tags, si lo necesitas) -->
                <div class="jn/2 so">
                    <div class="animate_top fb">
                        <form action="" method="POST" class="tc">
                            @csrf
                            <div class="i">
                                <input
                                        type="text"
                                        placeholder="Rechercher ici..."
                                        class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi"
                                        name="search"
                                />
                                <button class="h r q _h">
                                    <svg class="th ul ml il" width="21" height="21" viewBox="0 0 21 21" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                                d="M16.031 14.617L20.314 18.899L18.899 20.314L14.617 16.031C13.0237 17.3082 11.042 18.0029 9 18C4.032 18 0 13.968 0 9C0 4.032 4.032 0 9 0C13.968 0 18 4.032 18 9C18.0029 11.042 17.3082 13.0237 16.031 14.617ZM14.025 13.875C15.2941 12.5699 16.0029 10.8204 16 9C16 5.132 12.867 2 9 2C5.132 2 2 5.132 2 9C2 12.867 5.132 16 9 16C10.8204 16.0029 12.5699 15.2941 13.875 14.025L14.025 13.875Z"
                                        />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    {{-- Aquí puedes añadir más widgets laterales si los usas --}}
                </div>
            </div>
        </div>
    </section>
</main>
<x-partials.footer :heroes="$heroes" :socialnetworks="$socialnetworks"/>
<!-- ====== Back To Top Start ===== -->
<button
        class="xc wf xf ie ld vg sr gh tr g sa ta _a"
        @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
        :class="{ 'uc' : scrollTop }"
>
    <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path
                d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z"
        />
    </svg>
</button>
<!-- ====== Back To Top End ===== -->
@push('scripts')
<script>
    const occupiedRanges = @json($occupiedRanges);
    document.addEventListener('DOMContentLoaded', function () {
        let startDate = null;
        let endDate = null;

        // Inicializar Flatpickr
        flatpickr("#picker", {
            mode: "range",
            dateFormat: "Y-m-d",
            locale: "fr",
            minDate: "today",
            disable: occupiedRanges,

            onDayCreate: function(dObj, dStr, fp, dayElem) {
                const day = new Date(dayElem.dateObj);
                day.setHours(0,0,0,0);

                occupiedRanges.forEach(range => {
                    const from = new Date(range.from);
                    const to   = new Date(range.to);

                    from.setHours(0,0,0,0);
                    to.setHours(0,0,0,0);

                    if (day >= from && day <= to) {
                        dayElem.classList.add("flatpickr-occupied");
                    }
                });
            },

            onChange: function(selectedDates) {
                startDate = selectedDates[0]
                    ? flatpickr.formatDate(selectedDates[0], 'Y-m-d')
                    : null;
                endDate = selectedDates[1]
                    ? flatpickr.formatDate(selectedDates[1], 'Y-m-d')
                    : null;
            }
        });

        const btnCheck = document.getElementById('btn-check');
        const btnReserve = document.getElementById('btn-reserve');
        const messageBox = document.getElementById('availability-message');

        btnCheck.addEventListener('click', function () {
            alert('hola');
            {{--fetch("{{ route('rentals.check') }}", {--}}
            {{--    method: 'POST',--}}
            {{--    headers: {--}}
            {{--        'Accept': 'application/json',--}}
            {{--        'Content-Type': 'application/json',--}}
            {{--        'X-CSRF-TOKEN': '{{ csrf_token() }}',--}}
            {{--    },--}}
            {{--    body: JSON.stringify({--}}
            {{--        product_id: {{ $product->id }},--}}
            {{--        date_debut: startDate,--}}
            {{--        date_fin: endDate--}}
            {{--    }),--}}
            {{--})--}}
            {{--    .then(async res => {--}}
            {{--        if (!res.ok) {--}}
            {{--            const text = await res.text();--}}
            {{--            console.error("Erreur serveur:", res.status, text);--}}
            {{--            if (res.status === 401) {--}}
            {{--                messageBox.textContent = "Veuillez vous connecter pour vérifier la disponibilité.";--}}
            {{--                messageBox.className = "mt-3 text-sm text-red-600";--}}
            {{--                btnReserve.classList.add("f");--}}
            {{--                return;--}}
            {{--            }--}}
            {{--            throw new Error("Erreur serveur");--}}
            {{--        }--}}
            {{--        return res.json();--}}
            {{--    })--}}
            {{--    .then(data => {--}}
            {{--        if (data) {--}}
            {{--            messageBox.textContent = data.message;--}}
            {{--            if (data.available) {--}}
            {{--                messageBox.className = "mt-3 text-sm text-green-600";--}}
            {{--                btnReserve.classList.remove("f");--}}
            {{--            } else {--}}
            {{--                messageBox.className = "mt-3 text-sm text-red-600";--}}
            {{--                btnReserve.classList.add("f");--}}
            {{--            }--}}
            {{--        }--}}
            {{--    })--}}
            {{--    .catch(err => {--}}
            {{--        console.error("Catch error:", err);--}}
            {{--        messageBox.textContent = "Erreur inattendue.";--}}
            {{--        messageBox.className = "mt-3 text-sm text-red-600";--}}
            {{--        btnReserve.classList.add("f");--}}
            {{--    });--}}
        });

        // Acción del botón de reserva
        btnReserve.addEventListener('click', function () {
            fetch("{{ route('rentals.create') }}", {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({
                    product_id: {{ $product->id }},
                    quantity: document.getElementById('quantity').value,
                    date_debut: startDate,
                    date_fin: endDate
                }),
            })
                .then(res => res.json())
                .then(data => {

                    if (data.success) {

                        window.location.href = "/rentals/order/" + data.rental.id;
                    } else {
                        alert(data.message);
                    }
                });
        });
    });
</script>
@endpush
@endsection