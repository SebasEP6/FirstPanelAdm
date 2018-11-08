<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssistanceController extends Controller
{
    public function control() {
    	return view('assistance.take');
    }
}
