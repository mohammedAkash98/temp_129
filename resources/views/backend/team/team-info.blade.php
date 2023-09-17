@extends('backend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Team</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('team.index') }}">Team</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="{{ route('team.index') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
            <div class="row">
                <!-- Single team Card -->
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <img width="100" src="{{ asset('storage/team/'. $team->image) }}" class="card-img-top" alt="{{ $team->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $team->name }}</h5>
                            <p class="card-text">{{ $team->designation }}</p>
                            <p class="card-text"><strong>Facebook:</strong> {{ $team->facebook_url }}</p>
                            <p class="card-text"><strong>Instagram:</strong> {{ $team->instagram_url }}</p>
                            <p class="card-text"><strong>Twitter:</strong> {{ $team->twitter_url }}</p>
                        </div>
                    </div>
                </div>
            </div>

    </div>



@endsection
