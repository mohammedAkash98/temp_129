@extends('main_master')

@section('page_content')
    <style>
        /* Custom CSS for the certificate design */
    </style>

    <div class="container mt-5 text-center">
        <h1>দুঃখিত আপনার কুইজের স্কোর সন্তোষজনক নয়।</h1>
        <br>
        <h1>পুনরায় অধ্যায় সমূহ পড়ে আবারও কুইজে অংশগ্রহণ করুন। </h1>
        <br>
        <br>
        <a class="btn btn-block btn-success btn-lg" href="{{Route('courses')}}">কোর্সে ফিরে যান </a>
    </div>
@endsection
