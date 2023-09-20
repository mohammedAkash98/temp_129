@php
$numto = new Rakibhstu\Banglanumber\NumberToBangla();
$sl = 1;
@endphp

@extends('main_master')

@section('page_content')
    @php
        $current_chapter_id = auth()->user()->overview->current_chapter_id;
    @endphp

    <div class="top-navbar">
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center">
                @foreach ($courses as $key => $course)
                    <div class="box col-md-3">
                        <h1 class="box-title{{ $key++ }}" style="font-size:50px">{{ $numto->bnNum($sl++)?? '' }}
                        </h1>
                        <p class="box-text{{ $key++ }}">{{ $course->name ?? '' }}</p>
                        @if ($key - 1 <= $current_chapter_id)
                            <a href="{{ route('courses.show', $course->id) }}">
                                <button
                                    class="bg-success text-black border border-success rounded-pill p-2 btn"><b>সম্পন্ন</b></button>
                            </a>
                        @else
                            <a href="{{ route('courses.show', $course->id) }}">
                                <button class="text-black border border-warning rounded-pill p-2 btn"><b>সম্পন্ন <i
                                            class="lni lni-lock-alt h6"></i> </b></button>
                            </a>
                        @endif
                    </div>
                @endforeach

            </div>
        </div>


    </div>

    <style>

    </style>





@endsection
