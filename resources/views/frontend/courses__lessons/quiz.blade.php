@extends('frontend.courses__lessons.course_2')
@section('course_content')
    <div>
        <div class="container">
            <form action="{{ route('quiz.answer.store') }}" method="POST">
                @csrf
                <div class="row mb-5">
                    @foreach ($quizzes as $key => $quiz)
                        <div class="col-md-12 my-2" id={{ 'question' . $key }} style="display: none">
                            <div class="col-md-12 mb-2">
                                <h3>{{ $quiz->question }}</h3>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="quiz[{{ $quiz->id }}]" id="quiz_option_{{ $quiz->id }}_1"
                                    value="{{ $quiz->option_1 }}"> <label
                                    for="quiz_option_{{ $quiz->id }}_1">{{ $quiz->option_1 }}</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="quiz[{{ $quiz->id }}]"
                                    id="quiz_option_{{ $quiz->id }}_2" value="{{ $quiz->option_2 }}"> <label
                                    for="quiz_option_{{ $quiz->id }}_2">{{ $quiz->option_2 }}</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="quiz[{{ $quiz->id }}]"
                                    id="quiz_option_{{ $quiz->id }}_3" value="{{ $quiz->option_3 }}"> <label
                                    for="quiz_option_{{ $quiz->id }}_3">{{ $quiz->option_3 }}</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" name="quiz[{{ $quiz->id }}]"
                                    id="quiz_option_{{ $quiz->id }}_4" value="{{ $quiz->option_4 }}"> <label
                                    for="quiz_option_{{ $quiz->id }}_4">{{ $quiz->option_4 }}</label>
                            </div>
                            <span onclick="nextQues()" class="btn border border-success rounded-pill bg-warning">Next
                                Question</span>
                        </div>
                    @endforeach

                    <button type="submit" class="btn btn-sm btn-success">সংরক্ষন করুন</button>
                </div>
            </form>
        </div>
    </div>
    <Script>
        window.onload = function() {
            let ques1 = document.getElementById("question0");
            ques1.style.display = "block";
        }

        function nextQues() {
            let count = {{$key}};
            let i=1;
            if(i>=1 && i<=count)
            {
                document.getElementById('question'+i).style.display = "block";
                document.getElementById('question'+(i-1)).style.display = "none";
                i++;
            }
            console.log(i,count);
            // }else {
            //     getElementById('question')[i].disabled = true; 
            // }
        }
    </Script>
@endsection
