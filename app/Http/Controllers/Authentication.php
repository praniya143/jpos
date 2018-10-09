<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class Authentication extends Controller
{
	public function doLogin(Request $request){
		$username = $request->get('username');
		$password = $request->get('password');
		if($this->api->doLogin($username, $password)){
			Session::put('user', [
					"username" => $username
			]);
			return redirect('/');
		}
	}
	public function logout(Request $request){
		Session::flush();
		return redirect('/login');
	}
}
