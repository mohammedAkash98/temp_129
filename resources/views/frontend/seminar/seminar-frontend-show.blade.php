@extends('main_master')
@section('page_content')
<div class="container mt-5">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <img class="w-100" src="{{ asset('storage/seminar/'. $seminar->image) }}" class="card-img-top" alt="{{ $seminar->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $seminar->name ?? '' }}</h5>
                    <div class="card-text"><p><strong>Date: </strong>{{ $seminar->date }}</p></div>
                    <div class="card-text"><p><strong>Time: </strong>{{ $seminar->time }}</p></div>
                    <div class="card-text"><p><strong>Location: </strong>{{ $seminar->location }}</p></div>
                    <div class="card-text text-justify">
                        {!! $seminar->description ?? '' !!}
                    </div>

                </div>

            </div>
        </div>
        <a class="btn btn-primary btn-sm my-4" href="{{ route('seminar.frontend.index') }}"><i class="lni lni-arrow-left"></i> Go Back</a>
    </div>
</div>

@endsection
