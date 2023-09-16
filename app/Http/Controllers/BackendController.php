<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Lesson;
use App\Models\Quiz;
use App\Models\User;



class BackendController extends Controller
{
    public function admin()
    {
        $users = User::all();
        $chapters = Chapter::all();
        $lessons = Lesson::all();
        $quizzes = Quiz::all();
        return view('backend.admin', compact('users', 'chapters', 'lessons', 'quizzes'));
    }
}
