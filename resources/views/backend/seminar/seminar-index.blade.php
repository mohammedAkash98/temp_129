@extends('main_master')
@section('page_content')

    <div class="pagetitle">
        <h1>Seminar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('seminar.index') }}">Seminar</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    @if ($seminars->count() == 0)
        <div class="container mt-5 text-center">
            <h4>There is no seminar added yet.</h4>
            <a href="{{ route('seminar.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Seminar</a>

        </div>
    @else
        <div class="container">
            <a href="{{ route('seminar.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Seminar</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($seminars as $key => $seminar)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $seminar->name ?? '' }}</td>
                            <td><img width="100" src="{{ asset('storage/seminar/' . $seminar->image) }}"
                                    alt="{{ $seminar->name }}"></td>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                {!! $seminar->description ?? '' !!}</td>
                            <td>{{ $seminar->date ?? '' }}</td>
                            <td>{{ $seminar->time ?? '' }}</td>
                            <td>{{ $seminar->location ?? '' }}</td>
                            <td>
                                <a href="{{ route('seminar.info', $seminar->id) }}" class="btn btn-info btn-sm text-white">
                                    <i class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="{{ route('seminar.edit', $seminar->id) }}" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="{{ route('seminar.delete', $seminar->id) }}"
                                    class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            {{ $seminars->links('pagination::bootstrap-4') }}
        </div>
    @endif

@endsection
