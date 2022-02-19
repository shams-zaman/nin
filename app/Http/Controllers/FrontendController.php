<?php

namespace App\Http\Controllers;


use Toastr;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
    public function create_contact(Request $request)
    {

        // dd($request->all());
        $validated = $request->validate([
            'contact_email' => 'required',
            'text' => 'required',
            'name' => 'required'
        ]);
        // dd($validated);
        $contact =  Contact::create($validated);

        Toastr::success('Post Successfully Saved :)', 'Success');

        return redirect()->route('landing');
    }
}
