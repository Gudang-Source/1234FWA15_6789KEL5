<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Aslab;
use App\Pengguna;
use App\Http\Requests\AslabRequest;
use Illuminate\Support\Facades\Input;
class AslabController extends Controller
{
	protected $informasi = 'Gagal Melakukan Aksi';
	public function awal()
	{
		$semuaAslab = Aslab::all();
		return view('aslab.awal',compact('semuaAslab'));
	}
	public function tambah()
	{
		return view('aslab.tambah');
	}
	public function simpan(Request $input)
	{
		$this->validate($input,[
                'nama'=>'required',
                'nim'=>'required|unique:aslab|min:10|max:10',
                'username'=>'required|unique:pengguna',
                'password'=>'required|min:6',
              	]);
		$pengguna = new Pengguna($input->only('username','password','level'));
		if($pengguna->save()){
			$aslab = new Aslab;
			$aslab->nama = $input->nama;
			$aslab->nim = $input->nim;
			if($pengguna->aslab()->save($aslab)) $this->informasi='Berhasil Simpan Data';	
		}		
		return redirect('aslab')->with(['informasi'=>$this->informasi]);
	}

	public function edit ($id)
	{
	$aslab=Aslab::find($id);
	return view ('aslab.edit')->with(array('aslab'=>$aslab));
	}
	public function lihat ($id)
	{
	$aslab=Aslab::find($id);
	return view ('aslab.lihat')->with(array('aslab'=>$aslab));
	}
	public function update ($id,Request $input)
	{
		$this->validate($input,[
                'nama'=>'required',
                'nim'=>'required|unique:aslab',
                'username'=>'required|unique:pengguna',
                'password'=>'required|min:6',
              	]);
		$pengguna = $aslab->pengguna;
		$aslab->nama = $input->nama;
		$aslab->nim = $input->nim;
		$aslab->save();
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
		return redirect('aslab')->with(['informasi'=>$this->informasi]);
	}
	public function hapus ($id)
	{
		$aslab=Aslab::find($id);
		if($aslab->pengguna()->delete()){
			$this->informasi = 'Berhasil Hapus Data';
		}
		return redirect('aslab')->with(['informasi'=>$this->informasi]);
	}
    
}
