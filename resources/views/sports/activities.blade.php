@extends('layouts.app')
@section('content')


<section class="ji gp uq">
    <div class="bb ye ki xn vq jb jo">
        <!-- Ícono arriba de la lista de actividades -->
        <div class="flex justify-end mb-4">
            <a href="https://instagram.com/suje_asbl" target="_blank">
                <i data-lucide="instagram"
                   class="w-7 h-7 text-pink-500 hover:text-pink-600 transition-colors duration-300"></i>
            </a>
        </div>
        <div class="{{ count($activities) ? 'wc qf pn xo zf iq' : 'flex items-center justify-center' }}">
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