@extends('backend.layouts.master')
@section('content')

    <div class="pagetitle">
        <h1>Home Content</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home_content.index') }}">Home Content</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    @if ($home_contents->count() == 0)
        <div class="container mt-5 text-center">
            <h4>There is no Home Content added yet.</h4>
            <a href="{{ route('home_content.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Home Content</a>

        </div>
    @else
        <div class="container">
            <a href="{{ route('home_content.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Home Content</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($home_contents as $key => $home_content)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $home_content->name ?? '' }}</td>
                            <td style="max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">{!! $home_content->description ?? '' !!}</td>
                            <td>
                                <a href="{{ route('home_content.info', $home_content->id) }}" class="btn btn-info btn-sm text-white">
                                    <i class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="{{ route('home_content.edit', $home_content->id) }}" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="{{ route('home_content.delete', $home_content->id) }}"
                                    class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            {{ $home_contents->links('pagination::bootstrap-4') }}
        </div>
    @endif

@endsection
