<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Suje</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            lucide.createIcons();
        });
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')
</head>
<body
        x-data="{ page: 'home', 'darkMode': false, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
        x-init="
      darkMode = JSON.parse(localStorage.getItem('darkMode'));
      $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
        :class="{'b eh': darkMode === false}"
>
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
<!-- ===== Header Start ===== -->
<x-partials.header :heroes="$heroes"/>
<!-- ===== Header End ===== -->
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
                        <div id="rental-widget" class="mt-8 p-5 border border-stroke dark:border-strokedark rounded-lg bg-white dark:bg-blacksection">
                            <h3 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Disponibilité de location</h3>
                            <div
                                    x-data="{
                              startDate: null,
                              endDate: null,
                              picker: null,
                              init() {
                              this.picker = flatpickr(this.$refs.picker, {
                              mode: 'range',
                              dateFormat: 'Y-m-d', // más práctico para guardar
                              locale: 'fr',
                              onReady: (selectedDates, dateStr, instance) => {
                              if (this.startDate && this.endDate) {
                              instance.setDate([this.startDate, this.endDate]);
                              }
                              },
                              onChange: (selectedDates) => {
                              // cuando seleccionas
                              this.startDate = selectedDates[0]
                              ? flatpickr.formatDate(selectedDates[0], 'Y-m-d')
                              : null;
                              this.endDate = selectedDates[1]
                              ? flatpickr.formatDate(selectedDates[1], 'Y-m-d')
                              : null;
                              }
                              });
                              },
                              }"
                                    class="max-w-sm w-full"
                            >
                                <label for="picker" class="text-sm font-medium select-none text-gray-800">
                                    Plage de dates
                                </label>
                                <input
                                        x-ref="picker"
                                        name="picker"
                                        id="picker"
                                        type="text"
                                        class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi dark:text-white"
                                >
                                <!-- Para debug -->
{{--                                <div class="mt-2 text-sm text-gray-300 dark:text-gray-700">--}}
{{--                                    Début: <span x-text="startDate ?? '---'"></span><br>--}}
{{--                                    Fin: <span x-text="endDate ?? '---'"></span>--}}
{{--                                </div>--}}
                                <!-- Botón -->
                                <div class="mt-10">
                                    <button
                                            id="btn-check"
                                            type="button"
                                            class="lk gh dk rg tc wf xf _l gi hi"
                                            @click="alert(`Début: ${startDate ?? '---'}\nFin: ${endDate ?? '---'}`)"
                                    >
                                        Vérifier la disponibilité
                                    </button>
                                </div>
                            </div>
                        </div>
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
@stack('scripts')
<script src="{{ asset('js/bundle.js') }}"></script>
@livewireScripts>
{{-- Si Alpine no está en tu app.js, descomenta esta línea --}}
{{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
</body>
</html>