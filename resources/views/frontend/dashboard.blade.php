@extends('frontend.layouts.master')


@section('content')
    <div class="container-fluid w-100 vh-100 mt-0 position-relative background-image">
        <div class="row mt-5 d-flex">
            <div class="col-md-12 mb-5 mt-5 justify-content-center align-items-center">
                <h1 class="text-center text-white text-danger-emphasis position-relative" style="z-index: 2;">
                    <strong>অভিনন্দন</strong>, <span id="userName">{{ auth()->user()->name }}</span>!</h1>
            </div>
            <div class="col-md-8 mx-auto text-center mt-2">
                <h2 class="text-white mb-3">ই-পুষ্টি প্লাটফর্মে আপনাকে স্বাগতম</h2>
                <p class="text-white">পুষ্টি ও স্বাস্থ্যসম্মত জীবনধারা বিষয়ে কিশোরকিশোরী ও তরুণদের সচেতনতা, জ্ঞান, দক্ষতা এবং নেতৃত্ব সৃষ্টির জন্য তথ্য-প্রযুক্তি ভিত্তিক একটি উদ্যোগ হল ই-পুষ্টি।</p>
                <a href="{{ route('courses') }}" class="btn btn-light mt-2">আমাদের কোর্সসমূহ</a>
            </div>

        </div>
    </div>

    {{-- <div class="row mb-5 justify-content-around">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Course Completed</h5>
                    <h2 class="text-warning">2</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Quiz Score</h5>
                    <h2 class="text-warning">200/300</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Course Completed</h5>
                    <h2 class="text-warning">2</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Course Completed</h5>
                    <h2 class="text-warning">2</h2>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
