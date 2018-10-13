<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
	protected $fillable = [];
	public $formElements = [];
	protected $id;

	public function __construct(){
		$this->formElements['create'] = 'OperatorController@store';
		$this->formElements['edit'] = 'operator.edit';
		$this->formElements['update'] = 'operator.update';
		$this->formElements['identifier'] = 'operatorCode';

		$this->formElements['edit_hide'] = ['loginPassword'];
		$this->formElements['fields'] = ['operatorName' => ['label' => 'Name', 'type' => 'text'],
			'loginId' => ['label' => 'Login ID', 'type' => 'text'],
			'loginPassword' => ['label' => 'Password', 'type' => 'password', 'list'=>false],
			'operatorQualification' => ['label' => 'Qualification', 'type' => 'text'],
			'operatorDesignation' =>  ['label' => 'Designation', 'type' => 'text'],
			'operatorRole' =>  ['label' => 'Role', 'type' => 'picklist', 'values' => [
				'ADMIN' => 'ADMIN']
			],
		];
	}
	public function update (array $data= Array(), array $options = Array()){
		$api = new \App\Api;
		$requestData = [];
		foreach($this->formElements['fields'] as $fieldName=>$element){
			if(isset($data[$fieldName]))
				$requestData[$fieldName] = $data[$fieldName];
		}
		return $api->updateOperator($this->id, $requestData);
	}
	public function save (array $data = Array()){
		$api = new \App\Api;
		$requestData = [];
		foreach($this->formElements['fields'] as $fieldName=>$element){
			$requestData[$fieldName] = $data[$fieldName];
		}
		return $api->createOperator($requestData);
	}
	public static function all($columns = Array()){
		$api = new \App\Api;
		$data = $api->getOperators();
		return $data['operator'];
	}
	public function set($id, $getData = true){
		if($getData == false)
			$this->id = $id;
		else{
			$api = new \App\Api;
			$data = $api->getOperators($id);
			foreach($this->formElements['fields'] as $fieldName=>$element){
				if(isset($data[$fieldName]))
					$this->formElements['fields'][$fieldName]['value'] = $data[$fieldName];
			}
		}
	}
}
