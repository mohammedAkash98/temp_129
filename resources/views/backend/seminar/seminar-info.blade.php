@extends('backend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Seminar</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('seminar.index') }}">Seminar</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="{{ route('seminar.index') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
            <div class="row">
                <!-- Single seminar Card -->
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <img width="100" src="{{ asset('storage/seminar/'. $seminar->image) }}" class="card-img-top" alt="{{ $seminar->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $seminar->name }}</h5>
                            <p class="card-text">{!! $seminar->description !!}</p>
                            <p class="card-text"><strong>Date:</strong> {{ $seminar->date }}</p>
                            <p class="card-text"><strong>Time:</strong> {{ $seminar->time }}</p>
                            <p class="card-text"><strong>Location:</strong> {{ $seminar->location }}</p>
                        </div>
                    </div>
                </div>
            </div>

    </div>



@endsection
