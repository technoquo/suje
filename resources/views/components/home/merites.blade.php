<div class="hero bg-base-200 shadow-xl mt-6">
    <div class="hero-content flex-col 2 lg:flex-row-reverse">
        <div x-data="imageRotator()" class="max-w-sm rounded-lg shadow-2xl">
            <img :src="currentImage" alt="Rotating Image"
                class="w-full rounded-lg transition-opacity duration-500 ease-in-out"
                :class="{ 'opacity-0': fadingOut, 'opacity-100': !fadingOut }"
                @transitionend="fadingOut = false" />
        </div>
        <div>
            <h1 class="text-2xl font-bold">Connaître les mérites professionnels</h1>
            <div class="py-6 w-80">
                Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                quasi. In deleniti eaque aut repudiandae et a id nisi.
            </div>
            <input id="my-drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                <!-- Page content here -->
                <label for="my-drawer" class="btn btn-primary drawer-button">Mérites
                    professionnels</label>
            </div>
            <div class="drawer-side">
                <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul
                    class="menu bg-base-200 text-base-content min-h-full w-80 p-4 overflow-y-auto max-h-screen">
                    <!-- Sidebar content here -->
                    <li><a><img src="/img/1-photo.png" class="w-24 h-24"
                                class="max-w-sm rounded-lg shadow-2xl" alt="Photo 1" tooltip="dddd" /></a>
                    </li>
                    <li><a><img src="/img/2-photo.png" class="w-24 h-24"
                                class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                    <li><a><img src="/img/3-photo.png" class="w-24 h-24"
                                class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                    <li><a><img src="/img/4-photo.png" class="w-24 h-24"
                                class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                    <li><a><img src="/img/5-photo.png" class="w-24 h-24"
                                class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                    <li><a><img src="/img/6-photo.png" class="w-24 h-24"
                                class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                    <li><a><img src="/img/7-photo.png" class="w-24 h-24"
                                class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                    <li><a><img src="/img/8-photo.png" class="w-24 h-24"
                                class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                    <li><a><img src="/img/9-photo.png" class="w-24 h-24"
                                class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                    <li><a><img src="/img/10-photo.png" class="w-24 h-24"
                                class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                    <li><a><img src="/img/11-photo.png" class="w-24 h-24"
                                class="max-w-sm rounded-lg shadow-2xl" /></a></li>
                    <li><a><img src="/img/12-photo.png" class="w-24 h-24"
                                class="max-w-sm rounded-lg shadow-2xl" /></a></li>

                </ul>
            </div>

        </div>
    </div>
</div>
