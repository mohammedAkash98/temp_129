@extends('main_master')
@section('page_content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center mt-5">
                <h2 class="mb-4">দুঃখিত আপনি ইতোমধ্যেই এই কুইজে অংশগ্রহণ করেছেন ।</h2>
                <a href="{{ route('courses') }}" class="btn btn-success ">কোর্সে ফিরে যান</a>
            </div>
        </div>
    </div>
@endsection
