<?php

namespace App\Http\Controllers;

use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('backend.quiz.quiz-index', compact('quizzes'));
    }
}
