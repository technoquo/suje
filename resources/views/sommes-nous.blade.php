@extends('layouts.frontend')
@section('content')


<div class="hero bg-base-200 min-h-screen mt-6">
    <div class="hero-content flex-col lg:flex-row-reverse">
      <div class="text-center lg:text-left">
        <h1 class="text-7xl font-bold">Historique de notre association</h1>
        <p class="py-6 text-4xl">
          Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
          quasi. In deleniti eaque aut repudiandae et a id nisi.
        </p>
      </div>
      <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
        <img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
        class="max-w-sm rounded-lg shadow-2xl" />
      </div>
    </div>
  </div>

<div class="bg-base-200 py-24 sm:py-32 mt-6">
    <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
      <div class="max-w-xl">
        <h2 class="text-pretty text-3xl font-semibold tracking-tight  sm:text-4xl">Présentation de l'équipe</h2>
        <p class="mt-6 text-lg/8">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
        <li>
          <div class="flex items-center gap-x-6">
            <img class="size-36 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            <div>
              <h3 class="text-base/7 font-bold tracking-tight">Leslie Alexander</h3>
              <p class="text-sm/6">Co-Founder / CEO</p>
            </div>
          </div>
        </li>
        <li>
            <div class="flex items-center gap-x-6">
              <img class="size-36 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              <div>
                <h3 class="text-base/7 font-bold tracking-tight">Leslie Alexander</h3>
                <p class="text-sm/6">Co-Founder / CEO</p>
              </div>
            </div>
          </li>
          <li>
            <div class="flex items-center gap-x-6">
              <img class="size-36 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              <div>
                <h3 class="text-base/7 font-bold tracking-tight">Leslie Alexander</h3>
                <p class="text-sm/6">Co-Founder / CEO</p>
              </div>
            </div>
          </li>
          <li>
            <div class="flex items-center gap-x-6">
              <img class="size-36 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              <div>
                <h3 class="text-base/7 font-bold tracking-tight">Leslie Alexander</h3>
                <p class="text-sm/6">Co-Founder / CEO</p>
              </div>
            </div>
          </li>
          <li>
            <div class="flex items-center gap-x-6">
              <img class="size-36 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              <div>
                <h3 class="text-base/7 font-bold tracking-tight">Leslie Alexander</h3>
                <p class="text-sm/6">Co-Founder / CEO</p>
              </div>
            </div>
          </li>




        <!-- More people... -->
      </ul>
    </div>
  </div>
  <div class="hero bg-base-200 min-h-screen mt-6">
    <div class="hero-content text-center">
      <div class="max-w-md">
        <h1 class="text-5xl font-bold">Notre Mission</h1>
        <p class="py-6 text-2xl">
          Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
          quasi. In deleniti eaque aut repudiandae et a id nisi.
        </p>
        <button class="btn btn-primary">Get Started</button>
      </div>
    </div>
  </div>


@endsection
