<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class MatakuliahRequest extends Request
{
	public function authorize(){
	return true;
}
	public function rules()
	{
		$validasi=[
		'nama_mk'=>'required',
		'keterangan'=>'required'
		];
		return $validasi;
	}
}