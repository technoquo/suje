<!-- ===== Projects Start ===== -->
<section class="pg pj vp mr oj wp nr">
    <!-- Section Title Start -->
    <div
        x-data="{ sectionTitle: `Location.`}"
    >
        <div class="animate_top bb ze rj ki xn vq">
            <h2
                x-text="sectionTitle"
                class="fk vj pr kk wm on/5 gq/2 bb _b"
            ></h2>

        </div>
    </div>
    <!-- Section Title End -->

    <div class="bb ze ki xn 2xl:ud-px-0 jb" x-data="{filterTab: 1}">
        <!-- Porject Tab -->
        <div
            class="projects-tab _e bb tc uf wf xf cg rg hh rm vk xm si ti fc"
        >
            <button
                data-filter="*"
                @click="filterTab = 1"
                :class="{ 'gh lk' : filterTab === 1 }"
                class="project-tab-btn ek rg ml il vi mi"
            >
                All
            </button>
            <button
                data-filter=".branding"
                @click="filterTab = 2"
                :class="{ 'gh lk' : filterTab === 2 }"
                class="project-tab-btn ek rg ml il vi mi"
            >
                Branding Strategy
            </button>
            <button
                data-filter=".digital"
                @click="filterTab = 3"
                :class="{ 'gh lk' : filterTab === 3 }"
                class="project-tab-btn ek rg ml il vi mi"
            >
                Digital Experiences
            </button>
            <button
                data-filter=".ecommerce"
                @click="filterTab = 4"
                :class="{ 'gh lk' : filterTab === 4 }"
                class="project-tab-btn ek rg ml il vi mi"
            >
                Ecommerce
            </button>
        </div>

        <!-- Projects item wrapper -->
        <div class="projects-wrapper tc -ud-mx-5">
            <div class="project-sizer"></div>
            <!-- Project Item -->
            <div class="project-item wi fb vd jn/2 to/3 branding ecommerce">
                <div class="c i pg sg z-1">
                    <img src="images/project-01.png" alt="Project" />

                    <div
                        class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10"
                    >
                        <h4 class="ek tj kk hc">Photo Retouching</h4>
                        <p>Branded Ecommerce</p>
                        <a
                            class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                            href="#"
                        >
                            <svg
                                class="th lm ml il"
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Item -->
            <div class="project-item wi fb vd jn/2 to/3 digital">
                <div class="c i pg sg z-1">
                    <img src="images/project-02.png" alt="Project" />

                    <div
                        class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10"
                    >
                        <h4 class="ek tj kk hc">Photo Retouching</h4>
                        <p>Branded Ecommerce</p>
                        <a
                            class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                            href="#"
                        >
                            <svg
                                class="th lm ml il"
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Item -->
            <div class="project-item wi fb vd jn/2 to/3 branding ecommerce">
                <div class="c i pg sg z-1">
                    <img src="images/project-04.png" alt="Project" />

                    <div
                        class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10"
                    >
                        <h4 class="ek tj kk hc">Photo Retouching</h4>
                        <p>Branded Ecommerce</p>
                        <a
                            class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                            href="#"
                        >
                            <svg
                                class="th lm ml il"
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Item -->
            <div class="project-item wi fb vd vo/3 digital ecommerce">
                <div class="c i pg sg z-1">
                    <img src="images/project-03.png" alt="Project" />

                    <div
                        class="h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10"
                    >
                        <h4 class="ek tj kk hc">Photo Retouching</h4>
                        <p>Branded Ecommerce</p>
                        <a
                            class="c tc wf xf ie ld rg _g dh ml il ph jm km jc"
                            href="#"
                        >
                            <svg
                                class="th lm ml il"
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== Projects End ===== -->
