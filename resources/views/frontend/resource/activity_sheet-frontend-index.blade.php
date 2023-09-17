@extends('main_master')
@section('page_content')
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>SL No.</th>
                    <th>PDF</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activity_sheets as $activity_sheet )
               <tr>
                <td>{{ ++$sl }}</td>

                <td><a href="{{ asset('storage/activity_sheet/'. $activity_sheet->pdf) }}" target="_blank">{{ $activity_sheet->pdf }}</a></td>
                <td><a href="{{ asset('storage/activity_sheet/'. $activity_sheet->pdf) }}" target="_blank" class="btn btn-info btn-sm"><i class="lni lni-eye"></i> View</a></td>
               </tr>
                @endforeach
            </tbody>
        </table>
        {{ $activity_sheets->links('pagination::bootstrap-4') }}
    </div>
@endsection
