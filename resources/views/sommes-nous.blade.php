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

    {{-- <div class="bg-base-200 py-24 sm:py-32 mt-6">
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
  </div> --}}

    <section class="bg-base-200 mt-6">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold">Présentation de l'équipe</h2>

            </div>
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                <div class="items-center bg-base-200 rounded-lg shadow sm:flex">

                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                        alt="Bonnie Avatar">

                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight">
                            <a href="#">Bonnie Green</a>
                        </h3>
                        <span class="font-semibold">CEO & Web Developer</span>
                        <p class="mt-3 mb-4 font-light">Bonnie drives the technical strategy of the flowbite platform and
                            brand.</p>

                    </div>
                </div>
                <div class="items-center bg-base-200 rounded-lg shadow sm:flex">

                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                        alt="Bonnie Avatar">

                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight">
                            <a href="#">Bonnie Green</a>
                        </h3>
                        <span class="font-semibold">CEO & Web Developer</span>
                        <p class="mt-3 mb-4 font-light">Bonnie drives the technical strategy of the flowbite platform and
                            brand.</p>

                    </div>
                </div>
                <div class="items-center bg-base-200 rounded-lg shadow sm:flex">

                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                        alt="Bonnie Avatar">

                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight">
                            <a href="#">Bonnie Green</a>
                        </h3>
                        <span class="font-semibold">CEO & Web Developer</span>
                        <p class="mt-3 mb-4 font-light">Bonnie drives the technical strategy of the flowbite platform and
                            brand.</p>

                    </div>
                </div>
                <div class="items-center bg-base-200 rounded-lg shadow sm:flex">

                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                        alt="Bonnie Avatar">

                    <div class="p-5">
                        <h3 class="text-xl font-bold tracking-tight">
                            <a href="#">Bonnie Green</a>
                        </h3>
                        <span class="font-semibold">CEO & Web Developer</span>
                        <p class="mt-3 mb-4 font-light">Bonnie drives the technical strategy of the flowbite platform and
                            brand.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <div class="hero bg-base-200 min-h-screen mt-6">
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
  </div> --}}

    <section class="hero bg-base-200 min-h-screen mt-6">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">Notre
                    Mission</h1>
                <p class="max-w-2xl mb-6 font-light  lg:mb-8 md:text-lg lg:text-xl">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit orem ipsum dolor sit amet consectetur adipisicing elit orem ipsum dolor sit amet
                    consectetur adipisicing elit.</p>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
            </div>
        </div>
    </section>
@endsection
