@extends('main_master')

@section('page_css')
    <link rel="stylesheet" href="{{ asset('assets/css/course.css') }}">
@endsection

@section('page_content')
    <div class="container">

        <!-- upper navbarr -->
        <nav class="navbar navbar-expand-lg bg-light mb-3 mt-3 top-nav">
            <div class="navbar-collapse" id="navbarNav">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('courses') }}"
                                class="text-dark font-weight-bold">Course</a></li>
                        <li class="breadcrumb-item text-dark" aria-current="page">কৈশোরকালীন পুষ্টি ও স্বাস্থ্যসম্মত
                            জীবনধারা</li>
                    </ol>
                </nav>
            </div>
        </nav>

        <div class="row m-0">
            <!-- side navbar -->
          @include('frontend.courses__lessons.courses_sidebar')



            <!-- Main content -->
            <main class="col-md-8 col-lg-8 ms-sm-auto px-md-4">
                <div class="tab-content" id="v-pills-tabContent">
                    @yield('course_content')
                </div>
            </main>
        </div>
    </div>
@endsection

@section('page_js')
    <script src="{{ asset('assets/js/course.js') }}"></script>
@endsection
