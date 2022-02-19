<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function all_transictions()
    {
        $payments = Payment::all();
        return view('admin.backend.all_transictions', compact('payments'));
    }
}
