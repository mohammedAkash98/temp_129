@extends('backend.layouts.master')
@section('content')

    <div class="pagetitle">
        <h1>team</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('team.index') }}">Team</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    @if ($teams->count() == 0)
        <div class="container mt-5 text-center">
            <h4>There is no team added yet.</h4>
            <a href="{{ route('team.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Team</a>

        </div>
    @else
        <div class="container">
            <a href="{{ route('team.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Team</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Designation</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>Twitter</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $key => $team)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $team->name ?? '' }}</td>
                            <td><img width="100" src="{{ asset('storage/team/' . $team->image) }}"
                                    alt="{{ $team->name }}"></td>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                {!! $team->designation ?? '' !!}</td>
                            <td>{{ $team->facebook_url ?? '' }}</td>
                            <td>{{ $team->instagram_url ?? '' }}</td>
                            <td>{{ $team->twitter_url ?? '' }}</td>
                            <td>
                                <a href="{{ route('team.info', $team->id) }}" class="btn btn-info btn-sm text-white">
                                    <i class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="{{ route('team.edit', $team->id) }}" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="{{ route('team.delete', $team->id) }}"
                                    class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            {{ $teams->links('pagination::bootstrap-4') }}
        </div>
    @endif

@endsection
