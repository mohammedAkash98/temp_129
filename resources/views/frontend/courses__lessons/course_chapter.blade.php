@extends('main_master')

@section('page_content')
    <div class="top-navbar">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center">
@php
    $sl = 1;
@endphp

               @foreach ($courses as $course )
               <div class="box col-md-3">
                <h2 class="box-title{{ $sl++ }}">{{ $course->chapter_no_bangla ?? '' }}</h2>
                <p class="box-text{{ $sl++ }}">{{ $course->name ?? ''}}</p>
                <a href="{{ route('courses.show', $course->id) }}">
                    <button> সম্পন্ন</button>
                </a>
            </div>
               @endforeach

            </div>
        </div>


    </div>
@endsection
