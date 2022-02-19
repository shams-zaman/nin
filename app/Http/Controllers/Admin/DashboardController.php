<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Helpers\Helper;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {

        $count_of_users = Profile::where('user_id', '>', '5')->count();

        //Deactive User
        $deactivates = Profile::where('isActive', '0')->count();
        //active User
        $activates = Profile::where('isActive', '1')->count();
        $activates = $activates - 5;

        // Total Transiction
        $currentMonth = date('m');
        $transics = DB::table('payments')
            ->whereRaw('MONTH(created_at) = ?', [$currentMonth])
            // ->where('note', 'Monthly Fees')
            ->sum('amount');


        // previous Month Transiction
        $adPrevMonth = Payment::select('*')
            ->whereBetween(
                'created_at',
                [Carbon::now()->subMonth()->startOfMonth(), Carbon::now()->subMonth()->endOfMonth()]
            )
            // ->where('note', 'Monthly Fees')
            ->get()->sum('amount');


        // previous Month active user
        $prev_month_user = Payment::select('*')
            ->whereBetween(
                'created_at',
                [Carbon::now()->subMonth()->startOfMonth(), Carbon::now()->subMonth()->endOfMonth()]
            )
            // ->where('note', 'Monthly Fees')
            // ->get()->sum('amount');
            ->count();




        return view('admin.dashboard', compact('count_of_users', 'prev_month_user', 'adPrevMonth', 'transics', 'deactivates', 'activates'));
    }
}
