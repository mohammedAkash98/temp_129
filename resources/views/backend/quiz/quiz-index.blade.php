@extends('backend.layouts.master')
@section('content')
    <div class="pagetitle">
        <h1>Quiz</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('quiz.index') }}">Quiz</a></li>
                <li class="breadcrumb-item active">Index</li>
            </ol>
        </nav>
        <hr>
    </div><!-- End Page Titles -->


    @if ($quizzes->count() == 0)
        <div class="container text-center">
            <h4>There is no quiz added yet.</h4>
            <a href="{{ route('quiz.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i
                    class="fa-solid fa-plus"></i>
                Add Quiz</a>

        </div>
    @else
        <div class="container">
            <a href="{{ route('quiz.create') }}" class="btn btn-primary btn-sm mb-3 text-white"><i class="fa-solid fa-plus"></i>
                Add Quiz</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Chapter</th>
                        <th>Lesson</th>
                        <th>Total Q.</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($quizzes as $quiz)

                        <tr>
                            <td>{{ ++$sl }}</td>
                            <td>{{ $quiz->chapter->name ?? '' }}</td>
                            <td>{{ $quiz->lesson->name ?? '' }}</td>
                            <td>{{ $quiz->question }}</td>
                            <td>
                                <a href="{{ route('quiz.info',$quiz->id) }}" class="btn btn-info btn-sm text-white"> <i
                                        class="fa-solid fa-circle-info"></i> Info</a>
                                <a href="{{ route('quiz.edit',$quiz->id) }}" class="btn btn-primary btn-sm text-white"> <i
                                        class="fa-solid fa-file-pen"></i> Edit</a>
                                <a href="{{ route('quiz.delete',$quiz->id) }}" class="btn btn-danger btn-sm text-white"><i class="fa-solid fa-trash"></i>
                                    Delete</a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            {{ $quizzes->links('pagination::bootstrap-4') }}
        </div>
    @endif

@endsection
