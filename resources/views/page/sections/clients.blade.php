<!-- ===== Clients Start ===== -->
<section class="pj vp mr">
    <!-- Section Title Start -->
    <div
        x-data="{ sectionTitle: `Avec le soutien de`}"
    >
        <div class="animate_top bb ze rj ki xn vq">
            <h2
                x-text="sectionTitle"
                class="fk vj pr kk wm on/5 gq/2 bb _b"
            ></h2>

        </div>
    </div>
    <!-- Section Title End -->

    <div class="flex justify-center">
        <div class="flex flex-row flex-wrap gap-4 justify-center">
            @foreach($clients as $client)
                <a href="{{ $client->url }}" target="_blank" class="rc animate_top">
                    <img
                        class="h-48 w-96 object-contain"
                        src="{{ asset('storage/' . $client->image) }}"
                        alt="{{ $client->name }}"
                    />
                </a>
            @endforeach
        </div>
    </div>

</section>
<!-- ===== Clients End ===== -->
