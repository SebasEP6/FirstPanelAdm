<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashBoxController extends Controller
{
    public function payment_methods() {
    	return view('cashbox.payment_methods');
    }
}
