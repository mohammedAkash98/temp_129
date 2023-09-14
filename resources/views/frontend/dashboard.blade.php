@extends('frontend.layouts.master')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mb-5">
            <h1 class="text-center text-danger-emphasis">Welcome, <span id="userName">{{ auth()->user()->name }}</span>!</h1>
        </div>
    </div>



    <div class="row mb-5 justify-content-around">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Course Completed</h5>
                    <h2 class="text-warning">2</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Quiz Score</h5>
                    <h2 class="text-warning">200/300</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Course Completed</h5>
                    <h2 class="text-warning">2</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Course Completed</h5>
                    <h2 class="text-warning">2</h2>
                </div>
            </div>
        </div>
    </div>




</div>

@endsection