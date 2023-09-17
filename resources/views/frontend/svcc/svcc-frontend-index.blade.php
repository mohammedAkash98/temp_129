@extends('main_master')
@section('page_content')
<div class="container mt-5">
    <div class="row g-4">
       @foreach ($svccs as $svcc )
        @include('frontend.svcc.svcc_image')
       @endforeach
    </div>
    {{ $svccs->links('pagination::bootstrap-4') }}
</div>
@endsection
