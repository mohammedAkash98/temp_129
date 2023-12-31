@extends('backend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Lesson</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('lesson.index') }}">Lesson</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="{{ route('lesson.index') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
            <div class="row">
                <!-- Single Lesson Card -->
                <div class="col-md-12 mx-auto">
                    <div class="card">
                       @if($lesson->image)
                       <img class="w-100" src="{{ asset('storage/lesson/'. $lesson->image) }}" class="card-img-top" alt="{{ $lesson->name }}">
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
                        <div class="card-body">
                            <h5 class="card-title">{{ $lesson->name }}</h5>
                            <p class="card-text">{!! $lesson->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>



@endsection
