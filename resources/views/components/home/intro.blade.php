
<div class="grid grid-cols-1 md:grid-cols-2 mt-6 gap-4" x-data
x-intersect:enter="$el.querySelectorAll('.grid-item').forEach((item, i) => {
item.style.animationDelay = `${i * 0.2}s`;
item.classList.add('animate-fade-in');
})">

<div class="hero bg-base-200 grid-item">
    <div class="hero-content flex-col lg:flex-row">
        <img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
            class="max-w-sm rounded-lg shadow-2xl" />
        <div>
            <h1 class="text-5xl font-bold">Notre Mission</h1>
            <p class="py-6">
                Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                quasi. In deleniti eaque aut repudiandae et a id nisi.
            </p>
            <button class="btn btn-primary">Get Started</button>
        </div>
    </div>
</div>
<div class="hero bg-base-200 grid-item">
    <div class="hero-content flex-col lg:flex-row-reverse">
        <img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
            class="max-w-sm rounded-lg shadow-2xl" />
        <div>
            <h1 class="text-5xl font-bold">Notre Valeurs</h1>
            <p class="py-6">
                Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                quasi. In deleniti eaque aut repudiandae et a id nisi.
            </p>
            <button class="btn btn-primary">Get Started</button>
        </div>
    </div>
</div>


</div>
