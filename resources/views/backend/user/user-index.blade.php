@extends('backend.layouts.master')
@section('content')

<div class="pagetitle">
    <h1>User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
        <li class="breadcrumb-item active">Index</li>
      </ol>
    </nav>
    <hr>
  </div><!-- End Page Title -->


  <div class="container mt-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sl No</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $sl = 1;
            @endphp
            @foreach ($users as $user )
            <tr>
                <td>{{ $sl++ }}</td>
                <td>{{ $user->name ?? ''}}</td>
                <td>
                    <a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary btn-sm text-white"> <i class="fa-solid fa-file-pen"></i> Edit</a>
                      <a href="{{ route('user.delete',$user->id) }}" class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                </td>
            </tr>
            @endforeach

            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

@endsection
