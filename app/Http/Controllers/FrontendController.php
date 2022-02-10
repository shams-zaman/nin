<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.main');
    }
    public function about()
    {
        return view('frontend.layout.pages.about-us');
    }
    public function mission()
    {
        return view('frontend.layout.pages.mission');
    }
    public function policy()
    {
        return view('frontend.layout.pages.policy');
    }
    public function our_team()
    {
        return view('frontend.layout.pages.our_team');
    }
    public function contact_us()
    {
        return view('frontend.layout.pages.contact_us');
    }
}
