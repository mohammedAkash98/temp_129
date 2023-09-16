@extends('backend.layouts.master')
@section('content')

<div class="pagetitle">
    <h1>Team</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('team.index') }}">Team</a></li>
        <li class="breadcrumb-item active">Edit Team</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->


  <div class="container">
    <h2>Edit Team</h2>
    <form action="{{ route('team.update',$team->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-4">
            <div class="col-md-12">
                <label for="name">Name:</label>
                <input type="text" value="{{ $team->name }}" class="form-control" id="name" name="name" >
              </div>
          <div class="col-md-12">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" >
          </div>

           <div class="col-md-12">
            <label for="designation">Designation:</label>

            <input type="text" value="{{ $team->designation }}" class="form-control" id="designation" name="designation">
           </div>


           <div class="col-md-12">
            <label for="facebook_url">Facebook URL:</label>
            <input type="text" value="{{ $team->facebook_url }}" class="form-control" id="facebook_url" name="facebook_url" >
           </div>


           <div class="col-md-12">
            <label for="instagram_url">Instagram URL:</label>
            <input type="text" value="{{ $team->instagram_url }}" class="form-control" id="instagram_url" name="instagram_url" >
           </div>

           <div class="col-md-12">
            <label for="twitter_url">Twitter URL:</label>
            <input type="text" value="{{ $team->twitter_url }}" class="form-control" id="twitter_url" name="twitter_url" >
           </div>


        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white"><i class="fa-solid fa-floppy-disk"></i> Save</button>
    </form>
</div>
@include('backend.layouts.partials.ckeditor')
@endsection
