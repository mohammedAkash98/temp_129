@extends('frontend.courses__lessons.course_2')
@section('course_content')
<img width="100" src="{{ asset('storage/lesson/'. $lesson->image) }}" alt="">
<h1>{{ $lesson->name }}</h1>
<p>{!! $lesson->description !!}</p>
@endsection
