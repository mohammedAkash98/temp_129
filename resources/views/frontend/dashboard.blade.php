@extends('frontend.layouts.master')

@section('content')
Dashboard
<h3>Hello, {{ auth()->user()->name ?? '' }}</h3>

@endsection
