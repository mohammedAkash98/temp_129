@extends('backend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Other</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('other.index') }}">Other</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="{{ route('other.index') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
            <div class="row">
                <!-- Single other Card -->
                <div class="col-md-12 mx-auto">
                    <div class="card p-4">
                        <img class="w-100 mb-2" src="{{ asset('storage/other/' . $other->image) }}" alt="{{ $other->name }}">
                        <h5 class="card-title">{{ $other->name }}</h5>
                        <p class="card-text">{!! $other->description !!}</p>
                        <p class="card-text"><strong>URL:</strong> <a href="{{ $other->url }}">{{ $other->url }}</a></p>
                    </div>
                </div>
            </div>

    </div>



@endsection
