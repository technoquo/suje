@extends('layouts.frontend')
@section('content')
    @if (Route::is('details'))
        <!-- Load Glide CSS directly -->
        <link rel="stylesheet" href="{{ asset('css/glide.core.min.css') }}">
    @endif
{{--    <div class="breadcrumbs text-2xl">--}}
{{--        <ul>--}}
{{--            <li><a>L.F.F.S</a></li>--}}
{{--            <li>FUTSAL</li>--}}
{{--            <li>Dames (2ème division)</li>--}}
{{--        </ul>--}}
{{--    </div>--}}
    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Titre de l'événement</h1>
                <p class="py-6">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                </p>
                <p class="py-6">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                </p>
                <p class="py-6">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.
                </p>
            </div>
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/ZN7BeDUfrEU?si=1U98phJ5yBTzU-vD"></iframe>
                <div class="card-body">
                    <h2 class="card-title">
                        dummy text ever since the 1500s, when an unknown printer took a galley

                    </h2>
                    <button class="btn btn-info">L'inscription</button>

                </div>
            </div>
        </div>

    </div>
    <x-home.carousel />

@endsection
