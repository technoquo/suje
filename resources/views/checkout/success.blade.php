@extends('layouts.app')

@section('content')

    <section class="ji gp uq">

        <div class="bb ze ki xn vq">
            <div class="animate_top rj ki xn">
                <h2 class="fk vj zp pr kk wm qb text-center">
                    🎉 Commande réussie !
                </h2>
            </div>
        </div>

        <div class="bb ye ki xn vq jb jo">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                {{-- Texto de confirmación --}}
                <div class="animate_right jn/2">
                    <h4 class="ek yj mk gb">Merci pour votre commande</h4>

                    <h2 class="fk vj zp pr kk wm qb">
                        Votre commande a été enregistrée avec succès !
                    </h2>

                    <p class="uo">
                        Bonjour <strong>{{ $order->fullname }}</strong>,<br>
                        Nous avons bien reçu votre commande <strong>#{{ $order->id }}</strong>.
                        Un email de confirmation vous sera envoyé très bientôt.
                    </p>

                    <p class="uo mt-4">
                        Vous pouvez suivre le statut de votre commande depuis votre espace
                        Filament si vous êtes administrateur.
                    </p>

                    <div class="tc yf vf mt-10">
                        <a href="{{ route('location.index') }}"
                           class="lk gh dk rg tc wf xf _l gi hi">
                            Continuer à louer
                        </a>
                    </div>
                </div>

                {{-- Resumen rápido --}}
                <div class="animate_left bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Résumé de votre commande</h3>

                    <p class="mb-2"><strong>Nom :</strong> {{ $order->fullname }}</p>
                    <p class="mb-2"><strong>Email :</strong> {{ $order->email }}</p>
                    <p class="mb-2"><strong>Total payé :</strong> €{{ number_format($order->total, 2) }}</p>

                    <div class="border-t mt-4 pt-4">
                        <h4 class="font-semibold mb-2">Produits</h4>

                        @foreach ($order->items as $item)
                            <div class="flex items-start gap-4 p-3 bg-gray-50 rounded-lg mb-3">
                                <img src="{{ $item->image }}" class="w-20 h-20 object-cover rounded">

                                <div class="flex-1">
                                    <p class="font-bold">{{ $item->name }}</p>
                                    <p class="text-sm">Quantité : {{ $item->quantity }}</p>
                                    <p class="text-sm">Jours : {{ $item->days }}</p>
                                    <p class="text-sm">Prix total : €{{ $item->total_price }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>

    </section>

@endsection
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Eliminar solo los items del carrito
            localStorage.removeItem('cart_items');

            // Si también quieres eliminar contador u otra data
            // localStorage.removeItem('cart_count');

            console.log("🧹 Carrito eliminado del localStorage después del checkout.");
        });
    </script>
@endpush