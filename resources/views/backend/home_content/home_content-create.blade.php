@extends('backend.layouts.master')
@section('content')

<div class="pagetitle">
    <h1>Home Content</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home_content.index') }}">Home Content</a></li>
        <li class="breadcrumb-item active">Add Home Content</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->


  <div class="container">
    <h2>Add Home Content</h2>
    <form action="{{ route('home_content.store') }}" method="POST">
        @csrf
        <div class="row g-4">
            <div class="col-md-12">
                <label for="name">Title:</label>
                <input type="text" class="form-control" id="name" name="name" >
              </div>

          <div class="col-md-12">
            <label for="description">Description:</label>
            <textarea name="description" id="editor" cols="30" rows="10"></textarea>
          </div>

        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white"><i class="fa-solid fa-floppy-disk"></i> Save</button>
    </form>
</div>
@include('backend.layouts.partials.ckeditor')
@endsection
