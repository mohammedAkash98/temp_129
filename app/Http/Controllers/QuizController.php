<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\Result;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $sl = !is_null(\request()->page) ? (\request()->page - 1) * 10 : 0;
        $quizzes = Quiz::paginate(10);

        return view('backend.quiz.quiz-index', compact('quizzes', 'sl'));
    }

    public function create()
    {
        $chapters = Chapter::all();
        $lessons = Lesson::all();
        return view('backend.quiz.quiz-create', compact('chapters', 'lessons'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'option_1' => 'required|string|max:255',
            'option_2' => 'required|string|max:255',
            'option_3' => 'required|string|max:255',
            'option_4' => 'required|string|max:255',
            'correct_answer' => 'required|string|max:255',
        ]);
        Quiz::create($request->all());
        return redirect()->route('quiz.index');
    }
    public function info($id)
    {
        $quiz = Quiz::where('id', $id)->first();
        return view('backend.quiz.quiz-info', compact('quiz'));
    }
    public function edit($id)
    {
        $quiz = Quiz::find($id);
        $chapters = Chapter::all();
        $lessons = Lesson::all();
        return view('backend.quiz.quiz-edit', compact('quiz', 'chapters', 'lessons'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'option_1' => 'required|string|max:255',
            'option_2' => 'required|string|max:255',
            'option_3' => 'required|string|max:255',
            'option_4' => 'required|string|max:255',
            'correct_answer' => 'required|string|max:255',
        ]);
        $quiz = Quiz::where('id', $id)->first();
        $quiz->update($request->all());
        return redirect()->route('quiz.index');
    }

    public function delete($id)
    {
        Quiz::find($id)->delete();
        return redirect()->back();
    }
    public function quiz_view($id)
    {
        $current_lesson_id = auth()->user()->overview->current_lesson_id;
        $quizzes = Quiz::where('lesson_id', $current_lesson_id)->get();
        $chapters = Chapter::all();
        $lesson = Lesson::all();

        return view('frontend.courses__lessons.quiz', compact('quizzes', 'chapters', 'lesson'));
    }
    public function quiz_answer_store(Request $request)
    {
        dd($request->all());

        $chapters = Chapter::all();
        $user_id = auth()->user()->id;
        $chapter_id = Lesson::where('id', $request->lesson_id)->first()->chapter->id;


        if (!Result::find($user_id)) {
            $result =   Result::create([
                'user_id' => $user_id,
                'lesson_id' => $request->lesson_id,
                'chapter_id' => $chapter_id,

            ]);
        }
        // Overview::where('user_id', $user_id)->where('lesson_id', $request->lesson_id)->where('chapter_id', $chapter_id)->first();
        $quizzes =  Quiz::where('chapter_id', $chapter_id)->where('lesson_id', $request->lesson_id)->get();
        foreach ($quizzes as $quiz) {
        }
        dd($quizzes);
        return view('frontend.courses__lessons.result', compact('chapters'));
    }

    // public function   quiz_result()
    // {
    // }
}
