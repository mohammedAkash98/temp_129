@extends('backend.layouts.master')
@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
      <hr>
    </nav>
  </div>
<div class="container">
    <div class="row g-4">

            <div class="col-md-3">
                <a href="{{ route('user.index') }}">
                <div class="dashboard-box bg-primary text-white font-weight-bold p-4">
                    <h4>User</h4>
                    <p>{{ $users->count() }}</p>
                </div>
            </a>
            </div>


        <div class="col-md-3">
            <a href="{{ route('chapter.index') }}">
            <div class="dashboard-box bg-info text-white font-weight-bold p-4">
                <h4>Chapter</h4>
                <p>{{ $chapters->count() }}</p>
            </div>
        </a>
        </div>


            <div class="col-md-3">
                <a href="{{ route('lesson.index') }}">
                <div class="dashboard-box bg-success text-white font-weight-bold p-4">
                    <h4>Lesson</h4>
                    <p>{{ $lessons->count() }}</p>
                </div>
            </a>
            </div>


        <div class="col-md-3">
            <a href="{{ route('quiz.index') }}">
            <div class="dashboard-box bg-danger text-white font-weight-bold p-4">
                <h4>Quiz</h4>
                <p>{{ $quizzes->count() }}</p>
            </div>
        </a>
        </div>

    </div>
</div>

@endsection
