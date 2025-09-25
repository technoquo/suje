@extends('layouts.app')
@section('content')

<section class="ji gp uq">
    <div class="bb ye ki xn vq jb jo">
        <!-- Section Title Start -->
        <div
            x-data="{ sectionTitle: `Evénements`}"
        >

            <div class="animate_top bb ze rj ki xn vq">
                <h2
                    x-text="sectionTitle"
                    class="fk vj pr kk wm on/5 gq/2 bb _b"
                ></h2>

            </div>
            <div class="flex justify-center mx-auto">
                <form action="{{ route('activities.search') }}" method="POST" class="tc">
                    @csrf
                    <div class="i">
                        <input
                            type="text"
                            placeholder="Rechercher ici..."
                            class="vd sm _g ch pm vk xm rg gm dm/40 dn/40 li mi"
                            name="search"
                        />

                        <button class="h r q _h">
                            <svg
                                class="th ul ml il"
                                width="21"
                                height="21"
                                viewBox="0 0 21 21"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M16.031 14.617L20.314 18.899L18.899 20.314L14.617 16.031C13.0237 17.3082 11.042 18.0029 9 18C4.032 18 0 13.968 0 9C0 4.032 4.032 0 9 0C13.968 0 18 4.032 18 9C18.0029 11.042 17.3082 13.0237 16.031 14.617ZM14.025 13.875C15.2941 12.5699 16.0029 10.8204 16 9C16 5.132 12.867 2 9 2C5.132 2 2 5.132 2 9C2 12.867 5.132 16 9 16C10.8204 16.0029 12.5699 15.2941 13.875 14.025L14.025 13.875Z"
                                />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Section Title End -->

        <div class="{{ count($activities) ? 'wc qf pn xo zf iq' : 'flex items-center justify-center' }} mt-10">
            <!-- Blog Item -->
            @forelse($activities as $activity)
                <div class="animate_top sg vk rm xm">
                    <div class="c rc i z-1 pg">
                        <img class="w-full" src="{{ asset('storage/' . $activity->image) }}" alt="{{ $activity->title }}" />

                        <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                            <a href="{{ route('sport.activity', ['slug' => $activity->slug]) }}" class="vc ek rg lk gh sl ml il gi hi">
                                Plus d'informations
                            </a>
                        </div>
                    </div>

                    <div class="yh">
                        <div class="tc uf wf ag jq">
{{--                            <div class="tc wf ag">--}}
{{--                                <img src="{{ asset('images/icon-man.svg') }}" alt="User" />--}}
{{--                                <p>{{ $activity->user->name }}</p>--}}
{{--                            </div>--}}
                            <div class="tc wf ag">
                                <img src="{{ asset('images/icon-calender.svg') }}" alt="Calender" />
                                <p>{{ \Carbon\Carbon::parse($activity->date_published)->translatedFormat('l, d F Y') }}</p>
                            </div>
                        </div>
                        <h4 class="ek tj ml il kk wm xl eq lb">
                            <a href="{{ route('sport.activity', ['slug' => $activity->slug]) }}">
                                {{ $activity->title }}
                            </a>
                        </h4>
                         {{$activity->service->title}}  - {{ $activity->serviceimage->name }} - {{ $activity->group->title }}
                    </div>
                </div>
            @empty
                <div class="flex items-center justify-center">
                    <div class="text-center text-gray-500">
                        Aucune activité disponible pour le moment.
                    </div>
                </div>
            @endforelse


        </div>

        @if(count($activities))
            <!-- Pagination -->
            {{ $activities->links('vendor.pagination.custom') }}
            <!-- Pagination -->
        @endif
    </div>
</section>
@endsection