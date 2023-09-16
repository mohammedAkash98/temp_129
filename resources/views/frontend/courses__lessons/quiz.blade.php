@extends('frontend.courses__lessons.course_2')
@section('course_content')
    <div>
        <div class="container">
            <form action="{{ route('quiz.answer.store') }}" method="POST">
                @csrf
                <div class="row mb-5 quize justify-content-center">
                    @foreach ($quizzes as $key => $quiz)
                        <div class="col-md-12 my-2" id={{ 'question' . $key }} style="display: none">
                            <h3><b> Question {{ $key + 1 }}/{{ count($quizzes) }}
                                </b></h3>
                            <div class="col-md-12 my-4">
                                <h3>{{ $quiz->question }}</h3>
                            </div>

                            <div class="col-md-12 my-4 text-center radiogroup">

                                <div class="col-md-12 my-2   rounded-pill py-2" id="input1">
                                    <span class="float-left">
                                        <input type="radio" class="d-inline-block" name="quiz[{{ $quiz->id }}]"
                                            id="quiz_option_{{ $quiz->id }}_1" onclick="click1()" value="{{ $quiz->option_1 }}">
                                    </span>
                                    <label class="m-0"
                                        for="quiz_option_{{ $quiz->id }}_1">{{ $quiz->option_1 }}</label>
                                </div>

                                <div class="col-md-12 my-2   rounded-pill py-2" id="input2">
                                    <span class="float-left">
                                        <input class="d-inline-block" type="radio" name="quiz[{{ $quiz->id }}]"
                                            id="quiz_option_{{ $quiz->id }}_2" onclick="click2()" value="{{ $quiz->option_2 }}">
                                    </span>
                                    <label class="m-0"
                                        for="quiz_option_{{ $quiz->id }}_2">{{ $quiz->option_2 }}</label>
                                </div>

                                <div class="col-md-12 my-2   rounded-pill py-2" id="input3">
                                    <span class="float-left">
                                        <input class="d-inline-block" type="radio" name="quiz[{{ $quiz->id }}]"
                                            id="quiz_option_{{ $quiz->id }}_3" onclick="click3()" value="{{ $quiz->option_3 }}">
                                    </span>
                                    <label for="quiz_option_{{ $quiz->id }}_3">{{ $quiz->option_3 }}</label>
                                </div>

                                <div class="col-md-12 my-2   rounded-pill py-2" id="input4">
                                    <span class="float-left">
                                        <input class="d-inline-block" type="radio" name="quiz[{{ $quiz->id }}]"
                                            id="quiz_option_{{ $quiz->id }}_4" onclick="click4()" value="{{ $quiz->option_4 }}">
                                    </span>
                                    <label for="quiz_option_{{ $quiz->id }}_4">{{ $quiz->option_4 }}</label>
                                    <input type="text" name="lesson_id" value="{{ $quiz->lesson->id }}" hidden>
                                </div>
                            </div>

                            <span onclick="nextQues()" id={{ 'next' . $key }} role="button"
                                class="btn btn-sm bg-danger text-white float-right">পরবর্তী</span>
                        </div>
                    @endforeach

                    <button type="submit" class="btn btn-sm btn-success text-white">সংরক্ষন করুন</button>
                </div>
            </form>
        </div>
    </div>
    <Script>
        // start questions show
        window.onload = function() {
            let ques1 = document.getElementById("question0");
            ques1.style.display = "block";
        }

        let count = {{ $key }};
        let i = 1;

        function nextQues() {

            if (i >= 1 && i <= count) {
                document.getElementById('question' + i).style.display = "block";
                document.getElementById('question' + (i - 1)).style.display = "none";
                i++;
            }

            if (i == count) {
                document.getElementById('next' + i).classList.add("d-none");
            }
        }

        // end

        function click1(){
            document.getElementById('input1').style.backgroundColor = "green";
            document.getElementById('input2').style.backgroundColor = "#f8f9fa";
            document.getElementById('input3').style.backgroundColor = "#f8f9fa";
            document.getElementById('input4').style.backgroundColor = "#f8f9fa";
        }

        function click2(){
            document.getElementById('input1').style.backgroundColor = "#f8f9fa";
            document.getElementById('input2').style.backgroundColor = "green";
            document.getElementById('input3').style.backgroundColor = "#f8f9fa";
            document.getElementById('input4').style.backgroundColor = "#f8f9fa";
        }

        function click3(){
            document.getElementById('input1').style.backgroundColor = "#f8f9fa";
            document.getElementById('input2').style.backgroundColor = "#f8f9fa";
            document.getElementById('input3').style.backgroundColor = "green";
            document.getElementById('input4').style.backgroundColor = "#f8f9fa";
        }

        function click4(){
            document.getElementById('input1').style.backgroundColor = "#f8f9fa";
            document.getElementById('input2').style.backgroundColor = "#f8f9fa";
            document.getElementById('input3').style.backgroundColor = "#f8f9fa";
            document.getElementById('input4').style.backgroundColor = "green";
        }


        // document.querySelector('.radiogroup').addEventListener('change', (evt) => {
        //     evt.currentTarget
        //         .querySelectorAll('.bg-success')
        //         .forEach(element => {
        //             element.classList.remove('bg-light');
        //         })

        //     evt.target
        //         .closest('.bg-light')
        //         .classList.add('bg-success');
        // }, true);

    </Script>
@endsection
