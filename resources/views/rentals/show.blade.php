@extends('layouts.app')
@section('content')
<section class="flex flex-col items-center justify-center min-h-screen  p-6">

    <!-- Título de la commande -->
    <h1 class="fk vj pr kk wm on/5 gq/2 bb _b  text-center">
        #Commande {{ $rental->id }}
    </h1>

    <!-- Card -->
    <div class="max-w-sm w-full bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mt-2">

        <!-- Imagen centrada -->
        <div class="flex justify-center items-center h-64 bg-gray-100 dark:bg-gray-700 rounded-t-lg">
            <img
                    class="object-contain max-h-full"
                    src="{{ asset($rental->product->image_path) }}"
                    alt="{{ $rental->product->name }}"
            />
        </div>

        <!-- Contenido -->
        <div class="p-5 text-center">
            <!-- Nombre del producto -->
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $rental->product->name }}
            </h5>

            <!-- Fechas -->
            <p class="mb-3 font-medium text-gray-700 dark:text-gray-300">
                Du <span class="font-semibold">{{ \Carbon\Carbon::parse($rental->date_debut)->format('d/m/Y') }}</span>
                au <span class="font-semibold">{{ \Carbon\Carbon::parse($rental->date_fin)->format('d/m/Y') }}</span>
            </p>

            <!-- Opcional: cantidad y precio -->
            @if(!empty($rental->quantity))
                <p class="text-gray-600 dark:text-gray-400">
                    Quantité : <span class="font-semibold">{{ $rental->quantity }}</span>
                </p>
            @endif

            <p class="text-gray-600 dark:text-gray-400">
                Prix total : <span class="font-semibold">{{ number_format($rental->prix_total, 2) }} €</span>
            </p>
        </div>
    </div>

</section>
@endsection