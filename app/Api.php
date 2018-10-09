<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
	protected $api;
	public function __construct(){
		$this->api = env('JPOS_API_URL');
	}
	public function getUrl(){
		return $this->api;
	}
	public function doLogin($username, $password){
		return true;
	}
}
