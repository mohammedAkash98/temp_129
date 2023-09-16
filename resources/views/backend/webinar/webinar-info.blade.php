@extends('backend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Webinar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('webinar.index') }}">Webinar</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="{{ route('webinar.index') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
            <div class="row">
                <!-- Single Webinar Card -->
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <img width="100" src="{{ asset('storage/webinar/'. $webinar->image) }}" class="card-img-top" alt="{{ $webinar->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $webinar->name }}</h5>
                            <p class="card-text">{{ $webinar->description }}</p>
                            <p class="card-text"><strong>Date:</strong> {{ $webinar->date }}</p>
                            <p class="card-text"><strong>Time:</strong> {{ $webinar->time }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $webinar->location }}</p>
                        </div>
                    </div>
                </div>
            </div>

    </div>



@endsection
