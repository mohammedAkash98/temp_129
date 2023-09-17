@extends('backend.layouts.master')
@section('content')

<div class="pagetitle">
    <h1>SVCC</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('svcc.index') }}">SVCC</a></li>
        <li class="breadcrumb-item active">Add SVCC</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->


  <div class="container">
    <h2>Add SVCC</h2>
    <form action="{{ route('svcc.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-4">
            <div class="col-md-12">
                <label for="name">Title:</label>
                <input type="text" class="form-control" id="name" name="name" >
              </div>
          <div class="col-md-12">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" >
          </div>
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3 text-white"><i class="fa-solid fa-floppy-disk"></i> Save</button>
    </form>
</div>

@endsection
