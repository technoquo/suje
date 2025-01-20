       {{-- <div x-data="carousel" x-init="startCarousel()" class="carousel w-full overflow-hidden relative mt-6">
            <div class="relative flex w-[400%] transition-transform duration-700"
                :style="`transform: translateX(-${(currentSlide - 1) * 100}%)`">

                <!-- Slide 1 -->
                <div class="carousel-item w-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp"
                        class="w-full" />
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item w-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp"
                        class="w-full" />
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item w-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp"
                        class="w-full" />
                </div>

                <!-- Slide 4 -->
                <div class="carousel-item w-full">
                    <img src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
                        class="w-full" />
ven                </div>
            </div>

            <!-- Navigation buttons -->
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <button @click="prevSlide()" class="btn btn-circle">❮</button>
                <button @click="nextSlide()" class="btn btn-circle">❯</button>
            </div>
        </div> --}}


        <div class="mt-6" x-data="{
            init() {
                new Glide(this.$refs.glide, {
                    perView: 3,
                    autoplay: 3000,
                    breakpoints: {
                        640: {
                            perView: 1,
                        },
                    },
                }).mount()
            },
        }">
        <div class="flex justify-center items-center w-full h-16 text-4xl mb-6">
        <h1>Galerie de la demiere activite</h1>
        </div>
        <div x-ref="glide" class="glide block relative px-12">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide flex flex-col items-center justify-center pb-6">
                       <img class="w-full" src="https://picsum.photos/800/400?random=1" alt="placeholder image">
                    </li>

                    <li class="glide__slide flex flex-col items-center justify-center pb-6">
                        <img class="w-full" src="https://picsum.photos/800/400?random=2" alt="placeholder image">
                    </li>

                    <li class="glide__slide flex flex-col items-center justify-center pb-6">
                       <img class="w-full" src="https://picsum.photos/800/400?random=3" alt="placeholder image">
                    </li>

                    <li class="glide__slide flex flex-col items-center justify-center pb-6">
                        <img class="w-full" src="https://picsum.photos/800/400?random=4" alt="placeholder image">
                    </li>

                    <li class="glide__slide flex flex-col items-center justify-center pb-6">
                       <img class="w-full" src="https://picsum.photos/800/400?random=5" alt="placeholder image">
                    </li>

                    <li class="glide__slide flex flex-col items-center justify-center pb-6">
                        <img class="w-full" src="https://picsum.photos/800/400?random=6" alt="placeholder image">
                    </li>
                </ul>
            </div>

            <div class="glide__arrows pointer-events-none absolute inset-0 flex items-center justify-between"
                data-glide-el="controls">
                <!-- Previous Button -->
                <button
                    class="glide__arrow glide__arrow--left pointer-events-auto disabled:opacity-50 rounded-lg border border-gray-200 p-1 inline-flex items-center justify-center"
                    data-glide-dir="<">
                    <span aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </span>
                    <span class="sr-only">Skip to previous slide page</span>
                </button>

                <!-- Next Button -->
                <button
                    class="glide__arrow glide__arrow--left pointer-events-auto disabled:opacity-50 rounded-lg border border-gray-200 p-1 inline-flex items-center justify-center"
                    data-glide-dir=">">
                    <span aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                    <span class="sr-only">Skip to next slide page</span>
                </button>
            </div>

            <!-- Bullets -->
            <div class="glide__bullets flex w-full items-center justify-center gap-1"
                data-glide-el="controls[nav]">
                <button class="glide__bullet h-3 w-3 rounded-full bg-gray-200 transition-colors"
                    data-glide-dir="=0"></button>
                <button class="glide__bullet h-3 w-3 rounded-full bg-gray-200 transition-colors"
                    data-glide-dir="=1"></button>
                <button class="glide__bullet h-3 w-3 rounded-full bg-gray-200 transition-colors"
                    data-glide-dir="=2"></button>
                <button class="glide__bullet h-3 w-3 rounded-full bg-gray-200 transition-colors"
                    data-glide-dir="=3"></button>
                <button class="glide__bullet h-3 w-3 rounded-full bg-gray-200 transition-colors"
                    data-glide-dir="=4"></button>
                <button class="glide__bullet h-3 w-3 rounded-full bg-gray-200 transition-colors"
                    data-glide-dir="=5"></button>
            </div>
        </div>
    </div>
