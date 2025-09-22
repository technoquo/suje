@extends('layouts.app')
@section('content')
    <!-- ===== Formulaire d'Inscription Début ===== -->
    <section class="i pg fh rm ki xn vq gj qp gr hj rp hr">
        <!-- Formes d'arrière-plan -->
        <img src="images/shape-06.svg" alt="Forme" class="h j k" />
        <img src="images/shape-03.svg" alt="Forme" class="h l m" />
        <img src="images/shape-17.svg" alt="Forme" class="h n o" />
        <img src="images/shape-18.svg" alt="Forme" class="h p q" />

        <div class="animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp">
            <!-- Bordure d'arrière-plan -->
            <span class="rc h r s zd/2 od zg gh"></span>
            <span class="rc h r q zd/2 od xg mh"></span>

            <form class="sb" action="{{ route('register.store') }}" method="POST">
                @csrf

                <div class="wb">
                    <label class="rc kk wm vb" for="fullname">Nom complet</label>
                    <input
                            type="text"
                            name="fullname"
                            id="fullname"
                            placeholder="Jean Dupont"
                            class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40"
                            value="{{ old('fullname') }}"
                    />
                    @error('fullname') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <div class="wb">
                    <label class="rc kk wm vb" for="email">Email</label>
                    <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="exemple@gmail.com"
                            class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40"
                            value="{{ old('email') }}"
                    />
                    @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <div class="wb">
                    <label class="rc kk wm vb" for="password">Mot de passe</label>
                    <input
                            type="password"
                            name="password"
                            id="password"
                            placeholder="••••••••••"
                            class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40"
                    />
                    @error('password') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <div class="wb">
                    <label class="rc kk wm vb" for="password_confirmation">Répéter le mot de passe</label>
                    <input
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation"
                            placeholder="••••••••••"
                            class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40"
                    />
                    @error('password_confirmation') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <button type="submit" class="vd rj ek rc rg gh lk ml il _l gi hi">
                    S'inscrire
                </button>

                <p class="sj hk xj rj ob">
                    Vous avez déjà un compte ?
                    <a class="mk" href="{{ route('login') }}"> Se connecter </a>
                </p>
            </form>

        </div>
    </section>
    <!-- ===== Formulaire d'Inscription Fin ===== -->
@endsection
