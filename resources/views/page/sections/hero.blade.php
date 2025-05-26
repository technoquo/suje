<!-- ===== Hero Start ===== -->
<section class="gj do ir hj sp jr i pg" id="suje">
    <!-- Hero Images -->
    <div class="xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r relative">
        <img src="{{asset('images/shape-01.svg')}}" alt="shape" class="xc 2xl:ud-block h t -ud-left-[10%] ua" />
        <img src="{{ asset('images/shape-02.svg') }}" alt="shape" class="xc 2xl:ud-block h u p va" />
        <img src="{{ asset('images/shape-03.svg') }}" alt="shape" class="xc 2xl:ud-block h v w va" />
        <img src="{{ asset('images/shape-04.svg') }}" alt="shape" class="h q r" />
        <img src="{{ asset(asset('storage/'. $heroes->image)) }}" alt="Woman" class="h q r-suje ua absolute top-5" width="650"  />
    </div>
    <!-- Hero Content -->
    <div class="bb ze ki xn 2xl:ud-px-0" >
        <div class="tc _o">
            <div class="animate_left jn/2">
                <h1 class="fk vj zp or kk wm wb"> {{ $heroes->title}}.</h1>
                <p class="fq">
                    {!! $heroes->description !!}
                </p>

{{--                <div class="tc tf yo zf mb">--}}
{{--                    <a href="#" class="ek jk lk gh gi hi rg ml il vc _d _l"--}}
{{--                    >Lorem ipsum.</a--}}
{{--                    >--}}

{{--                    <span class="tc sf">--}}
{{--                  <a href="#" class="inline-block ek xj kk wm"> Lorem ipsum dolo </a>--}}
{{--                  <span class="inline-block">Lorem ipsum dolor.</span>--}}
{{--                </span>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</section>
<!-- ===== Hero End ===== -->
