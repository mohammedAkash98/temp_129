@extends('backend.layouts.master')
@section('content')

<div class="pagetitle">
    <h1>Lesson</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('lesson.index') }}">Lesson</a></li>
        <li class="breadcrumb-item active">Add Lesson</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->


  <div class="container mt-5">
    <h2>Add Lesson</h2>
    <form action="{{ route('lesson.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="chapterName">Chapter Name:</label>
           <select class="form-control" name="chapter_id" id="chapter_id">
            <option value="" disabled selected>Select One</option>
           @foreach ($chapters as $chapter )
           <option value="{{ $chapter->id }}">{{ $chapter->name }}</option>
           @endforeach
           </select>
        </div>
        <div class="form-group">
            <label for="lessonName">Lesson Name:</label>
            <input type="text" class="form-control" id="lessonName" name="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="lessonImage">Image:</label>
            <input type="file" class="form-control-file my-3" id="lessonImage" name="image">
            @if ($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="lessonDescription">Description:</label>
            <textarea class="form-control" id="lessonDescription" name="description" rows="4"></textarea>
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white">
            <i class="fa-solid fa-floppy-disk"></i> Save
        </button>
    </form>
</div>

@endsection
