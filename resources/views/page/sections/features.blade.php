<!-- ===== Small Features Start ===== -->
<section id="features">
    <div class="bb ze ki yn 2xl:ud-px-12.5">
        <div class="tc uf zo xf ap zf bp mq">

            @foreach($features as $feature)
            <!-- Small Features Item -->
            <div class="animate_top kn to/3 tc cg oq">
                <div class="tc wf xf cf ae cd rg mh">
                    <img src="images/icon-01.svg" alt="Icon" />
                </div>
                <div>
                    <h4 class="ek yj go kk wm xb">{{ $feature->title }}</h4>
                    <p>{{ $feature->description }}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- ===== Small Features End ===== -->
