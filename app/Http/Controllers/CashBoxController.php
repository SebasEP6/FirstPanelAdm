<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashBoxController extends Controller
{
    public function create() {
    	return view('cashbox.c_turn');
    }
}
