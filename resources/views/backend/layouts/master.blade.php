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

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('backend.layouts.partials.navbar')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('backend.layouts.partials.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">



    <section class="section dashboard">
      <div class="row">


@yield('content')

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@include('backend.layouts.partials.footer')

  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
@include('backend.layouts.partials.script')

</body>

</html>
