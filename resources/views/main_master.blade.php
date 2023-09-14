<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Pushti</title>

        @include('frontend.layouts.header_link')
        @yield('page_css')

    </head>
    <body class="antialiased">
        {{-- header --}}
        @include('frontend.layouts.header_design')

        @yield('page_content')
    
    </body>
    {{-- script --}}
    @include('frontend.layouts.header_script')
    @yield('page_js')
</html>
