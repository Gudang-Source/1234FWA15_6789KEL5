<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

class Jadwal_PratikumRequest extends Request
{
	public function authorize(){
	return true;
}
	public function rules()
	{
		$validasi=[
		'mahasiswa_id'=>'required',
		'aslab_pratikum_id'=>'required',
		'ruangan_id'=>'required',
		'hari'=>'required',
		'jam'=>'required',
		
		];
		return $validasi;
	}
}