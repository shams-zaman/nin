<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Helpers\Helper;

class DashboardController extends Controller
{
    public function index()
    {

        // $count_of_users = Profile::where('role_id', '<5')->count();
        // dd($count_of_users);
        return view('admin.dashboard');
    }
}
