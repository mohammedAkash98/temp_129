@extends('backend.layouts.master')
@section('content')

    <div class="pagetitle">
        <h1>Activity Sheet</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('activity_sheet.index') }}">Activity Sheet</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    @if ($activity_sheets->count() == 0)
        <div class="container mt-5 text-center">
            <h4>There is no activity sheet added yet.</h4>
            <a href="{{ route('activity_sheet.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Activity Sheet</a>

        </div>
    @else
        <div class="container">
            <a href="{{ route('activity_sheet.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Activity Sheet</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Name</th>
                        <th>PDF</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activity_sheets as $key => $activity_sheet)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $activity_sheet->name ?? '' }}</td>
                            <td><a href="{{ asset('storage/activity_sheet/'. $activity_sheet->pdf) }}" target="_blank">{{ $activity_sheet->pdf }}</a></td>
                            <td>
                                <a href="{{ asset('storage/activity_sheet/'. $activity_sheet->pdf) }}" target="_blank" class="btn btn-info btn-sm text-white">
                                    <i class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="{{ route('activity_sheet.edit', $activity_sheet->id) }}" class="btn btn-primary btn-sm text-white"> <i
                                    class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="{{ route('activity_sheet.delete', $activity_sheet->id) }}"
                                    class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            {{ $activity_sheets->links('pagination::bootstrap-4') }}
        </div>
    @endif

@endsection
