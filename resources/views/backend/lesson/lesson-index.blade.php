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
            <a href="{{ route('lesson.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Lesson</a>

        </div>
    @else
        <div class="container">
            <a href="{{ route('lesson.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Lesson</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Lesson No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Chapter</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lessons as $lesson)
                        <tr>
                            <td>{{ $lesson->lesson_no_bangla }}</td>
                            <td>{{ $lesson->name ?? '' }}</td>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{{ $lesson->description ?? '' }}</td>
                            <td>{{ $lesson->chapter->name ?? '' }}</td>
                            <td><img width="100" src="{{ asset('storage/lesson/' . $lesson->image) }}"
                                    alt="{{ $lesson->name }}"></td>
                            <td>
                                <a href="{{ route('lesson.info', $lesson->id) }}" class="btn btn-info btn-sm text-white">
                                    <i class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="{{ route('lesson.edit', $lesson->id) }}"
                                    class="btn btn-primary btn-sm text-white"> <i class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="{{ route('lesson.delete', $lesson->id) }}"
                                    class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            {{ $lessons->links('pagination::bootstrap-4') }}
        </div>
    @endif

@endsection
