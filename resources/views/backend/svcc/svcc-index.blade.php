@extends('backend.layouts.master')
@section('content')

    <div class="pagetitle">
        <h1>SVCC</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('svcc.index') }}">SVCC</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    @if ($svccs->count() == 0)
        <div class="container mt-5 text-center">
            <h4>There is no SVCC added yet.</h4>
            <a href="{{ route('svcc.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add SVCC</a>

        </div>
    @else
        <div class="container">
            <a href="{{ route('svcc.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add SVCC</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($svccs as $key => $svcc)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $svcc->name ?? '' }}</td>
                            <td><img width="100" src="{{ asset('storage/svcc/' . $svcc->image) }}"
                                    alt="{{ $svcc->name }}"></td>
                            <td>
                                <a href="{{ route('svcc.info', $svcc->id) }}" class="btn btn-info btn-sm text-white">
                                    <i class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="{{ route('svcc.edit', $svcc->id) }}" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="{{ route('svcc.delete', $svcc->id) }}"
                                    class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            {{ $svccs->links('pagination::bootstrap-4') }}
        </div>
    @endif

@endsection
