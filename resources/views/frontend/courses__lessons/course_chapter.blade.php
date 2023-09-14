@extends('main_master')

@section('page_content')
@dd(Auth::user()->overview->current_chapter_id)
    <div class="top-navbar">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center">
               @foreach ($courses as $key=>$course )
               <div class="box col-md-3">
                <h1 class="box-title{{ $key++ }}" style="font-size:50px">{{ $course->chapter_no_bangla ?? '' }}</h1>
                <p class="box-text{{ $key++ }}">{{ $course->name ?? ''}}</p>
                <a href="{{ route('courses.show', $course->id) }}">
                        <button> সম্পন্ন</button>
                </a>
            </div>
               @endforeach

            </div>
        </div>


    </div>
@endsection
