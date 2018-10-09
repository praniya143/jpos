<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Api;
class Controller extends BaseController
{
	public $api;
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	public function __construct(){
		$this->api = new Api();
	}
}
