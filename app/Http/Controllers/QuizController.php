<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Lesson;
use App\Models\Quiz;
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

    public function delete($id)
    {
        Quiz::find($id)->delete();
        return redirect()->back();
    }
}
