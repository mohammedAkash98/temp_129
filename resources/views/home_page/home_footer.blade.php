<style>
    .fill {
        display: flex;
        /* justify-content: center; */
        /* align-items: center; */
        overflow: hidden;
    }

    .fill img {
        flex-shrink: 0;
        min-width: 100%;
        min-height: 100%;
        object-fit:fill;
    }

    .top-left {
        position: absolute;
        top: 8px;
        left: 16px;
    }

    .top-right {
        position: absolute;
        top: 8px;
        right: 16px;
    }

    .cp-txt {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, 400%);
    }
</style>

<!-- Footer -->
<footer>

    <div class="fill position-relative">
        <img src="{{ asset('images/home_footer/foot_5.jpg') }}" alt="" style="width:100%;">

        <div class="container position-absolute">
            <div class="row m-2">
                <div class="col-4">col-4</div>
                <div class="col-8">
                    <div class="row float-left">
                        <div class="col">col</div>
                        <div class="col">col</div>
                        <div class="col">col</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</footer>
<!-- Footer -->

<!-- Copyright -->
<div class="container position-relative text-center" style="margin-top: -70px">
    <p class="">&copy; {{ date('Y') }} <b>Bee Technology and Research Hub</b> </p>
    <p class="">The contents of this website are the sole responsibility of BIID Foundation and MUCH, and do not necessarily reflect the views of the FAO, EU, USAID.</p>
</div>
<!-- Copyright -->