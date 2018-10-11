<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Master extends Controller
{
	public function operator(){
		return view('master.form');
	}
}
