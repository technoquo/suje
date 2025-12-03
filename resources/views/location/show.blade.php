@extends('layouts.app')
@section('content')

    @push('styles')
        <style>
            :root.dark .flatpickr-calendar {
                background: #111827; color: #e5e7eb; border-color: #374151;
            }
            :root.dark .flatpickr-day { color: #e5e7eb; }
            :root.dark .flatpickr-day.today { border-color: #3b82f6; }
            :root.dark .flatpickr-day.selected { background: #2563eb; border-color: #2563eb; }
        </style>
    @endpush

    <main>


        <div
                x-data="{ isOpen: false, item: {} }"
                @add-to-cart.window="
        item = $event.detail;
        isOpen = true;
    "
                class="relative"
        >

            <!-- Fondo oscuro -->
            <div
                    x-show="isOpen"
                    x-transition.opacity
                    class="fixed inset-0 bg-black/50 z-40"
                    @click="isOpen = false"
            ></div>

            <!-- Modal centrado -->
            <div
                    x-show="isOpen"
                    x-transition
                    x-transition.duration.250ms
                    class="fixed inset-0 z-50 flex items-center justify-center p-4"
                    @keydown.escape.window="isOpen = false"
            >
                <div class="bg-white dark:bg-gray-900 rounded-lg shadow-2xl w-full max-w-md p-6">

                    <!-- Título -->
                    <h2 class="text-xl font-bold mb-4 text-center">
                        Produit ajouté au panier
                    </h2>

                    <!-- Contenido -->
                    <div class="space-y-2 text-gray-800 dark:text-gray-200">

                        <p><strong>Nom :</strong> <span x-text="item.name"></span></p>

                        <p><strong>Quantité :</strong> <span x-text="item.quantity"></span></p>

                        <p><strong>Prix / Jour :</strong> €<span x-text="item.price"></span></p>

                        <p><strong>Total :</strong> €<span x-text="item.total"></span></p>

                        <template x-if="item.start_date">
                            <p><strong>Début :</strong> <span x-text="item.start_date"></span></p>
                        </template>

                        <template x-if="item.end_date">
                            <p><strong>Fin :</strong> <span x-text="item.end_date"></span></p>
                        </template>

                    </div>

                    <!-- BOTONES -->
                    <div class="mt-6 flex flex-col gap-3">

                        <!-- Voir Panier -->
                        <a
                                href="{{route('cart.index')}}"
                                class="w-full text-center bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition"
                        >
                            Voir le panier
                        </a>

                        <!-- Continuer -->
                        <a
                                href="{{ route('location.index') }}"
                                class="w-full text-center bg-gray-300 dark:bg-gray-700 dark:text-white py-2 rounded-lg hover:bg-gray-400 dark:hover:bg-gray-600 transition"
                        >
                            Continuer
                        </a>
                    </div>

                </div>
            </div>

        </div>






        <!-- ========== PAGE PRODUCTO ========== -->
            <section class="ji gp uq">
                <div class="bb ze ki xn 2xl:ud-px-0">
                    <div class="tc sf yo zf kq">

                        <!-- Columna principal -->
                        <div class="ro">
                            <div class="animate_top rounded-md shadow-solid-13  section border border-stroke dark:border-stroke dark p-7.5 md:p-10">

                                @php
                                    use Illuminate\Support\Str;

                                    $mainImage = $product->image_path ? asset('storage/' . $product->image_path) : null;

                                    $relatedImages = collect($product->images ?? [])
                                        ->map(function ($img) {
                                            $u = $img->url ?? $img->path ?? $img->image_path ?? null;
                                            if (!$u) return null;

                                            return Str::startsWith($u, ['http://', 'https://'])
                                                ? $u
                                                : asset('storage/' . ltrim($u, '/'));
                                        })
                                        ->filter()
                                        ->unique()
                                        ->values()
                                        ->all();

                                    $images = array_values(array_unique(array_filter(array_merge(
                                        $mainImage ? [$mainImage] : [],
                                        $relatedImages
                                    ))));
                                @endphp

                                @if(count($images))
                                    <div id="mainImageContainer"
                                         class="w-full h-72 md:h-96 bg-gray-100 dark:bg-gray-800 rounded-md flex items-center justify-center mb-4 overflow-hidden">
                                        <img id="mainImage" src="{{ $images[0] }}" class="object-contain rounded-md">
                                    </div>

                                    <div id="thumbsContainer" class="flex gap-3 overflow-x-auto px-10 md:px-12 no-scrollbar">
                                        @foreach($images as $i => $src)
                                            <button
                                                    type="button"
                                                    class="thumb-btn shrink-0 w-20 h-16 md:w-24 md:h-20 border rounded-md flex items-center justify-center transition
                                            {{ $i === 0 ? 'ring-2 ring-blue-500 border-blue-500' : 'border-gray-200 dark:border-gray-700' }}"
                                                    data-src="{{ $src }}"
                                            >
                                                <img src="{{ $src }}" class="w-full h-full object-cover rounded-md">
                                            </button>
                                        @endforeach
                                    </div>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', () => {
                                            const mainImage = document.getElementById('mainImage');
                                            const thumbs = document.querySelectorAll('#thumbsContainer .thumb-btn');

                                            thumbs.forEach(btn => {
                                                btn.addEventListener('click', () => {
                                                    mainImage.src = btn.dataset.src;

                                                    thumbs.forEach(b => b.classList.remove('ring-2', 'ring-blue-500', 'border-blue-500'));
                                                    thumbs.forEach(b => b.classList.add('border-gray-200', 'dark:border-gray-700'));

                                                    btn.classList.add('ring-2', 'ring-blue-500', 'border-blue-500');
                                                    btn.classList.remove('border-gray-200', 'dark:border-gray-700');
                                                });
                                            });
                                        });
                                    </script>
                                @endif


                                <div class="mt-8 uppercase">
                                    {{ $product->name }}
                                </div>

                                <p class="mt-2 mb-4">
                                    Prix : €{{ number_format($product->price_per_day, 2, ',', ' ') }} / jour
                                </p>

                                <div class="prose dark:prose-invert max-w-none mb-6">
                                    {!! $product->description !!}
                                </div>


                                <!-- ===== WIDGET DE RENTA ===== -->
                                <div id="rental-widget" class="mt-8 p-5 border rounded-lg bg-white dark:bg-blacksection">
                                    <h3 class="text-lg font-semibold mb-4">Disponibilité de location</h3>

                                    <!-- Fecha -->
                                    <label class="text-sm font-medium text-gray-800">Plage de dates</label>
                                    <div class="mt-2 w-72">
                                        <input id="picker" type="text" class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi">
                                    </div>

                                    <!-- Cantidad -->
                                    <div class="mt-4 w-32">
                                        <label class="text-sm font-medium text-gray-800">Quantité</label>
                                        <input id="quantity" type="number" min="1" value="1"
                                               class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi text-center">
                                    </div>

                                    <!-- Botón Add to Cart -->
                                    <div class="mt-6">
                                        <button id="btn-check" type="button"
                                                class="lk gh dk rg tc wf xf _l gi hi w-full">
                                            Ajouter au panier
                                        </button>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Sidebar -->
                        <div class="jn/2 so">
                            <div class="animate_top fb">
                                <form class="tc">
                                    <div class="i">
                                        <input type="text" placeholder="Rechercher ici..."
                                               class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi">
                                        <button class="h r q _h">
                                            🔍
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div> <!-- cierre global Alpine -->

    </main>


    <x-partials.footer :heroes="$heroes" :socialnetworks="$socialnetworks"/>

    @push('scripts')
        <script>
            const occupiedRanges = @json($occupiedRanges);

            document.addEventListener('DOMContentLoaded', function () {

                let startDate = null;
                let endDate = null;

                flatpickr("#picker", {
                    mode: "range",
                    locale: "fr",
                    dateFormat: "Y-m-d",
                    minDate: "today",
                    disable: occupiedRanges,

                    onChange: function(selectedDates) {
                        startDate = selectedDates[0] ? flatpickr.formatDate(selectedDates[0], 'Y-m-d') : null;
                        endDate   = selectedDates[1] ? flatpickr.formatDate(selectedDates[1], 'Y-m-d') : null;
                    },
                });

                // Evento Add to Cart
                const originalBtn = document.getElementById('btn-check');
                originalBtn.replaceWith(originalBtn.cloneNode(true)); // ← limpia cualquier listener repetido

                const btnCheck = document.getElementById('btn-check');

                btnCheck.addEventListener('click', function () {

                    const qty = parseInt(document.getElementById('quantity').value);
                    const price = {{ $product->price_per_day }};
                    const image = "{{ $images[0] ?? '' }}";

                    // Validación de fechas
                    if (!startDate || !endDate) {
                        alert("Veuillez sélectionner une plage de dates avant d'ajouter au panier.");
                        return;
                    }

                    console.log("✔ Listener ejecutado una sola vez — Cantité:", qty);

                    window.dispatchEvent(new CustomEvent('add-to-cart', {
                        detail: {
                            id: {{ $product->id }},
                            name: "{{ $product->name }}",
                            image: image,
                            quantity: qty,
                            price: price,
                            total: qty * price,
                            start_date: startDate,
                            end_date: endDate
                        }
                    }));
                });

            });
        </script>

    @endpush

@endsection
