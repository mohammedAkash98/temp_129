<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-PUSHTI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
    rel="stylesheet"
    />
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
    @include('home_page.home_footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
</body>
<!-- Vendor JS Files -->
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
></script>
@include('home_page.home_page_sccript')
</html>
