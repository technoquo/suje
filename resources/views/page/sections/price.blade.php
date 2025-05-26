<!-- ===== Pricing Table Start ===== -->
<section x-data="setup()" class="i pg fh rm ji gp uq">
    <!-- Bg Shapes -->
    <img src="images/shape-06.svg" alt="Shape" class="h aa y" />
    <img src="images/shape-03.svg" alt="Shape" class="h ca u" />
    <img src="images/shape-07.svg" alt="Shape" class="h w da ee" />
    <img src="images/shape-12.svg" alt="Shape" class="h p s" />
    <img src="images/shape-13.svg" alt="Shape" class="h r q" />

    <!-- Section Title Start -->
    <div
        x-data="{ sectionTitle: `We Offer Great Affordable Premium Prices.`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.`}"
    >
        <div class="animate_top bb ze rj ki xn vq">
            <h2
                x-text="sectionTitle"
                class="fk vj pr kk wm on/5 gq/2 bb _b"
            ></h2>
            <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
        </div>
    </div>
    <!-- Section Title End -->

    <!-- Pricing switcher -->
    <div class="tc wf xf jb og">
        <span class="ek kk wm">Bill Monthly</span>
        <button
            class="i rg gm"
            x-cloak
            @click="billPlan == 'monthly' ? billPlan = 'annually' : billPlan = 'monthly'"
        >
            <div class="fe id bl gh rg xk outline-none"></div>
            <div
                class="h vc wf xf ge jd cl jl ml mf hh rg yk ea fa"
                :class="{ 'ff': billPlan == 'monthly', 'gf': billPlan == 'annually' }"
            ></div>
        </button>
        <span class="ek kk wm">Bill Annually</span>
    </div>

    <!-- Pricing Table -->
    <div class="bb ze i va ki xn yq bc">
        <div class="wc qf pn xo jg">
            <template x-for="(plan, i) in plans" x-key="i">
                <!-- Pricing Item -->
                <div class="animate_top rj sg hh sm vk xm hi nj oj">
                    <h4 x-text="plan.name" class="wj kk wm fb"></h4>

                    <div class="tc wf xf kg cc">
                        <h2 :class="plan.name == 'Basic' ? 'text-green-500' : ''" x-text="`$${billPlan == 'monthly' ? plan.price.monthly : plan.price.annually}`" class="fk _j kk wm"></h2>
                        <span x-text="billPlan == 'monthly' ? '/per month' : '/per year'" class="sc ak kk wm"></span>
                    </div>

                    <p class="ur dc">No credit card required</p>

                    <!-- Button -->
                    <a href="#" class="ek rg lk ml il gi ri" :class="plan.name == 'Growth Plan' ? 'gh sl' : 'mh tl'">
                        Try for free
                    </a>

                    <!-- Features -->
                    <ul class="tc sf bg ob fb">
                        <template x-for="(feature, i) in plan.features" x-key="i">
                            <li x-text="feature"></li>
                        </template>
                    </ul>

                    <p class="kk wm">7-day free trial</p>
                </div>
            </template>
        </div>
    </div>
</section>
<script>
    //  Pricing Table
    const setup = () => {
        return {
            billPlan: "monthly",
            plans: [
                {
                    name: "Starter",
                    price: { monthly: 29, annually: 29 * 12 - 199 },
                    features: ["400 GB Storage", "Unlimited Photos & Videos", "Exclusive Support"],
                },
                {
                    name: "Growth Plan",
                    price: { monthly: 59, annually: 59 * 12 - 100 },
                    features: ["400 GB Storage", "Unlimited Photos & Videos", "Exclusive Support"],
                },
                {
                    name: "Business",
                    price: { monthly: 139, annually: 139 * 12 - 100 },
                    features: ["400 GB Storage", "Unlimited Photos & Videos", "Exclusive Support"],
                },
            ],
        };
    };
</script>
<!-- ===== Pricing Table End ===== -->
