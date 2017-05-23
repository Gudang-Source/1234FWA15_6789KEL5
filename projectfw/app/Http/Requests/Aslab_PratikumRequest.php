<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class Aslab_PratikumRequest extends Request
{
	public function authorize(){
	return true;
}
	public function rules()
	{
		$validasi=[
		'aslab_id'=>'required',
		'matakuliah_id'=>'required'
		];
		return $validasi;
	}
}