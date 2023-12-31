@extends('frontend.courses__lessons.course_2')

@section('course_content')

    <div class="container bg-light py-5 px-4">
        <div class="row text-center ">
            <div class="col-md-12 mb-3">
                @if ($star == 5)
                    <h2 class="star">
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>
                    </h2>
                @elseif ($star == 4)
                    <h2 class="star">
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>

                    </h2>
                @elseif ($star == 3)
                    <h2 class="star">
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>


                    </h2>
                @elseif ($star == 0)
                    <h3 class="text-center text-danger">আপনি নির্বাচিত হননি। </h3>
                    <h4 class="text-center text-success"><a href="{{ route('courses') }}">পুনরায় আবার চেষ্টা করুন।</a></h4>

                @endif

            </div>
            <div class="col-md-12 mb-5">
                <img style="width: 100px; height:100px; border-radius:50%" class="mb-2"
                    src="{{ asset('storage/student/' . auth()->user()->image) }}" alt="{{ auth()->user()->name }}">
                <h4> {{ auth()->user()->name }}</h4>
            </div>
            <div class="col-md-12 mb-4">
                <h4 class="text-success font-weight-bold">আপনার মূল্যায়নে অংশগ্রহন সম্পন্ন হয়েছে!</h4>
            </div>

            <div class="col-md-12 mb-2 line-bar">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $correct_percentage }}%;"
                    aria-valuenow="{{ $correct_percentage }}" aria-valuemin="0" aria-valuemax="100">
                    {{ $correct_percentage }}%
                </div>
                </div>
            </div>
            <div class="col-md-12 mb-5">
                <h4 class="text-center"><strong> {{ $correct_percentage }}%</strong></h4>
            </div>
        </div>
        {{-- circular bar --}}
        <div class="row text-center">
            <div class="col-md-12 mb-3">
                <h6 class="font-weight-bold">ফলাফল</h6>
            </div>
            <div class="col-md-4 circular-bar">
                <div class="progress mx-auto" data-value='{{ $correct_percentage }}'>
                    <span class="progress-left">
                        <span class="progress-bar border-success"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar border-success"></span>
                    </span>
                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="h2 font-weight-bold">{{ $correct_percentage }}<sup class="small">%</sup></div>
                    </div>
                </div>
                <p class="font-weight-bold text-muted mt-2">সঠিক হয়েছে</p>
            </div>

            <div class="col-md-4 circular-bar">
                <div class="progress mx-auto" data-value='{{ $skip_percentage }}'>
                    <span class="progress-left">
                        <span class="progress-bar border-success"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar border-success"></span>
                    </span>
                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="h2 font-weight-bold">{{ $skip_percentage }}<sup class="small">%</sup></div>
                    </div>
                </div>
                <p class="font-weight-bold text-muted mt-2">এড়িয়ে গিয়েছেন</p>
            </div>

            <div class="col-md-4 circular-bar">
                <div class="progress mx-auto" data-value='{{ $wrong_percentage }}'>
                    <span class="progress-left">
                        <span class="progress-bar border-success"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar border-success"></span>
                    </span>
                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="h2 font-weight-bold">{{ $wrong_percentage }}<sup class="small">%</sup></div>
                    </div>
                </div>
                <p class="font-weight-bold text-muted mt-2">ভুল হয়েছে</p>
            </div>
        </div>


        <div class="col-md-12 mt-4">
            <a href="{{ route('courses') }}" class="btn btn-success">পরবর্তী পাঠে যান</a>
        </div>

    </div>
    </div>
 <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <script>
        $(function() {

            $(".progress").each(function() {

                var value = $(this).attr('data-value');
                var left = $(this).find('.progress-left .progress-bar');
                var right = $(this).find('.progress-right .progress-bar');

                if (value > 0) {
                    if (value <= 50) {
                        right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
                    } else {
                        right.css('transform', 'rotate(180deg)')
                        left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
                    }
                }

            })

            function percentageToDegrees(percentage) {

                return percentage / 100 * 360

            }

        });
    </script>
@endsection
