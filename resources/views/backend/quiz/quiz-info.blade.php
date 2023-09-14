@extends('backend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Quiz</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('quiz.index') }}">Quiz</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="{{ route('quiz.index') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
        <div class="card">
          <div class="card-header">
            <h3>Multiple Choice Question</h3>
          </div>
          <div class="card-body">
             <p class="card-text"><strong>Q. {{ $quiz->question }}</strong></p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                   1. {{ $quiz->option_1 }}
                  </li>
                  <li class="list-group-item">
                    2. {{ $quiz->option_2 }}
                  </li>
                  <li class="list-group-item">
                    3. {{ $quiz->option_3 }}
                  </li>
                  <li class="list-group-item">
                   4. {{ $quiz->option_4 }}
                  </li>
            </ul>
            <p class="card-text text-muted">The correct answer is <strong>{{ $quiz->correct_answer }}</strong>.</p>
          </div>
        </div>
      </div>



@endsection
