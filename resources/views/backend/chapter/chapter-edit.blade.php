@extends('backend.layouts.master')
@section('content')

<div class="pagetitle">
    <h1>Chapter</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('chapter.index') }}">Chapter</a></li>
        <li class="breadcrumb-item active">Edit Chapter</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->


  <div class="container">
    <h2>Edit Chapter</h2>
    <form action="{{ route('chapter.update',$chapter->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">

            <label for="chapter_no_bangla">Chapter Name:</label>
            <input type="text" value="{{ $chapter->name }}" class="form-control" id="chapterName" name="name" >
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="image">Chapter Image:</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>


        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white"><i class="fa-solid fa-floppy-disk"></i> Save</button>
    </form>
</div>

@endsection
