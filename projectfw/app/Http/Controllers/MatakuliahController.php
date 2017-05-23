<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;
use App\Http\Requests\MatakuliahRequest;
use Illuminate\Support\Facades\Input;
class MatakuliahController extends Controller
{
    
	public function awal()
	{
		return view('matakuliah.awal',['data'=>Matakuliah::all()]);
	}
	public function tambah()
	{
		return view ('matakuliah.tambah');
	}
	public function simpan(MatakuliahRequest $input)
	{
		$matakuliah = new Matakuliah();
		$matakuliah->nama_mk = $input->nama_mk;
		$matakuliah->keterangan = $input->keterangan;
		$informasi = $matakuliah->save() ? 'berhasil simpan data':'gagal simpaan data';		
		return redirect('matakuliah')->with(['informasi'=>$informasi]);
	}
	public function edit ($id)
	{
	$matakuliah=Matakuliah::find($id);
	return view ('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));
	}
	public function lihat ($id)
	{
	$matakuliah=Matakuliah::find($id);
	return view ('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
	}
	public function update ($id,MatakuliahRequest $input)
	{
		$matakuliah=Matakuliah::find($id);
		$matakuliah->nama_mk = $input->nama_mk;
		$matakuliah->keterangan = $input->keterangan;
		$informasi= $matakuliah->save()? 'berhasil update data ': 'gagal update data';
		return redirect('matakuliah')->with(['informasi'=>$informasi]);
	}
	public function hapus ($id)
	{
		$matakuliah=Matakuliah::find($id);
		$informasi= $matakuliah->delete()? 'berhasil hapus data ': 'gagal hapus data';
		return redirect('matakuliah')->with(['informasi'=>$informasi]);
	}
}
