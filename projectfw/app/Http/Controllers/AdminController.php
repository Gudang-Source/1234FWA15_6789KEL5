<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;
use App\Pengguna;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Input;
class AdminController extends Controller
{
	protected $informasi = 'Gagal Melakukan Aksi';
	public function awal()
	{
		$semuaAdmin = Admin::all();
		return view('admin.awal',compact('semuaAdmin'));
	}
	public function tambah()
	{
		return view('admin.tambah');
	}
	public function simpan(Request $input)
	{
		$this->validate($input,[
                'nama'=>'required',
                'username'=>'required|unique:admin',
                'password'=>'required|min:6',
                
              	]);
		$query=pengguna::where('username','=',input::get('username'))->get();
		if(count($query)>0){
			return redirect('admin/tambah')->with(['informasi'=>$this->informasi='username telah digunakan,silahkan gunakan username yang lain']);	
		}else{
		$pengguna = new Pengguna($input->only('username','password','level'));
		if($pengguna->save()){
			$admin = new Admin;
			$admin->nama = $input->nama;
			if($pengguna->admin()->save($admin)) $this->informasi='Berhasil Simpan Data';	
		}		
		return redirect('admin')->with(['informasi'=>$this->informasi]);
	}
}
	public function edit ($id)
	{
	$admin=Admin::find($id);
	return view ('admin.edit')->with(array('admin'=>$admin));
	}
	public function lihat ($id)
	{
	$admin=Admin::find($id);
	return view ('admin.lihat')->with(array('admin'=>$admin));
	}
	public function update ($id,Request $input)
	{
		$this->validate($input,[
                'nama'=>'required',
                'username'=>'required|unique:admin',
                'password'=>'required|min:6',
                
              	]);
		$admin=Admin::find($id);
		$pengguna = $admin->pengguna;
		$admin->nama = $input->nama;
		$admin->save();
		if(!is_null($input->username)){
			$query=pengguna::where('username','=',input::get('username'))->get();
			if(count($query) > 0){
				$pengguna->fill($input->only('username'));
				return redirect('admin/edit/'.$admin->id)->with(['informasi'=>$this->informasi='username telah digunakan silahkan gunakan username yang lain']);
			}else{
				if(!empty($input->password)){
					$pengguna->password = $input->password;
				}
					if($pengguna->save()){
					$this->informasi = 'Berhasil Simpan Data';
				}else{
					$this->informasi = 'Gagal Simpan Data';
				}	
			}
			
		}
		return redirect('admin')->with(['informasi'=>$this->informasi]);
	}
	public function hapus ($id)
	{
		$admin=Admin::find($id);
		if($admin->pengguna()->delete()){
			$this->informasi = 'Berhasil Hapus Data';
		}
		return redirect('admin')->with(['informasi'=>$this->informasi]);
	}
    
}
