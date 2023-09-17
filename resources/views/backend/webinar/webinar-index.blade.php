@extends('backend.layouts.master')
@section('content')

    <div class="pagetitle">
        <h1>Webinar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('webinar.index') }}">Webinar</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    @if ($webinars->count() == 0)
        <div class="container mt-5 text-center">
            <h4>There is no webinar added yet.</h4>
            <a href="{{ route('webinar.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Webinar</a>

        </div>
    @else
        <div class="container">
            <a href="{{ route('webinar.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Webinar</a>
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
                    @foreach ($webinars as $key => $webinar)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $webinar->name ?? '' }}</td>
                            <td><img width="100" src="{{ asset('storage/webinar/' . $webinar->image) }}"
                                    alt="{{ $webinar->name }}"></td>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                {!! $webinar->description ?? '' !!}</td>
                            <td>{{ $webinar->date ?? '' }}</td>
                            <td>{{ $webinar->time ?? '' }}</td>
                            <td>{{ $webinar->location ?? '' }}</td>
                            <td>
                                <a href="{{ route('webinar.info', $webinar->id) }}" class="btn btn-info btn-sm text-white">
                                    <i class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="{{ route('webinar.edit', $webinar->id) }}" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="{{ route('webinar.delete', $webinar->id) }}"
                                    class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            {{ $webinars->links('pagination::bootstrap-4') }}
        </div>
    @endif

@endsection
