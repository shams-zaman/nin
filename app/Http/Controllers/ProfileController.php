<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function create(Request $request)
    {
        // dd($request->referral_id);



        /** Validate name field */
        $request->validate([
            'username' => ['required', 'unique:profiles'],
            'nin' => ['required', 'unique:profiles'],
            'referral_id' => 'required',
            // 'referral_id' => 'required'
        ]);




        $nin = $request->nin;
        $user_id = Auth::user()->id;
        $referral_id = $request->referral_id;
        $username = $request->username;
        $unique_id = Helper::IDGenerator(new Profile, 'unique_id', 4, 'NG-');

        $q = new Profile;
        $q->user_id = $user_id;
        $q->unique_id = $unique_id;
        $q->nin = $nin;
        $q->referral_id = $referral_id;
        $q->username = $username;
        $q->wallet = 100;
        $q->pv = $q->pv + 1;

        $save =  $q->save();
        // $admin = Profile::where('user_id', 1)->first();

        // $admin->wallet = $admin->wallet + 650;
        // $admin->save();
        $fifth = Profile::where('unique_id', $referral_id)->first();
        $fifth->wallet = $fifth->wallet + 250;
        $fifth->pv = $fifth->pv + 1;
        $fifth->save();
        $fourth = Profile::where('unique_id', $fifth->referral_id)->first();
        $fourth->wallet = $fourth->wallet + 200;
        $fourth->pv = $fourth->pv + 1;
        $fourth->save();
        $third = Profile::where('unique_id', $fourth->referral_id)->first();
        $third->wallet = $third->wallet + 150;
        $third->pv = $third->pv + 1;
        $third->save();
        $second = Profile::where('unique_id', $third->referral_id)->first();
        $second->wallet = $second->wallet + 100;
        $second->pv = $second->pv + 1;
        $second->save();
        $first_r = Profile::where('unique_id', $second->referral_id)->first();
        $first_r->wallet = $first_r->wallet + 50;
        $first_r->pv = $first_r->pv + 1;
        $first_r->save();
        // return  $q->users()->id;



        if ($save) {
            $uid = Auth::user()->id;
            $puser =  User::where('id', $uid)->first();
            $puser->profiled = 1;
            $puser->save();
            return redirect()->back();
        } else {
            return 'wrong';
        }
    }
}
