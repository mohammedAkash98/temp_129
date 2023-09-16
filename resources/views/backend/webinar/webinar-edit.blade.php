@extends('backend.layouts.master')
@section('content')

<div class="pagetitle">
    <h1>Webinar</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('webinar.index') }}">Webinar</a></li>
        <li class="breadcrumb-item active">Edit Webinar</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->


  <div class="container">
    <h2>Edit Webinar</h2>
    <form action="{{ route('webinar.update',$webinar->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-4">
            <div class="col-md-12">
                <label for="name">Webinar Name:</label>
                <input type="text" value="{{ $webinar->name }}" class="form-control" id="name" name="name" >
              </div>
          <div class="col-md-12">
            <label for="image">Webinar Image:</label>
            <input type="file" class="form-control" id="image" name="image" >
          </div>

           <div class="col-md-12">
            <label for="description">Webinar Description:</label>

            <textarea name="description" class="form-control" cols="30" rows="10" id="editor">{{ $webinar->description }}</textarea>
           </div>


           <div class="col-md-4">
            <label for="date">Webinar Date:</label>
            <input type="date" value="{{ $webinar->date }}" class="form-control" id="date" name="date" >
           </div>


          <div class="col-md-4">
            <label for="time">Webinar Time:</label>
            <input type="time" value="{{ $webinar->time }}" class="form-control" id="time" name="time" >
          </div>

           <div class="col-md-4">
            <label for="location">Webinar Location:</label>
            <input type="text" value="{{ $webinar->location }}" class="form-control" id="location" name="location" >
           </div>


        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white"><i class="fa-solid fa-floppy-disk"></i> Save</button>
    </form>
</div>
@include('backend.layouts.partials.ckeditor')
@endsection
