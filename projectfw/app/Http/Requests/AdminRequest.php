<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class AdminRequest extends Request
{
	public function authorize(){
	return true;
}
	public function rules()
	{
		$validasi=[
		'nama'=>'required',
		'username'=>'required'
		];
		if($this->is('admin/tambah')){
			$validasi['password']='required';
		}
		return $validasi;
	}
}