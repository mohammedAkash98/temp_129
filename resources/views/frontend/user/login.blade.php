@extends('frontend.layouts.master')

@section('content')
<div class="container mt-5">
    <h2>Registration Form</h2>
    <form action="{{ route('login.store') }}" method="POST">
      @csrf


        <!-- Mobile Number -->
        <div class="form-group">
            <label for="mobile">Mobile Number:</label>
            <input type="tel" class="form-control" id="mobile" name="phone_no" >
        </div>



        <!-- Password -->
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" >
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>

@endsection
