<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complain;
use App\Models\Contact;
use App\Models\Profile;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    public function message_us(Request $request)
    {
        $profile_id = auth()->user()->getProfile->id;
        dd($profile_id);
        // $validated = $request->validate([
        //     'text' => 'required',

        // ]);

        // $validated['profile_id']=>auth::user->
        // return redirect()->back();
    }
    public function contact_show()
    {
        $contacts = Contact::all();


        return view('admin.backend.contact', compact('contacts'));
    }
}
