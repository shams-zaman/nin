<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $myProfile = Profile::where('user_id', $id)->first();
        $downs = $myProfile->unique_id;
        $myProfileId = $myProfile->id;
        //

        $tMyDowns = Profile::where('referral_id', $downs)->count();

        //

        $aMyDowns = $myProfile->dir_month_count;
        $wallet = $myProfile->wallet;
        $pv = $myProfile->pv;
        $rank = $myProfile->desig;
        $myUniqueId = $myProfile->unique_id;
        $mybonus = $myProfile->bonus;

        //

        $currentMonth = date('m');
        //
        $prevBonus = DB::table('payments')
            ->where('profile_id', $myProfileId)
            ->whereRaw('MONTH(created_at) = ?', [$currentMonth])
            ->where('note', 'Monthly Bonus')
            ->sum('amount');

        //
        $tBonus = DB::table('payments')
            ->where('profile_id', $myProfileId)
            ->where('note', 'Monthly Bonus')
            ->sum('amount');



        return view('user.dashboard', compact('tMyDowns', 'mybonus', 'pv', 'myUniqueId', 'tBonus', 'rank', 'wallet', 'aMyDowns', 'prevBonus'));
    }
    public function mytransictions()
    {
        $id = Auth::user()->id;
        $myProfile = Profile::where('user_id', $id)->first();
        $myProfileId = $myProfile->id;

        $transictions = Payment::where('profile_id', $myProfileId)->get();
        return view('user.backend.mytransictions', compact('transictions'));
    }
    public function mydownlines()
    {
        $id = Auth::user()->id;
        $myProfile = Profile::where('user_id', $id)->first();
        $downs = $myProfile->unique_id;

        $profiles = Profile::where('referral_id', $downs)->get();
        return view('user.backend.myDownlines', compact('profiles'));
    }
}
