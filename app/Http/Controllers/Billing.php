<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Billing extends Controller
{
	public function index(){
		return view('billing.billing');
	}
}
