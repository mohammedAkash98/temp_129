@extends('backend.layouts.master')
@section('content')

<div class="pagetitle">
    <h1>Quiz</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('quiz.index') }}">Quiz</a></li>
        <li class="breadcrumb-item active">Add Quiz</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->
  @if($chapters->count() == 0)
  <div class="container mt-5 text-center">
      <h4>There is no chapter added yet.</h4>
      <a href="{{ route('chapter.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-plus"></i>
          Add Chapter</a>

  </div>
  @elseif($lessons->count() == 0)
  <div class="container mt-5 text-center">
      <h4>There is no lessons added yet.</h4>
      <a href="{{ route('lesson.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-plus"></i>
          Add Lesson</a>

  </div>
  @else

  <div class="container">
    <form action="{{ route('quiz.store') }}" method="POST" >
        @csrf
     <div class="row">
           {{-- chapter --}}
           <div class="form-group mb-3 col-md-6">
            <label for="chapterName">Chapter Name:</label>
           <select class="form-control" name="chapter_id" id="chapter_id" required>
            <option value="" disabled selected>Select One</option>
           @foreach ($chapters as $chapter )
           <option value="{{ $chapter->id }}">{{ $chapter->name }}</option>
           @endforeach
           </select>
        </div>
{{-- lessons --}}
        <div class="form-group mb-3 col-md-6">
            <label for="lessonName">Lesson Name:</label>
           <select class="form-control" name="lesson_id" id="lesson_id" required>
            <option value="" disabled selected>Select One</option>
           @foreach ($lessons as $lesson )
           <option value="{{ $lesson->id }}">{{ $lesson->name }}</option>
           @endforeach
           </select>
        </div>

        <div class="form-group col-md-12 mb-3">
            <input type="text" class="form-control" id="question" name="question" placeholder="Enter Question">
            @if ($errors->has('question'))
                <span class="text-danger">{{ $errors->first('question') }}</span>
            @endif
        </div>
        <div class="form-group col-md-6 mb-3">
            <input type="text" class="form-control" id="option_1" name="option_1" placeholder="Option 1">
            @if ($errors->has('option_1'))
                <span class="text-danger">{{ $errors->first('option_1') }}</span>
            @endif
        </div>
        <div class="form-group col-md-6 mb-3">
            <input type="text" class="form-control" id="option2" name="option_2" placeholder="Option 2">
            @if ($errors->has('option_2'))
                <span class="text-danger">{{ $errors->first('option_2') }}</span>
            @endif
        </div>
        <div class="form-group col-md-6 mb-3">
            <input type="text" class="form-control" id="option_3" name="option_3" placeholder="Option 3">
            @if ($errors->has('option_3'))
                <span class="text-danger">{{ $errors->first('option_3') }}</span>
            @endif
        </div>
        <div class="form-group col-md-6 mb-3">
            <input type="text" class="form-control" id="option_4" name="option_4" placeholder="Option 4">
            @if ($errors->has('option_4'))
                <span class="text-danger">{{ $errors->first('option_4') }}</span>
            @endif
        </div>
        <div class="form-group col-md-12">
            <input type="text" class="form-control" id="correct_answer" name="correct_answer" placeholder="Correct Answer">
            @if ($errors->has('correct_answer'))
                <span class="text-danger">{{ $errors->first('correct_answer') }}</span>
            @endif
        </div>
     </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white">
            <i class="fa-solid fa-floppy-disk"></i> Save
        </button>
    </form>
</div>
@endif

@endsection
