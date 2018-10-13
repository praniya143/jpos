<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
	protected $model;
	public function __construct(){
		$this->model = new \App\Operator;
	}
	public function index(){
		return view('crud.list', ['model' => $this->model ]);
	}
	public function show(){
		return view('crud.list', ['model' => $this->model ]);
	}
	public function create(Request $request){
		return view('crud.create', ['model' => $this->model ]);
	}
	public function edit($id){
		$this->model->set($id);
		return view('crud.edit', ['model' => $this->model,'id' => $id ]);
	}	
	public function update($id, Request $request){
		$this->model->set($id, false);
		$this->model->update($request->all());
	}	
	public function store(Request $request){
		$this->model->create($request->all());

	}

}
