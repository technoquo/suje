<!-- ===== Counter Start ===== -->
<section class="i pg qh rm ji hp">
    <img src="images/shape-11.svg" alt="Shape" class="of h ga ha ke" />
    <img src="images/shape-07.svg" alt="Shape" class="h ia o ae jf" />
    <img src="images/shape-14.svg" alt="Shape" class="h ja ka" />
    <img src="images/shape-15.svg" alt="Shape" class="h q p" />

    <div class="bb ze i va ki xn br">
        <div class="tc uf sn tn xf un gg">
            @foreach($counters as $count)
            <div class="animate_top me/5 ln rj">
                <h2 class="gk vj zp or kk wm hc">{{$count->number}}</h2>
                <p class="ek bk aq">{{$count->title}}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ===== Counter End ===== -->
