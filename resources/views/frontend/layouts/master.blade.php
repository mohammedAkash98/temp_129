<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>E-Pushti</title>
    @include('frontend.layouts.header_link')
    @yield('page_css')
</head>
<style>
body{
    position: relative;
    background-image: url('{{ asset('images/studen_panel_background.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-color: #f0f0f0;
    &::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);

    }
}

</style>
<body>

    @include('frontend.layouts.header_design')

    @yield('content')



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
@include('frontend.layouts.header_script')
@yield('page_js')

</html>
