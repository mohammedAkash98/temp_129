<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-PUSHTI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    @include('backend.layouts.partials.cdn')

</head>

<body>

    <!-- ======= Header ======= -->
    @include('home_page.home_page_header')
    <!-- End Header -->


    <main id="main" class="main">

        <section class="">
            <div class="row">
                {{-- @yield('content') --}}
                <div>hello</div>
            </div>
        </section>

    </main>

    <!-- ======= Footer ======= -->
    {{-- @include('backend.layouts.partials.footer') --}}

    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
</body>
<!-- Vendor JS Files -->
@include('home_page.home_page_sccript')
</html>
