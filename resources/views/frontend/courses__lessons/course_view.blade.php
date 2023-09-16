@extends('frontend.courses__lessons.course_2')
@section('course_content')
<div>
    <img class="w-100 mb-2" src="{{ asset('storage/lesson/'. $lesson->image) }}" alt="">
<h1>{{ $lesson->name }}</h1>
</div>
<p>{!! $lesson->description !!}</p>
<div style="text-align: right;">
    <a href="{{ route('quiz.view',$lesson->id) }}" class="btn btn-success btn-sm">নিজেকে যাচাই করুন</a>
</div>
@endsection
