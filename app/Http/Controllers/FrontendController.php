<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Result;
use App\Models\Seminar;
use App\Models\User;



class FrontendController extends Controller
{
    public function index()
    {
        $chapters = Chapter::all();
        $dhaka = User::where('division', 'ঢাকা')->get();
        $chittagang = User::where('division', 'চট্রগ্রাম')->get();
        $rajshahi = User::where('division', 'রাজশাহী')->get();
        $khulna = User::where('division', 'খুলনা')->get();
        $sylhet = User::where('division', 'সিলেট')->get();
        $barisal = User::where('division', 'বরিশাল')->get();
        $rangpur = User::where('division', 'রংপুর')->get();
        $mymensingh = User::where('division', 'ময়মনসিংহ')->get();
        if (auth()->user()) {
            return view('frontend.dashboard');
        }
        return view(
            'home_page.home_page',
            compact(
                'chapters',
                'dhaka',
                'chittagang',
                'rajshahi',
                'khulna',
                'sylhet',
                'barisal',
                'rangpur',
                'mymensingh'
            )
        );
    }

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
