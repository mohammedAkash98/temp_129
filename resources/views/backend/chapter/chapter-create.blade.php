@extends('backend.layouts.master')
@section('content')

<div class="pagetitle">
    <h1>Chapter</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('chapter.index') }}">Chapter</a></li>
        <li class="breadcrumb-item active">Add Chapter</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->


  <div class="container">
    <h2>Add Chapter</h2>
    <form action="{{ route('chapter.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="chapterName">Chapter Name:</label>
            <input type="text" class="form-control" id="chapterName" name="name" >
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="image">Chapter Image:</label>
            <input type="file" class="form-control" id="image" name="image" >
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white"><i class="fa-solid fa-floppy-disk"></i> Save</button>
    </form>
</div>

@endsection
