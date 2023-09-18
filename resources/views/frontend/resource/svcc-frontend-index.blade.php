@extends('main_master')
@section('page_content')
<div class="container mt-5">
    <div class="row g-4">
       @foreach ($svccs as $svcc )
       <div class="col-md-4 mb-4">
        <div class="p-2 border">
            <img class="img-fluid" src="{{ asset('storage/svcc/'. $svcc->image) }}" alt="{{ $svcc->name }}">
        </div>

        </div>
       @endforeach
    </div>
    {{ $svccs->links('pagination::bootstrap-4') }}
</div>
@endsection
