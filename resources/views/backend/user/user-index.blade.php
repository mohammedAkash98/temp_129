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

    <form class="form-inline ml-auto mb-3" action="{{ route('user.search') }}" method="POST">
        @csrf
        <div class="input-group">
            <input class="form-control" type="text" name="query" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <div class="container">
        <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-plus"></i>
            Add User</a>
        <a href="{{ route('user.pdf.report') }}" class="btn btn-success btn-sm mb-3 text-white"><i class="fa-solid fa-file-pdf"></i>
            Generate Reports</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>User Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $user)
                    <tr>
                        <td>{{ ++$sl }}</td>
                        <td>{{ $user->name ?? '' }}</td>
                        <td>{{ $user->type ?? '' }}</td>
                        <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                            <a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger btn-sm text-white"><i
                                    class="fa-solid fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                @endforeach

                <!-- Add more rows as needed -->
            </tbody>
        </table>
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
@endsection
