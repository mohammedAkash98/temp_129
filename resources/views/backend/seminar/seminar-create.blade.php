@extends('backend.layouts.master')
@section('content')

<div class="pagetitle">
    <h1>Seminar</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('seminar.index') }}">Seminar</a></li>
        <li class="breadcrumb-item active">Add seminar</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->


  <div class="container">
    <h2>Add Seminar</h2>
    <form action="{{ route('seminar.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-4">
            <div class="col-md-12">
                <label for="name">Seminar Name:</label>
                <input type="text" class="form-control" id="name" name="name" >
              </div>
          <div class="col-md-12">
            <label for="image">Seminar Image:</label>
            <input type="file" class="form-control" id="image" name="image" >
          </div>

           <div class="col-md-12">
            <label for="description">Seminar Description:</label>

            <textarea name="description" class="form-control" cols="30" rows="10" id="editor"></textarea>
           </div>


           <div class="col-md-4">
            <label for="date">Seminar Date:</label>
            <input type="date" class="form-control" id="date" name="date" >
           </div>


          <div class="col-md-4">
            <label for="time">Seminar Time:</label>
            <input type="time" class="form-control" id="time" name="time" >
          </div>

           <div class="col-md-4">
            <label for="location">Seminar Location:</label>
            <input type="text" class="form-control" id="location" name="location" >
           </div>


        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white"><i class="fa-solid fa-floppy-disk"></i> Save</button>
    </form>
</div>
@include('backend.layouts.partials.ckeditor')
@endsection
