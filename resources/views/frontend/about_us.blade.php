@extends('main_master')

@section('page_content')
    <header class="text-white text-center py-5 bg-success">
        <h1 class="display-4">About Us</h1>
    </header>

    <div class="container p-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Our Mission</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lacinia justo a ante ultrices, ac tempor
                    urna tincidunt.</p>
            </div>
            <div class="col-md-6">
                <h2>Our Team</h2>
                <ul>
                    <li>John Doe - CEO</li>
                    <li>Jane Smith - COO</li>
                    <li>Mike Johnson - CTO</li>
                </ul>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <h2>Company History</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lacinia justo a ante ultrices, ac tempor
                    urna tincidunt.</p>
            </div>
        </div>
    </div>
@endsection
