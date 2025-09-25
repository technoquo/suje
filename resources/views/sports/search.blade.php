@extends('layouts.app')

@section('content')
    <section class="ji gp uq">
        <div x-data="{ sectionTitle: `Résultats de l'événement `}">
            <div class="animate_top bb ze rj ki xn vq">
                <h2
                        x-text="sectionTitle"
                        class="fk vj pr kk wm on/5 gq/2 bb _b"
                ></h2>
            </div>
        </div>

        <div class="bb ye ki xn vq jb jo">
            @if($activities->isEmpty())
                <div>
                    @else
                        <div class="wc qf pn xo zf iq">
                            @endif

                            <!-- Blog Item -->
                            @forelse($activities as $activity)
                                <div class="animate_top sg vk rm xm">
                                    <div class="c rc i z-1 pg">
                                        <img class="w-full" src="{{ asset('storage/' . $activity->image) }}" alt="Blog" />

                                        <div class="im h r s df vd yc wg tc wf xf al hh/20 nl il z-10">
                                            <a href="{{ route('sport.activity', $activity->slug) }}" class="vc ek rg lk gh sl ml il gi hi">
                                                Plus d'informations
                                            </a>
                                        </div>
                                    </div>

                                    <div class="yh">
                                        <div class="tc uf wf ag jq">
                                            <div class="tc wf ag">
                                                <img src="../images/icon-man.svg" alt="User" />
                                                <p>{{ $activity->user->name }}</p>
                                            </div>
                                            <div class="tc wf ag">
                                                <img src="../images/icon-calender.svg" alt="Calender" />
                                                <p>{{ \Carbon\Carbon::parse($activity->date_published)->translatedFormat('l, d F Y') }}</p>
                                            </div>
                                        </div>
                                        <h4 class="ek tj ml il kk wm xl eq lb">
                                            <a href="{{ route('sport.activity', $activity->slug) }}">
                                                {{ $activity->title }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            @empty
                                <div class="flex items-center justify-center min-h-[200px] w-full">
                                    Aucune activité trouvée.
                                </div>
                            @endforelse
                        </div>
                </div>
        </div>
    </section>
@endsection
