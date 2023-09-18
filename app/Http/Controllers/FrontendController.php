<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Result;
use App\Models\Seminar;



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

    public function seminar_index()
    {

        $seminars = Seminar::all();
        return view('frontend.seminar.seminar-frontend-index', compact('seminars'));
    }

    public function seminar_show($id)
    {
        $seminar = Seminar::find($id);
        return view('frontend.seminar.seminar-frontend-show', compact('seminar'));
    }
}