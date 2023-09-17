@extends('main_master')
@section('page_content')
<div class="container mt-5">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <img class="w-100" src="{{ asset('storage/other/'. $other->image) }}" class="card-img-top" alt="{{ $other->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $other->name ?? '' }}</h5>
                    <div>
                        {!! $other->description ?? '' !!}
                    </div>
                </div>

            </div>
        </div>
        <a class="btn btn-primary btn-sm my-4" href="{{ route('others.frontend.index') }}"><i class="lni lni-arrow-left"></i> Go Back</a>
    </div>
</div>

@endsection
