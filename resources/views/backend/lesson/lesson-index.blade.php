@extends('backend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Lesson</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('lesson.index') }}">Lesson</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

@if($lessons->count() == 0)
<div class="container mt-5 text-center">
    <h4>There is no lesson added yet.</h4>
    <a href="{{ route('lesson.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-plus"></i>
        Add Lesson</a>

</div>

@else
    <div class="container mt-5">
        <a href="{{ route('lesson.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-plus"></i>
            Add Lesson</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $sl = 1;
                @endphp
                @foreach ($lessons as $lesson)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $lesson->name ?? '' }}</td>
                        <td>{{ $lesson->description ?? '' }}</td>
                        <td><img width="100" src="{{ asset('storage/lesson/'. $lesson->image) }}" alt="{{ $lesson->name }}"></td>
                        <td>
                            <a href="{{ route('lesson.edit', $lesson->id) }}" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                            <a href="{{ route('lesson.delete', $lesson->id) }}" class="btn btn-danger btn-sm text-white"><i
                                    class="fa-solid fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                @endforeach

                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

@endif

@endsection
