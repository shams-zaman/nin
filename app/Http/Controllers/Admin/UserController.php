<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Profile;
use App\Models\Transiction;
use App\Models\User;
use App\Notifications\NewMemberReq;
use Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class UserController extends Controller
{

    public function user_requests_show()
    {
        $profiles = Profile::where('isActive', 0)
            ->whereHas(
                'user',
                function ($q) {
                    $q->where('isOld', '0');
                }
            )->get();
        return view('admin.backend.userReq', compact('profiles'));
    }


    public function give_bonus($id)
    {
        $profile = Profile::find($id);


        // if ($profile->updated_at->format('F') == \Carbon\Carbon::now()->monthName) {
        //     Toastr::error('This Month hasn"t finished Yet', 'Error');
        //     return redirect()->back();
        // }

        $transiction = new Payment();
        $tid = $profile->id;
        $tusername = $profile->username;
        $amount = $profile->wallet;
        $transiction->profile_id = $tid;
        $transiction->amount = $amount;
        $transiction->note = 'Monthly Bonus';
        $transiction->tusername = $tusername;
        $transiction->save();

        $profile->isActive = false;
        $profile->pv = '0';
        $profile->wallet = '0';
        $profile->desig = 'starter';
        $profile->dir_month_count = 0;


        $profile->save();







        return redirect()->back();
    }
    public function index()
    {
        return view('admin.backend.users');
    }
    // public function activeusers()
    // {
    //     return view('admin.backend.users');
    // }
    public function bonus()
    {
        $mytimeraw = Carbon::now();
        $mytime = $mytimeraw->format('F');
        $profiles = Profile::where("isActive", 1)
            ->where('dir_month_count', '>=', 4)
            ->whereHas(
                'user',
                function ($q) {
                    $q->where('isOld', '1');
                }
            )->get();

        return view('admin.backend.bonus', compact('profiles', 'mytime'));
    }
    public function subscription()
    {
        $profiles = Profile::where("isActive", 0)
            ->whereHas(
                'user',
                function ($q) {
                    $q->where('isOld', '1');
                }
            )->get();
        return view('admin.backend.inactives', compact('profiles'));
    }
    public function take_payment($id)
    {
        $profile = Profile::find($id);



        $p = new Payment();
        $p->profile_id = $profile->id;
        $p->tusername = $profile->username;

        $referral_id = $profile->referral_id;
        // endddda
        if (Auth::user()->isOld == 0) {
            $p->note = 'Registration Fees';
            $p->amount = 1500;



            $fifth = Profile::where('unique_id', $referral_id)->first();
        } else {


            $p->note = 'Monthly Fees';


            $p->amount = 1000;



            $fifth = Profile::where('unique_id', $referral_id)->first();

            if ($fifth->isActive == 0) {
                $referral_id = $fifth->referral_id;
                $fifth = Profile::where('unique_id', $referral_id)->first();
                if ($fifth->isActive == 0) {
                    $referral_id = $fifth->referral_id;
                    $fifth = Profile::where('unique_id', $referral_id)->first();
                    if ($fifth->isActive == 0) {
                        $referral_id = $fifth->referral_id;
                        $fifth = Profile::where('unique_id', $referral_id)->first();
                        if ($fifth->isActive == 0) {
                            $referral_id = $fifth->referral_id;
                            $fifth = Profile::where('unique_id', $referral_id)->first();
                            if ($fifth->isActive == 0) {
                                $referral_id = $fifth->referral_id;
                                $fifth = Profile::where('unique_id', $referral_id)->first();
                                if ($fifth->isActive == 0) {
                                    $referral_id = $fifth->referral_id;
                                    $fifth = Profile::where('unique_id', $referral_id)->first();
                                    if ($fifth->isActive == 0) {
                                        $referral_id = $fifth->referral_id;
                                        $fifth = Profile::where('unique_id', $referral_id)->first();
                                        if ($fifth->isActive == 0) {
                                            $referral_id = $fifth->referral_id;
                                            $fifth = Profile::where('unique_id', $referral_id)->first();
                                            if ($fifth->isActive == 0) {
                                                $referral_id = $fifth->referral_id;
                                                $fifth = Profile::where('unique_id', $referral_id)->first();
                                                if ($fifth->isActive == 0) {
                                                    $referral_id = $fifth->referral_id;
                                                    $fifth = Profile::where('unique_id', $referral_id)->first();
                                                    if ($fifth->isActive == 0) {
                                                        $referral_id = $fifth->referral_id;
                                                        $fifth = Profile::where('unique_id', $referral_id)->first();
                                                        if ($fifth->isActive == 0) {
                                                            $referral_id = $fifth->referral_id;
                                                            $fifth = Profile::where('unique_id', $referral_id)->first();
                                                            if ($fifth->isActive == 0) {
                                                                $referral_id = $fifth->referral_id;
                                                                $fifth = Profile::where('unique_id', $referral_id)->first();
                                                                if ($fifth->isActive == 0) {
                                                                    $referral_id = $fifth->referral_id;
                                                                    $fifth = Profile::where('unique_id', $referral_id)->first();
                                                                    if ($fifth->isActive == 0) {
                                                                        $referral_id = $fifth->referral_id;
                                                                        $fifth = Profile::where('unique_id', $referral_id)->first();
                                                                        if ($fifth->isActive == 0) {
                                                                            $referral_id = $fifth->referral_id;
                                                                            $fifth = Profile::where('unique_id', 'ng-444')->first();
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }





        $fifth->wallet = $fifth->wallet + 250;
        $fifth->pv = $fifth->pv + 1;
        $fifth->dcount = $fifth->dcount + 1;
        $fifth->dir_month_count = $fifth->dir_month_count + 1;

        if ($fifth->pv < 20 && $fifth->pv >= 10) {
            $fifth->desig = 'Grower';
            $fifth->sl = 2;

            //Bonus func. starts....

        } elseif ($fifth->pv >= 20 && $fifth->pv < 50 && $fifth->dcount >= 4) {
            $fifth->bonus = $fifth->pv * 1000 / 100 * 15;

            $fifth->desig = 'Executive manager';
            $fifth->sl = 3;
        } elseif ($fifth->pv >= 50 && $fifth->pv < 100 && $fifth->dcount >= 5) {
            $fifth->bonus = $fifth->pv * 1000 / 100 * 20;


            $fifth->desig = 'Manager';
            $fifth->sl = 4;
        } elseif ($fifth->pv >= 100 && $fifth->pv <= 499 && $fifth->dcount >= 10) {
            $fifth->bonus = $fifth->pv * 1000 / 100 * 25;


            $fifth->desig = 'Senior-Manager';
            $fifth->sl = 5;
        } elseif ($fifth->pv >= 500 && $fifth->pv <= 1499) {
            $fifth->bonus = $fifth->pv * 1000 / 100 * 30;
            if ($fifth->pv = 500 && $fifth->pv <= 1499) {
                # code...
            }

            $fifth->desig = 'Director';
            $fifth->sl = 6;
        } elseif ($fifth->pv >= 1500 && $fifth->pv <= 2499 &&  $fifth->dcount >= 20) {
            $fifth->bonus = $fifth->pv * 1000 / 100 * 35;
            if ($fifth->pv = 1500 && $fifth->pv <= 2499 &&  $fifth->dcount >= 20) {
            }

            $fifth->desig = '*Star Director';
            $fifth->sl = 7;
        } elseif ($fifth->pv >= 2500 && $fifth->pv <= 3499 &&  $fifth->dcount >= 20) {
            $fifth->bonus = $fifth->pv * 1000 / 100 * 40;


            $fifth->desig = '*5 Star Director';
            $fifth->sl = 8;
        } elseif ($fifth->pv >= 3500 && $fifth->pv <= 4999 &&  $fifth->dcount >= 20) {
            $fifth->bonus = $fifth->pv * 1000 / 100 * 45;


            $fifth->desig = '*10 Star Director';
            $fifth->sl = 9;
        } elseif ($fifth->pv >= 5000 &&  $fifth->dcount >= 20) {
            $fifth->bonus = $fifth->pv * 1000 / 100 * 50;

            $fifth->desig = '*10 Star Director';
            $fifth->sl = 10;
        }
        $fifth->save();


        //Forth//
        //4th
        $fourth = Profile::where('unique_id', $fifth->referral_id)->first();
        if ($fourth->isActive == 0) {
            $referral_id = $fourth->referral_id;
            $fourth = Profile::where('unique_id', $referral_id)->first();
            if ($fourth->isActive == 0) {
                $referral_id = $fourth->referral_id;
                $fourth = Profile::where('unique_id', $referral_id)->first();
                if ($fourth->isActive == 0) {
                    $referral_id = $fourth->referral_id;
                    $fourth = Profile::where('unique_id', $referral_id)->first();
                    if ($fourth->isActive == 0) {
                        $referral_id = $fourth->referral_id;
                        $fourth = Profile::where('unique_id', $referral_id)->first();
                        if ($fourth->isActive == 0) {
                            $referral_id = $fourth->referral_id;
                            $fourth = Profile::where('unique_id', $referral_id)->first();
                            if ($fourth->isActive == 0) {
                                $referral_id = $fourth->referral_id;
                                $fourth = Profile::where('unique_id', $referral_id)->first();
                                if ($fourth->isActive == 0) {
                                    $referral_id = $fourth->referral_id;
                                    $fourth = Profile::where('unique_id', $referral_id)->first();
                                    if ($fourth->isActive == 0) {
                                        $referral_id = $fourth->referral_id;
                                        $fourth = Profile::where('unique_id', $referral_id)->first();
                                        if ($fourth->isActive == 0) {
                                            $referral_id = $fourth->referral_id;
                                            $fourth = Profile::where('unique_id', $referral_id)->first();
                                            if ($fourth->isActive == 0) {
                                                $referral_id = $fourth->referral_id;
                                                $fourth = Profile::where('unique_id', $referral_id)->first();
                                                if ($fourth->isActive == 0) {
                                                    $referral_id = $fourth->referral_id;
                                                    $fourth = Profile::where('unique_id', $referral_id)->first();
                                                    if ($fourth->isActive == 0) {
                                                        $referral_id = $fourth->referral_id;
                                                        $fourth = Profile::where('unique_id', $referral_id)->first();
                                                        if ($fourth->isActive == 0) {
                                                            $referral_id = $fourth->referral_id;
                                                            $fourth = Profile::where('unique_id', $referral_id)->first();
                                                            if ($fourth->isActive == 0) {
                                                                $referral_id = $fourth->referral_id;
                                                                $fourth = Profile::where('unique_id', $referral_id)->first();
                                                                if ($fourth->isActive == 0) {
                                                                    $referral_id = $fourth->referral_id;
                                                                    $fourth = Profile::where('unique_id', $referral_id)->first();
                                                                    if ($fourth->isActive == 0) {
                                                                        $referral_id = $fourth->referral_id;
                                                                        $fourth = Profile::where('unique_id', $referral_id)->first();
                                                                        if ($fourth->isActive == 0) {
                                                                            $referral_id = $fourth->referral_id;
                                                                            $fourth = Profile::where('unique_id', $referral_id)->first();
                                                                            if ($fourth->isActive == 0) {
                                                                                $referral_id = $fourth->referral_id;
                                                                                $fourth = Profile::where('unique_id', 'ng-444')->first();
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }




        $fourth->wallet = $fourth->wallet + 200;
        $fourth->pv = $fourth->pv + 1;

        if ($fourth->pv < 20 && $fourth->pv >= 10) {
            $fourth->desig = 'Grower';
            $fourth->sl = 2;
        } elseif ($fourth->pv >= 20 && $fourth->pv < 50 && $fourth->dcount >= 4) {
            $fourth->bonus = $fourth->pv * 1000 / 100 * 15;
            if ($fourth->pv = 20 && $fourth->pv < 50 && $fourth->dcount = 4) {
            }

            $fourth->desig = 'Executive manager';
            $fourth->sl = 3;
        } elseif ($fourth->pv >= 50 && $fourth->pv < 100 && $fourth->dcount >= 5) {
            $fourth->bonus = $fourth->pv * 1000 / 100 * 20;
            if ($fourth->pv = 50 && $fourth->pv < 100 && $fourth->dcount = 5) {
            }

            $fourth->desig = 'Manager';
            $fourth->sl = 4;
        } elseif ($fourth->pv >= 100 && $fourth->pv <= 499 && $fourth->dcount >= 10) {
            $fourth->bonus = $fourth->pv * 1000 / 100 * 25;
            if ($fourth->pv = 100 && $fourth->pv < 50 && $fourth->dcount = 10) {
            }

            $fourth->desig = 'Senior-Manager';
            $fourth->sl = 5;
        } elseif ($fourth->pv >= 500 && $fourth->pv <= 1499) {
            $fourth->bonus = $fourth->pv * 1000 / 100 * 30;
            if ($fourth->pv = 500 && $fourth->pv <= 1499) {
                # code...
            }

            $fourth->desig = 'Director';
            $fourth->sl = 6;
        } elseif ($fourth->pv >= 1500 && $fourth->pv <= 2499 &&  $fourth->dcount >= 20) {
            $fourth->bonus = $fourth->pv * 1000 / 100 * 35;
            if ($fourth->pv = 1500 && $fourth->pv <= 2499 &&  $fourth->dcount >= 20) {
            }

            $fourth->desig = '*Star Director';
            $fourth->sl = 7;
        } elseif ($fourth->pv >= 2500 && $fourth->pv <= 3499 &&  $fourth->dcount >= 20) {
            $fourth->bonus = $fourth->pv * 1000 / 100 * 40;
            if ($fourth->pv = 2500 && $fourth->pv <= 3499 &&  $fourth->dcount >= 20) {
            }

            $fourth->desig = '*5 Star Director';
            $fourth->sl = 8;
        } elseif ($fourth->pv >= 3500 && $fourth->pv <= 4999 &&  $fourth->dcount >= 20) {
            $fourth->bonus = $fourth->pv * 1000 / 100 * 45;

            $fourth->desig = '*10 Star Director';
            $fourth->sl = 9;
        } elseif ($fourth->pv >= 5000 &&  $fourth->dcount >= 20) {
            $fourth->bonus = $fourth->pv * 1000 / 100 * 50;

            $fourth->desig = '*10 Star Director';
            $fourth->sl = 10;
        }

        $fourth->save();
        //
        //
        //3rd
        $third = Profile::where('unique_id', $fourth->referral_id)->first();

        if ($third->isActive == 0) {
            $referral_id = $third->referral_id;
            $third = Profile::where('unique_id', $referral_id)->first();
            if ($third->isActive == 0) {
                $referral_id = $third->referral_id;
                $third = Profile::where('unique_id', $referral_id)->first();
                if ($third->isActive == 0) {
                    $referral_id = $third->referral_id;
                    $third = Profile::where('unique_id', $referral_id)->first();
                    if ($third->isActive == 0) {
                        $referral_id = $third->referral_id;
                        $third = Profile::where('unique_id', $referral_id)->first();
                        if ($third->isActive == 0) {
                            $referral_id = $third->referral_id;
                            $third = Profile::where('unique_id', $referral_id)->first();
                            if ($third->isActive == 0) {
                                $referral_id = $third->referral_id;
                                $third = Profile::where('unique_id', $referral_id)->first();
                                if ($third->isActive == 0) {
                                    $referral_id = $third->referral_id;
                                    $third = Profile::where('unique_id', $referral_id)->first();
                                    if ($third->isActive == 0) {
                                        $referral_id = $third->referral_id;
                                        $third = Profile::where('unique_id', $referral_id)->first();
                                        if ($third->isActive == 0) {
                                            $referral_id = $third->referral_id;
                                            $third = Profile::where('unique_id', $referral_id)->first();
                                            if ($third->isActive == 0) {
                                                $referral_id = $third->referral_id;
                                                $third = Profile::where('unique_id', $referral_id)->first();
                                                if ($third->isActive == 0) {
                                                    $referral_id = $third->referral_id;
                                                    $third = Profile::where('unique_id', $referral_id)->first();
                                                    if ($third->isActive == 0) {
                                                        $referral_id = $third->referral_id;
                                                        $third = Profile::where('unique_id', $referral_id)->first();
                                                        if ($third->isActive == 0) {
                                                            $referral_id = $third->referral_id;
                                                            $third = Profile::where('unique_id', $referral_id)->first();
                                                            if ($third->isActive == 0) {
                                                                $referral_id = $third->referral_id;
                                                                $third = Profile::where('unique_id', $referral_id)->first();
                                                                if ($third->isActive == 0) {
                                                                    $referral_id = $third->referral_id;
                                                                    $third = Profile::where('unique_id', $referral_id)->first();
                                                                    if ($third->isActive == 0) {
                                                                        $referral_id = $third->referral_id;
                                                                        $third = Profile::where('unique_id', $referral_id)->first();
                                                                        if ($third->isActive == 0) {
                                                                            $referral_id = $third->referral_id;
                                                                            $third = Profile::where('unique_id', $referral_id)->first();
                                                                            if ($third->isActive == 0) {
                                                                                $referral_id = $third->referral_id;
                                                                                $third = Profile::where('unique_id', $referral_id)->first();
                                                                                if ($third->isActive == 0) {
                                                                                    $referral_id = $third->referral_id;
                                                                                    $third = Profile::where('unique_id', $referral_id)->first();
                                                                                    if ($third->isActive == 0) {
                                                                                        $referral_id = $third->referral_id;
                                                                                        $third = Profile::where('unique_id', $referral_id)->first();
                                                                                        if ($third->isActive == 0) {
                                                                                            $referral_id = $third->referral_id;
                                                                                            $third = Profile::where('unique_id', 'ng-444')->first();
                                                                                        }
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }




        $third->wallet = $third->wallet + 150;
        $third->pv = $third->pv + 1;

        if ($third->pv < 20 && $third->pv >= 10) {
            $third->desig = 'Grower';
            $third->sl = 2;
        } elseif ($third->pv >= 20 && $third->pv < 50 && $third->dcount >= 4) {
            $third->bonus = $third->pv * 1000 / 100 * 15;

            $third->desig = 'Executive manager';
            $third->sl = 3;
        } elseif ($third->pv >= 50 && $third->pv < 100 && $third->dcount >= 5) {
            $third->bonus = $third->pv * 1000 / 100 * 20;


            $third->desig = 'Manager';
            $third->sl = 4;
        } elseif ($third->pv >= 100 && $third->pv <= 499 && $third->dcount >= 10) {
            $third->bonus = $third->pv * 1000 / 100 * 25;

            $third->desig = 'Senior-Manager';
            $third->sl = 5;
        } elseif ($third->pv >= 500 && $third->pv <= 1499) {
            $third->bonus = $third->pv * 1000 / 100 * 30;


            $third->desig = 'Director';
            $third->sl = 6;
        } elseif ($third->pv >= 1500 && $third->pv <= 2499 &&  $third->dcount >= 20) {
            $third->bonus = $third->pv * 1000 / 100 * 35;


            $third->desig = '*Star Director';
            $third->sl = 7;
        } elseif ($third->pv >= 2500 && $third->pv <= 3499 &&  $third->dcount >= 20) {
            $third->bonus = $third->pv * 1000 / 100 * 40;


            $third->desig = '*5 Star Director';
            $third->sl = 8;
        } elseif ($third->pv >= 3500 && $third->pv <= 4999 &&  $third->dcount >= 20) {
            $third->bonus = $third->pv * 1000 / 100 * 45;
            $third->desig = '*10 Star Director';
            $third->sl = 9;
        } elseif ($third->pv >= 5000 &&  $third->dcount >= 20) {
            $third->bonus = $third->pv * 1000 / 100 * 50;
            $third->desig = '*10 Star Director';
            $third->sl = 10;
        }

        $third->save();

        // third enddd
        //second & first
        $second = Profile::where('unique_id', $third->referral_id)->first();

        if ($second->isActive == 0) {
            $referral_id = $second->referral_id;
            $second = Profile::where('unique_id', $referral_id)->first();
            if ($second->isActive == 0) {
                $referral_id = $second->referral_id;
                $second = Profile::where('unique_id', $referral_id)->first();
                if ($second->isActive == 0) {
                    $referral_id = $second->referral_id;
                    $second = Profile::where('unique_id', $referral_id)->first();
                    if ($second->isActive == 0) {
                        $referral_id = $second->referral_id;
                        $second = Profile::where('unique_id', $referral_id)->first();
                        if ($second->isActive == 0) {
                            $referral_id = $second->referral_id;
                            $second = Profile::where('unique_id', $referral_id)->first();
                            if ($second->isActive == 0) {
                                $referral_id = $second->referral_id;
                                $second = Profile::where('unique_id', $referral_id)->first();
                                if ($second->isActive == 0) {
                                    $referral_id = $second->referral_id;
                                    $second = Profile::where('unique_id', $referral_id)->first();
                                    if ($second->isActive == 0) {
                                        $referral_id = $second->referral_id;
                                        $second = Profile::where('unique_id', $referral_id)->first();
                                        if ($second->isActive == 0) {
                                            $referral_id = $second->referral_id;
                                            $second = Profile::where('unique_id', $referral_id)->first();
                                            if ($second->isActive == 0) {
                                                $referral_id = $second->referral_id;
                                                $second = Profile::where('unique_id', $referral_id)->first();
                                                if ($second->isActive == 0) {
                                                    $referral_id = $second->referral_id;
                                                    $second = Profile::where('unique_id', $referral_id)->first();
                                                    if ($second->isActive == 0) {
                                                        $referral_id = $second->referral_id;
                                                        $second = Profile::where('unique_id', $referral_id)->first();
                                                        if ($second->isActive == 0) {
                                                            $referral_id = $second->referral_id;
                                                            $second = Profile::where('unique_id', $referral_id)->first();
                                                            if ($second->isActive == 0) {
                                                                $referral_id = $second->referral_id;
                                                                $second = Profile::where('unique_id', $referral_id)->first();
                                                                if ($second->isActive == 0) {
                                                                    $referral_id = $second->referral_id;
                                                                    $second = Profile::where('unique_id', $referral_id)->first();
                                                                    if ($second->isActive == 0) {
                                                                        $referral_id = $second->referral_id;
                                                                        $second = Profile::where('unique_id', 'ng-444')->first();
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }




        $second->wallet = $second->wallet + 100;
        $second->pv = $second->pv + 1;
        if ($second->pv < 20 && $second->pv >= 10) {
            $second->desig = 'Grower';
            $second->sl = 2;
        } elseif ($second->pv >= 20 && $second->pv < 50 && $second->dcount >= 4) {
            $second->bonus = $second->pv * 1000 / 100 * 15;

            $second->desig = 'Executive manager';
            $second->sl = 3;
        } elseif ($second->pv >= 50 && $second->pv < 100 && $second->dcount >= 5) {
            $second->bonus = $second->pv * 1000 / 100 * 20;
            $second->desig = 'Manager';
            $second->sl = 4;
        } elseif ($second->pv >= 100 && $second->pv <= 499 && $second->dcount >= 10) {
            $second->bonus = $second->pv * 1000 / 100 * 25;

            $second->desig = 'Senior-Manager';
            $second->sl = 5;
        } elseif ($second->pv >= 500 && $second->pv <= 1499) {
            $second->bonus = $second->pv * 1000 / 100 * 30;

            $second->desig = 'Director';
            $second->sl = 6;
        } elseif ($second->pv >= 1500 && $second->pv <= 2499 &&  $second->dcount >= 20) {
            $second->bonus = $second->pv * 1000 / 100 * 35;

            $second->desig = '*Star Director';
            $second->sl = 7;
        } elseif ($second->pv >= 2500 && $second->pv <= 3499 &&  $second->dcount >= 20) {
            $second->bonus = $second->pv * 1000 / 100 * 40;

            $second->desig = '*5 Star Director';
            $second->sl = 8;
        } elseif ($second->pv >= 3500 && $second->pv <= 4999 &&  $second->dcount >= 20) {
            $second->bonus = $second->pv * 1000 / 100 * 45;

            $second->desig = '*10 Star Director';
            $second->sl = 9;
        } elseif ($second->pv >= 5000 &&  $second->dcount >= 20) {
            $second->bonus = $second->pv * 1000 / 100 * 50;
            $second->desig = '*10 Star Director';
            $second->sl = 10;
        }
        $second->save();

        //1st
        $first_r = Profile::where('unique_id', $second->referral_id)->first();


        if ($first_r->isActive == 0) {
            $referral_id = $first_r->referral_id;
            $first_r = Profile::where('unique_id', $referral_id)->first();
            if ($first_r->isActive == 0) {
                $referral_id = $first_r->referral_id;
                $first_r = Profile::where('unique_id', $referral_id)->first();
                if ($first_r->isActive == 0) {
                    $referral_id = $first_r->referral_id;
                    $first_r = Profile::where('unique_id', $referral_id)->first();
                    if ($first_r->isActive == 0) {
                        $referral_id = $first_r->referral_id;
                        $first_r = Profile::where('unique_id', $referral_id)->first();
                        if ($first_r->isActive == 0) {
                            $referral_id = $first_r->referral_id;
                            $first_r = Profile::where('unique_id', $referral_id)->first();
                            if ($first_r->isActive == 0) {
                                $referral_id = $first_r->referral_id;
                                $first_r = Profile::where('unique_id', $referral_id)->first();
                                if ($first_r->isActive == 0) {
                                    $referral_id = $first_r->referral_id;
                                    $first_r = Profile::where('unique_id', $referral_id)->first();
                                    if ($first_r->isActive == 0) {
                                        $referral_id = $first_r->referral_id;
                                        $first_r = Profile::where('unique_id', $referral_id)->first();
                                        if ($first_r->isActive == 0) {
                                            $referral_id = $first_r->referral_id;
                                            $first_r = Profile::where('unique_id', $referral_id)->first();
                                            if ($first_r->isActive == 0) {
                                                $referral_id = $first_r->referral_id;
                                                $first_r = Profile::where('unique_id', $referral_id)->first();
                                                if ($first_r->isActive == 0) {
                                                    $referral_id = $first_r->referral_id;
                                                    $first_r = Profile::where('unique_id', $referral_id)->first();
                                                    if ($first_r->isActive == 0) {
                                                        $referral_id = $first_r->referral_id;
                                                        $first_r = Profile::where('unique_id', $referral_id)->first();
                                                        if ($first_r->isActive == 0) {
                                                            $referral_id = $first_r->referral_id;
                                                            $first_r = Profile::where('unique_id', $referral_id)->first();
                                                            if ($first_r->isActive == 0) {
                                                                $referral_id = $first_r->referral_id;
                                                                $first_r = Profile::where('unique_id', $referral_id)->first();
                                                                if ($first_r->isActive == 0) {
                                                                    $referral_id = $first_r->referral_id;
                                                                    $first_r = Profile::where('unique_id', $referral_id)->first();
                                                                    if ($first_r->isActive == 0) {
                                                                        $referral_id = $first_r->referral_id;
                                                                        $first_r = Profile::where('unique_id', $referral_id)->first();
                                                                        if ($first_r->isActive == 0) {
                                                                            $referral_id = $first_r->referral_id;
                                                                            $first_r = Profile::where('unique_id', $referral_id)->first();
                                                                            if ($first_r->isActive == 0) {
                                                                                $referral_id = $first_r->referral_id;
                                                                                $first_r = Profile::where('unique_id', 'ng-444')->first();
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }




        $first_r->wallet = $first_r->wallet + 50;
        $first_r->pv = $first_r->pv + 1;
        if ($first_r->pv < 20 && $first_r->pv >= 10) {
            $first_r->desig = 'Grower';
            $first_r->sl = 2;
        } elseif ($first_r->pv >= 20 && $first_r->pv < 50 && $first_r->dcount >= 4) {
            $first_r->bonus = $first_r->pv * 1000 / 100 * 15;

            $first_r->desig = 'Executive manager';
            $first_r->sl = 3;
        } elseif ($first_r->pv >= 50 && $first_r->pv < 100 && $first_r->dcount >= 5) {
            $first_r->bonus = $first_r->pv * 1000 / 100 * 20;
            $first_r->desig = 'Manager';
            $first_r->sl = 4;
        } elseif ($first_r->pv >= 100 && $first_r->pv <= 499 && $first_r->dcount >= 10) {
            $first_r->bonus = $first_r->pv * 1000 / 100 * 25;
            $first_r->desig = 'Senior-Manager';
            $first_r->sl = 5;
        } elseif ($first_r->pv >= 500 && $first_r->pv <= 1499) {
            $first_r->bonus = $first_r->pv * 1000 / 100 * 30;
            $first_r->desig = 'Director';
            $first_r->sl = 6;
        } elseif ($first_r->pv >= 1500 && $first_r->pv <= 2499 &&  $first_r->dcount >= 20) {
            $first_r->bonus = $first_r->pv * 1000 / 100 * 35;
            $first_r->desig = '*Star Director';
            $first_r->sl = 7;
        } elseif ($first_r->pv >= 2500 && $first_r->pv <= 3499 &&  $first_r->dcount >= 20) {
            $first_r->bonus = $first_r->pv * 1000 / 100 * 40;
            $first_r->desig = '*5 Star Director';
            $first_r->sl = 8;
        } elseif ($first_r->pv >= 3500 && $first_r->pv <= 4999 &&  $first_r->dcount >= 20) {
            $first_r->bonus = $first_r->pv * 1000 / 100 * 45;
            $first_r->desig = '*10 Star Director';
            $first_r->sl = 9;
        } elseif ($first_r->pv >= 5000 &&  $first_r->dcount >= 20) {
            $first_r->bonus = $first_r->pv * 1000 / 100 * 50;
            $first_r->desig = '*10 Star Director';
            $first_r->sl = 10;
        }
        $first_r->save();
        //OLD
        $uuid = $profile->user_id;
        $user =  User::find($uuid);
        $user->update(['isOld' => 1]);

        $profile->isActive = true;
        $profile->wallet = 100;
        $profile->pv = $profile->pv + 1;
        $profile->save();


        $psave = $p->save();
        Toastr::success('Congratulation. You are Approved', 'Success');

        // if ($psave) {
        //     $profile->user->notify(new NewMemberReq($p));
        // }



        return redirect()->back();
    }
}
