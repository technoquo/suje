@extends('layouts.frontend')
@section('content')


<section class="bg-base-200 mt-8">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div class="grid md:grid-cols-2 gap-8">

                <div class="bg-blue-500 rounded-lg p-8 md:p-12">
                    <h2 class="text-white  text-3xl font-extrabold mb-2">L.F.F.S</h2>
                    <p class="text-lg font-normal text-yellow-400 dark:text-yellow-200 mb-4">Ligue Francophone de
                        Football en Salle</p>
                        <div class="flex  space-x-8 bg-white p-9 rounded-lg justify-center ">
                            <div class="text-xl font-bold text-blue-500 text-center">
                                <button onclick="my_modal_1.showModal()">
                                <svg fill="#000000" width="64px" height="64px" viewBox="0 0 50 50"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path id="Football"
                                            d="M66.091,75h-.434a24.926,24.926,0,0,1-8.332-1.544q-.532-.2-1.056-.418c-.229-.1-.456-.2-.682-.3l-.022-.01-.083-.039a25,25,0,0,1-6.2-4.1l-.069-.062-.011-.01q-.446-.405-.876-.835-.448-.448-.872-.916a25.022,25.022,0,0,1-4.1-6.173q-.2-.424-.382-.857-.139-.328-.268-.659a.307.307,0,0,0-.012-.031c-.012-.03-.023-.06-.034-.09a24.851,24.851,0,0,1-1.613-7.569c0-.008,0-.016,0-.024l0-.063c0-.038,0-.076-.006-.114v-.014c-.007-.143-.012-.286-.016-.43Q41,50.369,41,50a24.937,24.937,0,0,1,1.646-8.941.25.25,0,0,0,.009-.023c.008-.02.016-.04.023-.061s.022-.056.033-.084l.014-.035c.077-.2.157-.391.239-.587.037-.087.075-.175.113-.261l.024-.057.023-.052a25.041,25.041,0,0,1,4.434-6.78l.053-.058.018-.019q.337-.366.692-.72.423-.423.861-.822l.058-.053.007-.007a25.043,25.043,0,0,1,6.235-4.128l.069-.032.037-.016q.336-.154.678-.3.4-.167.8-.32A24.907,24.907,0,0,1,65.723,25h.552a24.915,24.915,0,0,1,9.288,1.893l.056.022.021.009.092.039.272.117.013.005.1.046.071.031.042.019a25.031,25.031,0,0,1,6.627,4.358l.01.009.057.051c.254.235.5.475.751.721s.459.468.68.707a25.024,25.024,0,0,1,4.514,6.862l.028.063c.007.016.015.034.022.05.018.04.035.079.052.119,0,0,0,0,0,0,.021.047.041.094.06.14l.045.107.01.023.036.086.025.061a.069.069,0,0,0,0,.01,25.09,25.09,0,0,1,.085,18.676c-.01.027-.021.054-.032.081,0,.01-.009.021-.013.031-.052.13-.106.258-.16.387q-.186.441-.389.873c0,.007-.007.016-.011.022-.014.028-.026.056-.04.083a25.059,25.059,0,0,1-4.089,6.1q-.4.443-.83.869c-.251.251-.506.5-.765.734l-.007.005-.075.069a25.023,25.023,0,0,1-6.594,4.328l-.051.023-.06.027-.114.05h0c-.092.04-.184.08-.276.119l-.1.041A24.911,24.911,0,0,1,66.337,75h-.247Zm-6.853-4.063a22.04,22.04,0,0,0,13.518,0l2.128-6.782L70.485,58H61.515l-4.4,6.156ZM75.169,70A22.1,22.1,0,0,0,82,65.087l-5.263-.078ZM50,65.08A22.093,22.093,0,0,0,56.828,70L55.267,65Zm33.651-1.957A21.886,21.886,0,0,0,88,50c0-.116,0-.232,0-.347l-6.344-4.361-6.836,3.418L72.11,56.833l4.417,6.184ZM44,49.655q0,.173,0,.346a21.881,21.881,0,0,0,4.345,13.112l7.136-.107,4.409-6.173-2.708-8.124L50.356,45.3Zm15.174-1.287L61.721,56h8.558l2.544-7.632L66,43.25ZM44.189,47.113l4.6-3.159-1.775-5.065A21.858,21.858,0,0,0,44.189,47.113Zm39.022-3.165,4.6,3.162a21.842,21.842,0,0,0-2.83-8.222ZM57.894,46.829,65,41.5v-8l-5.869-4.4a22.085,22.085,0,0,0-10.711,7.69l2.254,6.432Zm16.212,0,7.226-3.613,2.249-6.428A22.1,22.1,0,0,0,72.869,29.1L67,33.5v8ZM61.592,28.444,66,31.75l4.409-3.307a22.124,22.124,0,0,0-8.817,0Z"
                                            transform="translate(-41 -25)"></path>
                                    </g>
                                </svg>
                                  FUTSAL
                                </button>
                                <dialog id="my_modal_1" class="modal fixed inset-0">
                                    <div class="modal-box overflow-y-auto max-h-[90vh] md:w-11/12 md:max-w-5xl">
                                        <h1 class="mb-4">L.F.F.S - FUTSAL</h1>
                                        <div class="flex md:flex-row flex-col md:space-x-4 md:space-y-0 space-y-4">
                                            <div class="card bg-blue-500 text-yellow-200 w-96">
                                                <div class="card-body items-center text-center">
                                                    <h2 class="card-title">Dames</h2>
                                                    <p>(2ème division)</p>
                                                    <div class="card-actions">
                                                        <a href="{{route('details')}}" class="btn btn-primary mt-4">Voir plus de détails</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card bg-blue-500 text-yellow-200 w-96">
                                                <div class="card-body items-center text-center">
                                                    <h2 class="card-title">Vétérans 1</h2>
                                                    <p>(2ème Division)</p>
                                                    <div class="card-actions">
                                                        <a href="{{route('details')}}" class="btn btn-primary mt-4">Voir plus de détails</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card bg-blue-500 text-yellow-200 w-96">
                                                <div class="card-body items-center text-center">
                                                    <h2 class="card-title">Vétérans 2</h2>
                                                    <p>(3ème Division)</p>
                                                    <div class="card-actions">
                                                        <a href="{{route('details')}}" class="btn btn-primary mt-4">Voir plus de détails</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="dialog" class="modal-backdrop">
                                        <button>close</button>
                                    </form>
                                </dialog>
                            </div>


                        </div>
                </div>

            <div class=" bg-blue-500 rounded-lg p-8 md:p-12">

                    <h2 class="text-white text-3xl font-extrabold mb-2">L.S.F.S</h2>
                    <p class="text-lg font-normal text-yellow-400 dark:text-yellow-200 mb-4">Ligue Sportive Francophone
                        des Sourds</p>

                    <div class="flex  space-x-8 bg-white p-9 rounded-lg justify-center">
                        <div class="text-xl font-bold text-blue-500 text-center">
                            <button onclick="my_modal_2.showModal()">
                            <svg fill="#000000" width="64px" height="64px" viewBox="0 0 50 50"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path id="Football"
                                        d="M66.091,75h-.434a24.926,24.926,0,0,1-8.332-1.544q-.532-.2-1.056-.418c-.229-.1-.456-.2-.682-.3l-.022-.01-.083-.039a25,25,0,0,1-6.2-4.1l-.069-.062-.011-.01q-.446-.405-.876-.835-.448-.448-.872-.916a25.022,25.022,0,0,1-4.1-6.173q-.2-.424-.382-.857-.139-.328-.268-.659a.307.307,0,0,0-.012-.031c-.012-.03-.023-.06-.034-.09a24.851,24.851,0,0,1-1.613-7.569c0-.008,0-.016,0-.024l0-.063c0-.038,0-.076-.006-.114v-.014c-.007-.143-.012-.286-.016-.43Q41,50.369,41,50a24.937,24.937,0,0,1,1.646-8.941.25.25,0,0,0,.009-.023c.008-.02.016-.04.023-.061s.022-.056.033-.084l.014-.035c.077-.2.157-.391.239-.587.037-.087.075-.175.113-.261l.024-.057.023-.052a25.041,25.041,0,0,1,4.434-6.78l.053-.058.018-.019q.337-.366.692-.72.423-.423.861-.822l.058-.053.007-.007a25.043,25.043,0,0,1,6.235-4.128l.069-.032.037-.016q.336-.154.678-.3.4-.167.8-.32A24.907,24.907,0,0,1,65.723,25h.552a24.915,24.915,0,0,1,9.288,1.893l.056.022.021.009.092.039.272.117.013.005.1.046.071.031.042.019a25.031,25.031,0,0,1,6.627,4.358l.01.009.057.051c.254.235.5.475.751.721s.459.468.68.707a25.024,25.024,0,0,1,4.514,6.862l.028.063c.007.016.015.034.022.05.018.04.035.079.052.119,0,0,0,0,0,0,.021.047.041.094.06.14l.045.107.01.023.036.086.025.061a.069.069,0,0,0,0,.01,25.09,25.09,0,0,1,.085,18.676c-.01.027-.021.054-.032.081,0,.01-.009.021-.013.031-.052.13-.106.258-.16.387q-.186.441-.389.873c0,.007-.007.016-.011.022-.014.028-.026.056-.04.083a25.059,25.059,0,0,1-4.089,6.1q-.4.443-.83.869c-.251.251-.506.5-.765.734l-.007.005-.075.069a25.023,25.023,0,0,1-6.594,4.328l-.051.023-.06.027-.114.05h0c-.092.04-.184.08-.276.119l-.1.041A24.911,24.911,0,0,1,66.337,75h-.247Zm-6.853-4.063a22.04,22.04,0,0,0,13.518,0l2.128-6.782L70.485,58H61.515l-4.4,6.156ZM75.169,70A22.1,22.1,0,0,0,82,65.087l-5.263-.078ZM50,65.08A22.093,22.093,0,0,0,56.828,70L55.267,65Zm33.651-1.957A21.886,21.886,0,0,0,88,50c0-.116,0-.232,0-.347l-6.344-4.361-6.836,3.418L72.11,56.833l4.417,6.184ZM44,49.655q0,.173,0,.346a21.881,21.881,0,0,0,4.345,13.112l7.136-.107,4.409-6.173-2.708-8.124L50.356,45.3Zm15.174-1.287L61.721,56h8.558l2.544-7.632L66,43.25ZM44.189,47.113l4.6-3.159-1.775-5.065A21.858,21.858,0,0,0,44.189,47.113Zm39.022-3.165,4.6,3.162a21.842,21.842,0,0,0-2.83-8.222ZM57.894,46.829,65,41.5v-8l-5.869-4.4a22.085,22.085,0,0,0-10.711,7.69l2.254,6.432Zm16.212,0,7.226-3.613,2.249-6.428A22.1,22.1,0,0,0,72.869,29.1L67,33.5v8ZM61.592,28.444,66,31.75l4.409-3.307a22.124,22.124,0,0,0-8.817,0Z"
                                        transform="translate(-41 -25)"></path>
                                </g>
                            </svg>
                            FUTSAL
                            </button>
                            <dialog id="my_modal_2" class="modal fixed inset-0">
                                <div class="modal-box overflow-y-auto max-h-[90vh] md:w-11/12 md:max-w-5xl">
                                    <h1 class="mb-4">L.S.F.S - FUTSAL</h1>
                                    <div class="flex md:flex-row flex-col md:space-x-4 md:space-y-0 space-y-4">
                                        <div class="card bg-blue-500 text-yellow-200 w-96">
                                            <div class="card-body items-center text-center">
                                                <h2 class="card-title">Dames</h2>

                                                <div class="card-actions">
                                                    <a href="{{route('details')}}" class="btn btn-primary mt-4">Voir plus de détails</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card bg-blue-500 text-yellow-200 w-96">
                                            <div class="card-body items-center text-center">
                                                <h2 class="card-title">Vétérans</h2>

                                                <div class="card-actions">
                                                    <a href="{{route('details')}}" class="btn btn-primary mt-4">Voir plus de détails</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card bg-blue-500 text-yellow-200 w-96">
                                            <div class="card-body items-center text-center">
                                                <h2 class="card-title">Juniors (U9 à U17)</h2>

                                                <div class="card-actions">
                                                    <a href="{{route('details')}}" class="btn btn-primary mt-4">Voir plus de détails</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form method="dialog" class="modal-backdrop">
                                    <button>close</button>
                                </form>
                            </dialog>
                        </div>
                        <div class="text-xl font-bold text-blue-500 text-center">
                            <button onclick="my_modal_3.showModal()">
                            <svg fill="#000000" height="64px" width="64px" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 111.441 111.441" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <path
                                            d="M53.679,37.505c1.237,0.495,2.535,0.747,3.858,0.747h0c4.276,0,8.065-2.565,9.654-6.536 c1.032-2.578,0.998-5.403-0.095-7.956c-1.093-2.553-3.116-4.526-5.694-5.557c-1.238-0.496-2.536-0.747-3.858-0.747 c-4.275,0-8.065,2.565-9.654,6.535c-1.032,2.578-0.998,5.403,0.096,7.956C49.079,34.5,51.101,36.474,53.679,37.505z">
                                        </path>
                                        <path
                                            d="M91.574,46.735c-0.263-1.272-1.276-2.127-2.522-2.127c-0.368,0-0.736,0.076-1.092,0.227l-6.449,2.721 c-0.675,0.286-1.993,0.181-2.618-0.209l-10.692-6.692c-0.083-0.052-0.167-0.075-0.25-0.118c-0.419-0.285-0.899-0.469-1.419-0.511 l-15.125-1.22l-8.627-4.102c-0.79-0.375-1.806-1.399-2.175-2.191l-3.961-8.498c-0.566-1.214-1.971-2.181-3.329-2.354l-1.259-3.554 c1.597-0.922,2.858-2.359,3.615-4.174c0.947-2.273,0.996-4.858,0.138-7.281C34.398,2.672,30.838,0,26.951,0 c-0.933,0-1.853,0.158-2.733,0.469c-4.604,1.632-6.899,7.058-5.116,12.097c1.408,3.976,4.967,6.647,8.855,6.647 c0.428,0,0.853-0.037,1.273-0.103l0.97,2.74c-0.38,0.167-0.707,0.416-0.943,0.749c-0.439,0.62-0.529,1.438-0.246,2.242 l4.346,12.352c0.44,1.25,1.676,2.76,2.814,3.438l11.3,6.729L44.977,70.43l-2.393,8.722c-0.546,1.992-2.052,5.074-3.288,6.729 l-6.825,9.145c-1.602,2.146-1.486,5.338,0.258,7.116c0.802,0.816,1.875,1.266,3.022,1.266c1.357,0,2.68-0.629,3.629-1.725 l8.485-9.796c1.526-1.761,3.269-5.023,3.886-7.271l2.834-10.328l1.208,0.082l-3.247,31.506c-0.283,2.74,1.716,5.209,4.453,5.505 l0.288,0.031c0.18,0.02,0.359,0.029,0.537,0.029c2.561,0,4.689-1.921,4.952-4.47l3.586-34.795c0.003-0.022,0.011-0.043,0.013-0.065 l2.104-21.176l9.145,5.084c0.607,0.337,1.394,0.523,2.216,0.523c0.836,0,1.636-0.191,2.251-0.539l7.827-4.424 c1.332-0.752,2.134-2.516,1.826-4.015L91.574,46.735z">
                                        </path>
                                        <path
                                            d="M89.117,33.424c-2.11,0-3.828,1.717-3.828,3.827s1.717,3.827,3.828,3.827s3.827-1.717,3.827-3.827 S91.228,33.424,89.117,33.424z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            PADEL
                            </button>
                            <dialog id="my_modal_3" class="modal fixed inset-0">
                                <div class="modal-box overflow-y-auto max-h-[90vh] md:w-11/12 md:max-w-5xl">
                                    <h1 class="mb-4">L.S.F.S - PADEL</h1>
                                    <div class="flex md:flex-row flex-col md:space-x-4 md:space-y-0 space-y-4">
                                        <div class="card bg-blue-500 text-yellow-200 w-96">
                                            <div class="card-body items-center text-center">
                                                <h2 class="card-title">Homes</h2>

                                                <div class="card-actions">
                                                    <button class="btn btn-primary mt-4">Voir plus de détails</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form method="dialog" class="modal-backdrop">
                                    <button>close</button>
                                </form>
                            </dialog>
                        </div>
               </div>
            </div>
        </div>

    </div>
</section>

@endsection
