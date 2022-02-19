<?php

namespace App\Http\Controllers;

use Toastr;

use App\Models\Profile;
use App\Models\User;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function pending()
    {
        return view('user.pending');
    }


    public function create(Request $request)
    {
        /** Validate name field */
        $request->validate([
            'username' => ['required', 'unique:profiles'],
            'nin' => ['required', 'unique:profiles'],
            'referral_id' => 'required',
        ]);

        $nin = $request->nin;
        $user_id = Auth::user()->id;
        $referral_id = $request->referral_id;
        $username = $request->username;
        $unique_id = Helper::IDGenerator(new Profile, 'unique_id', 4, 'NG-');
        //
        $q = new Profile;

        $q->user_id = $user_id;
        $q->unique_id = $unique_id;
        $q->nin = $nin;
        $q->referral_id = $referral_id;
        $q->username = $username;



        if ($referral_id !== 'ng-444') {
            $fifth = Profile::where('unique_id', $referral_id)->first();
            if ($fifth->dcount >= 20) {
                Toastr::error('Referral Limit Over', 'Error');
                return redirect()->back();
            } else {
                $q->save();
                $id = Auth::user()->id;

                $user = User::find($id);
                $user->update(['profiled' => true]);
                return redirect()->route('user.dashboard');
            }
        } else {

            $q->save();
            $id = Auth::user()->id;

            $user = User::find($id);
            $user->update(['profiled' => true]);


            return redirect()->route('user.dashboard');
        }
    }
}
