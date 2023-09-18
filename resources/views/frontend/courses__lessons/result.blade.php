@extends('frontend.courses__lessons.course_2')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/progressbar.js@1.0.1/dist/progressbar.min.css">
@section('course_content')
    <style>
        span {
            color: orangered;
        }

        .text-muted {
            font-size: 12px;
        }

        .progress {
            height: 30px;
            background-color: #f5f5f5;
            border-radius: 15px;
            margin-top: 10px;
        }

        .progress-bar {
            background-color: #28a745;
            color: #fff;
            text-align: center;
            line-height: 30px;
            border-radius: 15px;
        }


    </style>
    <div class="container bg-light py-5 px-4">
        <div class="row text-center ">
            <div class="col-md-12 mb-3">
                @if ($star == 5)
                    <h2>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>
                    </h2>
                @elseif ($star == 4)
                    <h2>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>

                    </h2>
                @elseif ($star == 3)
                    <h2>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>
                        <span><i class="lni lni-star-fill"></i></span>


                    </h2>
                @elseif ($star == 0)
                    <h2 class="text-center">আপনি নির্বাচিত হননি। </h2>
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

            <div class="progress col-md-12 mb-2">
                <div class="progress-bar" role="progressbar" style="width: {{ $correct_percentage }}%;"
                    aria-valuenow="{{ $correct_percentage }}" aria-valuemin="0" aria-valuemax="100">
                    {{ $correct_percentage }}%
                </div>
            </div>
            <div class="col-md-12 mb-5">
                <h4 class="text-center"><strong> {{ $correct_percentage }}%</strong></h4>
            </div>





        </div>

        <div class="row text-center">
            <div class="col-md-12 mb-2">
                <h6 class="font-weight-bold">ফলাফল</h6>
            </div>
            <div class="col-md-4" id='myProgress_1'>
                <div class="circular-progress" id="correct-progress">
                    <div class="circular-progress-bar"></div>
                    <div class="circular-progress-text" id="correct-text">{{ $correct_percentage }}%</div>
                </div>

                <p class="font-weight-bold text-muted">সঠিক হয়েছে</p>

            </div>
            <div class="col-md-4" id='myProgress_2'>
                <div class="circular-progress" id="wrong-progress">
                    <div class="circular-progress-bar"></div>
                    <div class="circular-progress-text" id="wrong-text">{{ $wrong_percentage }}%</div>
                </div>
                <p class="font-weight-bold text-muted">এড়িয়ে গিয়েছেন</p>

            </div>
            <div class="col-md-4" id='myProgress_3'>
                <div class="circular-progress" id="skip-progress">
                    <div class="circular-progress-bar"></div>
                    <div class="circular-progress-text" id="skip-text">{{ $skip_percentage }}%</div>
                </div>
                <p class="font-weight-bold text-muted">ভুল হয়েছে</p>

            </div>
            <div class="col-md-12 mt-4">
                <a href="{{ route('courses') }}" class="btn btn-success">পরবর্তী পাঠে যান</a>
            </div>
        </div>
    </div>
    <script>
        const correct_percentage = @json($correct_percentage)
        const wrong_percentage = @json($wrong_percentage)
        const skip_percentage = @json($skip_percentage)

        const progress = document.querySelector('.progress-done');

        progress.style.width = progress.getAttribute('data-done') + '%';
        progress.style.opacity = 1;

        document.addEventListener("DOMContentLoaded", function() {
    // Get the correct, wrong, and skip percentages from your PHP variables
    const correctPercentage = @json($correct_percentage);
    const wrongPercentage = @json($wrong_percentage);
    const skipPercentage = @json($skip_percentage);

    // Update the correct progress bar
    const correctProgressBar = new ProgressBar.Circle('#correct-progress .circular-progress-bar', {
        strokeWidth: 8,
        color: '#28a745',
        trailColor: '#eee',
        trailWidth: 8,
        duration: 2000,
        easing: 'easeInOut',
        text: {
            value: `${correctPercentage}%`,
            style: {
                color: '#28a745',
                fontSize: '16px'
            }
        }
    });

    correctProgressBar.animate(correctPercentage / 100);

    // Update the wrong progress bar
    const wrongProgressBar = new ProgressBar.Circle('#wrong-progress .circular-progress-bar', {
        strokeWidth: 8,
        color: '#dc3545',
        trailColor: '#eee',
        trailWidth: 8,
        duration: 2000,
        easing: 'easeInOut',
        text: {
            value: `${wrongPercentage}%`,
            style: {
                color: '#dc3545',
                fontSize: '16px'
            }
        }
    });

    wrongProgressBar.animate(wrongPercentage / 100);

    // Update the skip progress bar
    const skipProgressBar = new ProgressBar.Circle('#skip-progress .circular-progress-bar', {
        strokeWidth: 8,
        color: '#ffc107',
        trailColor: '#eee',
        trailWidth: 8,
        duration: 2000,
        easing: 'easeInOut',
        text: {
            value: `${skipPercentage}%`,
            style: {
                color: '#ffc107',
                fontSize: '16px'
            }
        }
    });

    skipProgressBar.animate(skipPercentage / 100);
});




    </script>
    <script src="https://cdn.jsdelivr.net/npm/progressbar.js@1.0.1/dist/progressbar.min.js"></script>
@endsection
