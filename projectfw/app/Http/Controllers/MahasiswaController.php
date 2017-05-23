<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;
use App\Pengguna;
use App\Http\Requests\MahasiswaRequest;
use Illuminate\Support\Facades\Input;
class MahasiswaController extends Controller
{
	protected $informasi = 'Gagal Melakukan Aksi';
	public function awal()
	{
		$semuaMahasiswa = Mahasiswa::all();
		return view('mahasiswa.awal',compact('semuaMahasiswa'));
	}
	public function tambah()
	{
		return view('mahasiswa.tambah');
	}
	public function simpan(Request $input)
	{
		$this->validate($input,[
                'nama'=>'required',
                'nim'=>'required|unique:mahasiswa|min:10|max:10',
                'username'=>'required|unique:pengguna',
                'password'=>'required|min:6',
              	]);
		$pengguna = new Pengguna($input->only('username','password','level'));
		if($pengguna->save()){
			$mahasiswa = new Mahasiswa;
			$mahasiswa->nama = $input->nama;
			$mahasiswa->nim = $input->nim;
			$mahasiswa->alamat = $input->alamat;
			if($pengguna->mahasiswa()->save($mahasiswa)) $this->informasi='Berhasil Simpan Data';	
		}		
		return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
	}
	public function edit ($id)
	{
	$mahasiswa=Mahasiswa::find($id);
	return view ('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
	}
	public function lihat ($id)
	{
	$mahasiswa=Mahasiswa::find($id);
	return view ('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
	}
	public function update ($id,Request $input)
	{
		$this->validate($input,[
                'nama'=>'required',
                'nim'=>'required|unique:mahasiswa',
                'alamat'=>'required',
                'username'=>'required|unique:pengguna',
                ]);
		$mahasiswa=Mahasiswa::find($id);
		$pengguna = $mahasiswa->pengguna;
		$mahasiswa->nama = $input->nama;
		$mahasiswa->nim = $input->nim;
		$mahasiswa->alamat = $input->alamat;
		$mahasiswa->save();
		if(!is_null($input->username)){
			$pengguna->fill($input->only('username'));
				if(!empty($input->password)){
					$pengguna->password = $input->password;
				}
					if($pengguna->save()){
					$this->informasi = 'Berhasil Simpan Data';
				}else{
					$this->informasi = 'Gagal Simpan Data';
				}	
			}
			return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
		}
	public function hapus ($id)
	{
		$mahasiswa=Mahasiswa::find($id);
		if($mahasiswa->pengguna()->delete()){
			$this->informasi = 'Berhasil Hapus Data';
		}
		return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
	}
    
}
