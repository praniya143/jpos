<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
	protected $fillable = [];
	public $formElements = [];
	protected $id;

	public function __construct(){
		$this->formElements['create'] = 'DealerController@store';
		$this->formElements['edit'] = 'dealer.edit';
		$this->formElements['update'] = 'dealer.update';
		$this->formElements['identifier'] = 'dealerId';

		$this->formElements['edit_hide'] = [];
		$this->formElements['fields'] = ['dealerName' => ['label' => 'Name', 'type' => 'text'],
			'dealerCompany' => ['label' => 'Company', 'type' => 'text'],
			'dealerTinNo' => ['label' => 'Tin No', 'type' => 'text'],
			'dealerGstNo' =>  ['label' => 'GST No', 'type' => 'text'],
			'dealerRegistrationNo' =>  ['label' => 'Registration No', 'type' => 'text'],
			'address' =>  ['label' => 'Address', 'type' => 'text', 'list'=>false],
			'mobileNo' =>  ['label' => 'Mobile no.', 'type' => 'text', 'list'=>false]
		];
	}
	public function update (array $data= Array(), array $options = Array()){
		$api = new \App\Api;
		$requestData = [];
		foreach($this->formElements['fields'] as $fieldName=>$element){
			if(isset($data[$fieldName]))
				$requestData[$fieldName] = $data[$fieldName];
		}
		return $api->updateDealer($this->id, $requestData);
	}
	public function save (array $data = Array()){
		$api = new \App\Api;
		$requestData = [];
		foreach($this->formElements['fields'] as $fieldName=>$element){
			$requestData[$fieldName] = $data[$fieldName];
		}
		return $api->createDealer($requestData);
	}
	public static function all($columns = Array()){
		$api = new \App\Api;
		$data = $api->getDealers();
		return $data['dealerList'];
	}
	public function set($id, $getData = true){
		if($getData == false)
			$this->id = $id;
		else{
			$api = new \App\Api;
			$data = $api->getDealers($id);
			foreach($this->formElements['fields'] as $fieldName=>$element){
				if(isset($data[$fieldName]))
					$this->formElements['fields'][$fieldName]['value'] = $data[$fieldName];
			}
		}
	}
}
