@extends('layouts.app')
@section('content')

    <section class="ji gp uq">
        <!-- Título -->
        <div>
            <div class="animate_top bb ze rj ki xn vq">
                <h2 class="fk vj pr kk wm on/5 gq/2 bb _b">Paiement</h2>
            </div>
        </div>

        <div class="bb ye ki xn vq jb jo">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 w-full">

                <!-- ========== FORMULARIO ========== -->
                <div class="animate_top bg-white p-6 rounded-lg shadow-md">
                    <form action="" method="POST" class="space-y-4">
                        @csrf

                        <div>
                            <label for="fullname">Nom complet</label>
                            <input type="text" id="fullname" name="fullname"
                                   class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                                   value="{{ $user->name }}"
                            >
                        </div>

                        <div>
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email"
                                   class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi"
                                   value="{{ $user->email }}"
                            >
                        </div>

                        <div>
                            <label for="message">Adresse complète de votre domicile</label>
                            <textarea id="message" name="message" rows="4"
                                      class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 ci"></textarea>
                        </div>

                        <button class="vc rg lk gh ml il hi gi _l">
                            Passer une commande
                        </button>
                    </form>
                </div>

                <!-- ========== RESUMEN DEL CARRITO ========== -->
                <div class="animate_top bg-gray-50 p-6 rounded-lg shadow-md"
                     x-data="cart()" x-init="init()">

                    <h3 class="text-xl font-bold mb-4">Résumé de la commande</h3>

                    <!-- LISTA DE PRODUCTOS -->
                    <template x-for="item in Object.values(items)" :key="item.id">
                        <div class="flex gap-4 p-4 bg-white rounded-lg shadow mb-4">

                            <!-- Imagen -->
                            <img :src="item.image"
                                 class="w-24 h-24 object-cover rounded">

                            <!-- Info -->
                            <div class="flex-1">
                                <p class="font-bold text-lg" x-text="item.name"></p>

                                <p class="text-sm mt-1">
                                    Prix par jour :
                                    <strong>€<span x-text="item.price"></span></strong>
                                </p>

                                <p class="text-sm">
                                    Quantité :
                                    <strong x-text="item.quantity"></strong>
                                </p>

                                <p class="text-sm">
                                    Date début :
                                    <strong x-text="item.date_debut"></strong>
                                </p>

                                <p class="text-sm">
                                    Date fin :
                                    <strong x-text="item.date_fin"></strong>
                                </p>

                                <p class="mt-2 text-green-700 font-bold">
                                    Total :
                                    €<span x-text="item.total_price"></span>
                                </p>
                            </div>

                        </div>
                    </template>

                    <!-- TOTAL GENERAL -->
                    <template x-if="Object.keys(items).length > 0">
                        <div class="mt-6 p-4 bg-white rounded shadow text-right font-bold text-lg">
                            Total général :
                            €<span x-text="totalGeneral()"></span>
                        </div>
                    </template>

                </div>

            </div>

        </div>

    </section>

@endsection
