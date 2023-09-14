<?php

namespace App\Http\Controllers;



class FrontendController extends Controller
{
    public function dashboard()
    {
        return view('frontend.dashboard');
    }

    public function home()
    {
        return view('home');
    }
}
