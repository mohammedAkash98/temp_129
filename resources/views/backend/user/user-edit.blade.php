@extends('backend.layouts.master')
@section('content')

<div class="pagetitle">
    <h1>User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
        <li class="breadcrumb-item active">Edit</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->

  <form action="{{ route('user.update',$user->id) }}" method="POST">
    @csrf
    <label for="is_class_member">Class Member:</label>
    <select class="form-control" name="is_class_member" id="is_class_member">
        <option value="{{ $user->is_club_member }}">  {{ $user->is_club_member ?? '' }}</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>

    <br>

    <label for="enrolled">Enrolled:</label>
   <input name="enrolled" type="text" class="form-control" value="{{ $user->enrolled ?? '' }}">

    <br>

    <button class="btn btn-primary btn-sm"><i class="fa-solid fa-floppy-disk"></i> Save</button>
</form>


@endsection
