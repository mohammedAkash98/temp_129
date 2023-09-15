<?php

namespace App\Http\Controllers;



class FrontendController extends Controller
{
    public function dashboard()
    {
        return view('frontend.dashboard');
    }

    public function about_us(){
        return view('frontend.about_us');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function seminar(){
        return view('frontend.layouts.message');
    }

    public function video(){
        return view('frontend.video');
    }

    public function home()
    {
        return view('home');
    }
}
