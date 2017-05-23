<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class AslabRequest extends Request
{
	public function authorize(){
	return true;
}
	public function rules()
	{
		$validasi=[
		'nama'=>'required',
		'nim'=>'required|integer',
		'username'=>'required'
		];
		if($this->is('aslab/tambah')){
			$validasi['password']='required';
		}
		return $validasi;
	}
}