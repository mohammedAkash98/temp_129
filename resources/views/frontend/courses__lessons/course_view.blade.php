@extends('frontend.courses__lessons.course_2')
@section('course_content')
    <div>
        @if ($lesson->image)
            <img class="w-100 mb-2" src="{{ asset('storage/lesson/' . $lesson->image) }}" alt="">
        @endif
        @if ($lesson->audio)
            <audio class="w-100 mb-2" controls>
                <source src="{{ asset('storage/lesson/' . $lesson->audio) }}" type="audio/mpeg">
            </audio>
        @endif

        @if ($lesson->video)
            <video class="w-100 mb-2" controls>
                <source src="{{ asset('storage/lesson/' . $lesson->video) }}" type="video/mp4">

            </video>
        @endif

        <h1>{{ $lesson->name }}</h1>
    </div>
    <p>{!! $lesson->description !!}</p>
    <div style="text-align: right;">
        <a href="{{ route('quiz.view', ['chapter_id' => $lesson->chapter->id, 'lesson_id' => $lesson->id]) }}"
            class="btn btn-success btn-sm">নিজেকে যাচাই করুন</a>
    </div>
@endsection
