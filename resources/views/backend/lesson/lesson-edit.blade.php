@extends('backend.layouts.master')
@section('content')

<div class="pagetitle">
    <h1>Lesson</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('lesson.index') }}">Lesson</a></li>
        <li class="breadcrumb-item active">Edit Lesson</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->


  <div class="container">
    <h2>Edit Lesson</h2>
    <form action="{{ route('lesson.update',$lesson->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="chapterName">Chapter Name:</label>
           <select class="form-control" name="chapter_id" id="chapter_id" required>
            <option value="" disabled selected>Select One</option>
           @foreach ($chapters as $chapter )
           <option value="{{ $chapter->id }}">{{ $chapter->name }}</option>
           @endforeach
           </select>

        </div>
        <div class="form-group mb-3">
            <label for="lessonName">Lesson Name:</label>
            <input value="{{ $lesson->name }}" type="text" class="form-control" id="lessonName" name="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="lessonImage">Image:</label>
            <input type="file" class="form-control-file my-3" id="lessonImage" name="image">
          <div>
            @if ($errors->has('image'))
            <span class="text-danger">{{ $errors->first('image') }}</span>
        @endif
          </div>
        </div>
        <div class="form-group">
            <label for="lessonImage">Video:</label>
            <input type="file" class="form-control-file my-3" id="lessonImage" name="video">
        </div>
        <div class="form-group">
            <label for="lessonImage">Audio:</label>
            <input type="file" class="form-control-file my-3" id="lessonImage" name="video">
        </div>

        <div class="form-group mb-3">
            <label for="header_description">Header Description:</label>
            <textarea class="form-control" id="editor" name="header_description" rows="4">{{ $lesson->header_description }}</textarea>
            @if ($errors->has('header_description'))
                <span class="text-danger">{{ $errors->first('header_description') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="lessonDescription">Description:</label>
            <textarea class="form-control" id="editor_2" name="description" rows="4">{{ $lesson->description }}</textarea>
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white">
            <i class="fa-solid fa-floppy-disk"></i> Save
        </button>
    </form>
</div>
@include('backend.layouts.partials.ckeditor')
@endsection
