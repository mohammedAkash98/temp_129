@extends('backend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Chapter</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('chapter.index') }}">Chapter</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

@if($chapters->count() == 0)
<div class="container mt-5 text-center">
    <h4>There is no chapter added yet.</h4>
    <a href="{{ route('chapter.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-plus"></i>
        Add Chapter</a>

</div>

@else
    <div class="container mt-5">
        <a href="{{ route('chapter.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-plus"></i>
            Add Chapter</a>
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
                @foreach ($chapters as $chapter)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $chapter->name ?? '' }}</td>
                        <td>
                            <a href="{{ route('chapter.edit', $chapter->id) }}" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                            <a href="{{ route('chapter.delete', $chapter->id) }}" class="btn btn-danger btn-sm text-white"><i
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
