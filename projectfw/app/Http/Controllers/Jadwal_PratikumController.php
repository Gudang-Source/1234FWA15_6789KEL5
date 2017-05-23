<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Jadwal_PratikumRequest;
use App\Jadwal_Pratikum;
use App\Ruangan;
use App\Mahasiswa;
use App\Aslab_Pratikum;
use Illuminate\Support\Facades\Input;
class Jadwal_PratikumController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
	public function awal()
	{
		$semuaJadwalPratikum = Jadwal_Pratikum::all();
		return view('jadwal_pratikum.awal',compact('semuaJadwalPratikum'));
	}
	public function tambah()
	{
		$jadwal_pratikum = new Jadwal_Pratikum;
		$mahasiswa = new Mahasiswa;
		$ruangan = new Ruangan;
		$aslab_pratikum = new Aslab_Pratikum; 
		return view('jadwal_pratikum.tambah',compact('mahasiswa','ruangan','aslab_pratikum','jadwal_pratikum'));
	}
	public function simpan(Jadwal_PratikumRequest $input)
	{
		$jadwal_pratikum = new Jadwal_Pratikum($input->only('ruangan_id','aslab_pratikum_id','mahasiswa_id')); 
		$jadwal_pratikum->hari=$input->hari;
		$jadwal_pratikum->jam=$input->jam;
		if($jadwal_pratikum->save()) $this->informasi= 'Jadwal Mahasiswa Berhasil Di Simpan';
		return redirect('jadwal_pratikum')->with(['informasi'=>$this->informasi]);
	}
	public function edit ($id)
	{
		$jadwal_pratikum = Jadwal_Pratikum::find($id);
		$mahasiswa = new Mahasiswa;
		$ruangan = new Ruangan;
		$aslab_pratikum = new aslab_pratikum;
		return view('jadwal_pratikum.edit',compact('mahasiswa','ruangan','aslab_pratikum','jadwal_pratikum'));

	}
	public function lihat ($id)
	{
	$jadwal_pratikum=Jadwal_Pratikum::find($id);
	return view ('jadwal_pratikum.lihat')->with(array('jadwal_pratikum'=>$jadwal_pratikum));
	}
	public function update ($id,Jadwal_PratikumRequest $input)
	{
		$jadwal_pratikum = Jadwal_Pratikum::find($id);
		$jadwal_pratikum->fill($input->only('ruangan_id','aslab_pratikum_id','mahasiswa_id'));
		$jadwal_pratikum->hari=$input->hari;
		$jadwal_pratikum->jam=$input->jam;
		if($jadwal_pratikum->save())$this->informasi='jadwal mahasiswa berhasil diperbarui';
		return redirect('jadwal_pratikum')->with(['informasi'=>$this->informasi]);
	}
	public function hapus ($id)
	{
	$jadwal_pratikum=Jadwal_Pratikum::find($id);
	$informasi = $jadwal_pratikum->delete() ? 'Berhasil Hapus Data' : 'Gagal hapus Data';
	return redirect('jadwal_pratikum')->with(['informasi'=>$informasi]);
	}
	
}
