<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Aslab_Pratikum;
use App\Aslab;
use App\Matakuliah;
use App\Http\Requests\Aslab_PratikumRequest;
use Illuminate\Support\Facades\Input;

class Aslab_PratikumController extends Controller
{
	protected $informasi = 'Gagal Melakukan Aksi';
	public function awal()
	{
		$semuaAslabPratikum = Aslab_Pratikum::all();
		return view('aslab_pratikum.awal',compact('semuaAslabPratikum'));
	}
	public function tambah()
	{
		$matakuliah = new Matakuliah;
		$aslab = new Aslab; 
		return view('aslab_pratikum.tambah',compact('matakuliah','aslab'));
	}
	public function simpan(Aslab_PratikumRequest $input)
	{
		$aslab_pratikum = new Aslab_Pratikum($input->only('matakuliah_id','aslab_id')); 
		if($aslab_pratikum->save()) $this->informasi= 'Aslab Pratikum Berhasil Di Simpan';
		return redirect('aslab_pratikum')->with(['informasi'=>$this->informasi]);
	}
	public function edit ($id)
	{
		$aslab_pratikum = Aslab_Pratikum::find($id);
		$matakuliah = new Matakuliah;
		$aslab = new Aslab;
		return view('aslab_pratikum.edit', compact('matakuliah','aslab','aslab_pratikum'));

	}
	public function lihat ($id)
	{
	$aslab_pratikum=Aslab_Pratikum::find($id);
	return view ('aslab_pratikum.lihat')->with(array('aslab_pratikum'=>$aslab_pratikum));
	}
	public function update ($id,Aslab_PratikumRequest $input)
	{
		$aslab_pratikum = aslab_pratikum::find($id);
		$aslab_pratikum->aslab_id = $input->aslab_id;
		$aslab_pratikum->matakuliah_id = $input->matakuliah_id;
		$informasi = $aslab_pratikum->save()? 'Berhasil Update Data' : 'Gagal Update Data';
		return redirect('aslab_pratikum')->with(['informasi'=>$informasi]);
	}
	public function hapus ($id)
	{
	$aslab_pratikum=Aslab_Pratikum::find($id);
	$informasi = $aslab_pratikum->delete() ? 'Berhasil Hapus Data' : 'Gagal hapus Data';
	return redirect('aslab_pratikum')->with(['informasi'=>$informasi]);
	}
	
}
