@extends('backend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>SVCC</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('svcc.index') }}">SVCC</a></li>
                <li class="breadcrumb-item active">Info</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Title -->

    <div class="container">
        <a href="{{ route('svcc.index') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-backward"></i>
            Back</a>
            <div class="row">
                <!-- Single svcc Card -->
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <img  src="{{ asset('storage/svcc/'. $svcc->image) }}" class="card-img-top w-100" alt="{{ $svcc->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $svcc->name }}</h5>
                        </div>
                    </div>
                </div>
            </div>

    </div>



@endsection
