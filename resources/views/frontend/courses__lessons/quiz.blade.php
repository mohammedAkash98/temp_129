@extends('frontend.courses__lessons.course_2')
@section('course_content')
    <div>
        <div class="container">
            <form action="{{ route('quiz.answer.store') }}" method="POST">
                @csrf
                <div class="row mb-5">
                    @foreach ($quizzes as $quiz)
                        <div class="col-md-12 mb-2">
                            <h3>{{ $quiz->question }}</h3>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="quiz[{{ $quiz->id }}]" id="quiz_option_{{ $quiz->id }}_1" value="{{ $quiz->option_1 }}"> <label
                                for="quiz_option_{{ $quiz->id }}_1">{{ $quiz->option_1 }}</label>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="quiz[{{ $quiz->id }}]" id="quiz_option_{{ $quiz->id }}_2" value="{{ $quiz->option_2 }}"> <label
                                for="quiz_option_{{ $quiz->id }}_2">{{ $quiz->option_2 }}</label>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="quiz[{{ $quiz->id }}]" id="quiz_option_{{ $quiz->id }}_3" value="{{ $quiz->option_3 }}"> <label
                                for="quiz_option_{{ $quiz->id }}_3">{{ $quiz->option_3 }}</label>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="quiz[{{ $quiz->id }}]" id="quiz_option_{{ $quiz->id }}_4" value="{{ $quiz->option_4 }}"> <label
                                for="quiz_option_{{ $quiz->id }}_4">{{ $quiz->option_4 }}</label>
                        </div>
                    @endforeach
                </div>


                <button type="submit" class="btn btn-sm btn-success">সংরক্ষন করুন</button>
            </form>
        </div>
    </div>
    {{-- {{ $quizzes->links('pagination::bootstrap-4') }} --}}
@endsection
