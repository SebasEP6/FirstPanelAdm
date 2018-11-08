<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashBoxController extends Controller
{
    public function create() {
    	return view('cashbox.workshift');
    }

    public function paymentMethod() {
    	return view('cashbox.paymentMethods');
    }

    public function withdraw() {
    	return view('cashbox.smallBox');
    }
}
