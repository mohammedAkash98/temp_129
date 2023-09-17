@extends('backend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Home Content</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home_content.index') }}">Home Content</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="{{ route('home_content.index') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
            <div class="row">
                <!-- Single home_content Card -->
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $home_content->name }}</h5>
                            <p class="card-text">{!! $home_content->description !!}</p>

                        </div>
                    </div>
                </div>
            </div>

    </div>



@endsection
