<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Result;



class FrontendController extends Controller
{
    public function dashboard()
    {
        return view('frontend.dashboard');
    }

    public function about_us()
    {
        return view('frontend.about_us');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function seminar()
    {
        return view('frontend.layouts.message');
    }

    public function video()
    {
        return view('frontend.video');
    }

    public function home()
    {
        return view('home');
    }

    public function certificate()
    {
        return view('frontend.certificate');
    }
    public function demo()
    {
        $chapters = Chapter::all();
        $result = Result::where('user_id', auth()->user()->id)->where('chapter_id', 1)->where('lesson_id', 1)->first(); //chapter_id,lesson_id dia search kora lagbe
        return view('frontend.courses__lessons.result', compact('chapters', 'result'));
    }
}
