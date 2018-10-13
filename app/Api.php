<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

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
	public function get($method, $route, $input = Array()){
		$client = new Client();
		if($method == 'get'){
			$response = $client->get($this->api.$route);
		}elseif($method == 'post'){
			$response = $client->post($this->api.$route, [
        	                json_encode($input)
	                ]);
		}elseif($method == 'put'){
			$response = $client->put($this->api.$route, [
                   	     json_encode($input)
	                ]);
		}
                return json_decode($response->getBody(), true);
	}

	public function createOperator($data){
		return self::get('post', 'operator', $data);
	}
	public function updateOperator($id, $data){
		return self::get('put', 'operator/'.$id, $data);
	}
	public function getOperators($id=0){
		if($id == 0)
			return self::get('get', 'operator');
		else
			return self::get('get', 'operator/'.$id);
	}

	public function createDealer($data){
		return self::get('post', 'dealer', $data);
	}
	public function updateDealer($id, $data){
		return self::get('put', 'dealer/'.$id, $data);
	}
	public function getDealers($id=0){
		if($id == 0)
			return self::get('get', 'dealer');
		else
			return self::get('get', 'dealer/'.$id);
	}

}
