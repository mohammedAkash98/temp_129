@extends('backend.layouts.master')
@section('content')

    <div class="pagetitle">
        <h1>Other</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('other.index') }}">Other</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    @if ($others->count() == 0)
        <div class="container mt-5 text-center">
            <h4>There is no content added yet.</h4>
            <a href="{{ route('other.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add</a>

        </div>
    @else
        <div class="container">
            <a href="{{ route('other.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>URL</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($others as $key => $other)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $other->name ?? '' }}</td>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{!! $other->description ?? '' !!}</td>
                            <td><a href="{{ $other->url ?? '' }}">{{ $other->url ?? '' }}</a></td>
                            <td><img width="100" src="{{ asset('storage/other/' . $other->image) }}"
                                alt="{{ $other->name }}"></td>
                            <td>
                                <a href="{{ route('other.info', $other->id) }}" class="btn btn-info btn-sm text-white">
                                    <i class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="{{ route('other.edit', $other->id) }}" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="{{ route('other.delete', $other->id) }}"
                                    class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            {{ $others->links('pagination::bootstrap-4') }}
        </div>
    @endif

@endsection
