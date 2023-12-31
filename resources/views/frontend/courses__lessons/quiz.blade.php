@extends('frontend.courses__lessons.course_2')
@section('course_content')
    <div class="container">
        <form action="{{ route('quiz.answer.store') }}" method="POST">
            @csrf

            <div class="row mb-5 quize justify-content-center">

                @foreach ($quizzes as $key => $quiz)
                    <input type="text" name="lesson_id" value={{ $quiz->lesson_id }} hidden>
                    <div class="col-md-12 my-2" id={{ 'question' . $key }} style="display: none">
                        <div id="timer{{ $key }}"></div>
                        <h3><b> Question {{ $key + 1 }}/{{ count($quizzes) }}
                            </b></h3>
                        <div class="col-md-12 my-4">
                            <h3>{{ $quiz->question }}</h3>
                        </div>

                        <div class="col-md-12 my-4 text-center">
                            {{-- q1 --}}
                            <div class="col-md-12 my-2 rounded-pill py-2" style="background-color: #f8f9fa" id="input1">
                                <span class="float-left">
                                    <input type="radio" class="d-inline-block" name="quiz[{{ $quiz->id }}]"
                                        id="quiz_option_{{ $quiz->id }}_1" value="{{ $quiz->option_1 }}">
                                </span>
                                <label class="m-0"
                                    for="quiz_option_{{ $quiz->id }}_1">{{ $quiz->option_1 }}</label>
                            </div>
                            {{-- q2 --}}
                            <div class="col-md-12 my-2  rounded-pill py-2" style="background-color: #f8f9fa" id="input2">
                                <span class="float-left">
                                    <input class="d-inline-block" type="radio" name="quiz[{{ $quiz->id }}]"
                                        id="quiz_option_{{ $quiz->id }}_2" value="{{ $quiz->option_2 }}">
                                </span>
                                <label class="m-0"
                                    for="quiz_option_{{ $quiz->id }}_2">{{ $quiz->option_2 }}</label>
                            </div>
                            {{-- q3 --}}
                            <div class="col-md-12 my-2   rounded-pill py-2" style="background-color: #f8f9fa"
                                id="input3">
                                <span class="float-left">
                                    <input class="d-inline-block" type="radio" name="quiz[{{ $quiz->id }}]"
                                        id="quiz_option_{{ $quiz->id }}_3" value="{{ $quiz->option_3 }}">
                                </span>
                                <label class="m-0"
                                    for="quiz_option_{{ $quiz->id }}_3">{{ $quiz->option_3 }}</label>
                            </div>
                            {{-- q4 --}}
                            <div class="col-md-12 my-2  rounded-pill py-2" style="background-color: #f8f9fa" id="input4">
                                <span class="float-left">
                                    <input class="d-inline-block" type="radio" name="quiz[{{ $quiz->id }}]"
                                        id="quiz_option_{{ $quiz->id }}_4" value="{{ $quiz->option_4 }}">
                                </span>
                                <label class="m-0"
                                    for="quiz_option_{{ $quiz->id }}_4">{{ $quiz->option_4 }}</label>
                            </div>
                        </div>

                        <span onclick="nextQues()" id={{ 'next' . $key }} role="button"
                            class="btn btn-sm bg-danger text-white float-right">পরবর্তী</span>
                    </div>
                @endforeach
            </div>
            <button type="submit" id="btn-submit" class="btn btn-sm btn-success text-white d-none float-right">সংরক্ষন
                করুন</button>
        </form>
    </div>

    <script>
        // start questions and save show
        window.onload = function() {
            let ques1 = document.getElementById("question0");
            ques1.style.display = "block";
            startTimer();
        }

        let count = {{ $key }};
        let isNextQues = true;
        let i = 1;

        function nextQues() {

            while (i >= 1 && i <= count) {
                document.getElementById('question' + i).style.display = "block";
                document.getElementById('question' + (i - 1)).style.display = "none";

                if (i == count) {
                    // console.log(i, count);
                    document.getElementById('next' + i).classList.add("d-none");
                    document.getElementById('btn-submit').classList.remove("d-none");
                    isNextQues = false;
                    break;
                }
                i++;
            }

            startTimer();
        }
        // end

        // the timer value to 60 seconds
        let timeLeft = 10;
        let id = 0;
        let timerInterval;

        function updateTimer() {
            document.getElementById('timer' + id).innerText = timeLeft;
        }

        function startTimer() {
            console.log('2-timer' + id);
            timerInterval = setInterval(function() {
                
                timeLeft--;
                updateTimer();
                
                if (timeLeft == 0) {
                    clearInterval(timerInterval);
                    if (isNextQues) {
                        timeLeft = 10;
                        id++;
                        nextQues();
                    } else{
                        document.getElementById('btn-submit').click();
                    }
                }
            }, 1000);
        }
    </script>
@endsection
