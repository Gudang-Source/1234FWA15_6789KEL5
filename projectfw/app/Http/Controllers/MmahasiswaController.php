<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Validator;
use App\Http\Requests;
use App\Mahasiswa;
use App\Jadwal_Pratikum;
use App\Aslab_Pratikum;
use App\Dosen_Matakuliah;
use App\Ruangan;
use Image;
use Response;

class MmahasiswaController extends Controller
{
	        
        public function mahasiswa(){
            $mahasiswa = Mahasiswa::where('pengguna_id','=',Auth::user()->id)->get();
            return view('master-mahasiswa.awal',compact('mahasiswa'));
        }
 public function jadwal_pratikum_mhs(){
            $semuaJadwalPratikum = Jadwal_Pratikum::where('mahasiswa_id','=',Auth::user()->mahasiswa->id)->get();
            $mahasiswa= Mahasiswa::where('pengguna_id','=',Auth::user()->id)->get();
            return view('master-mahasiswa.jadwal_pratikum', compact('semuaJadwalPratikum','mahasiswa'));
        }
        public function edit_mhs($id){
           $mahasiswa= Mahasiswa::where('pengguna_id','=',Auth::user()->id)->get();
           $mhs=mahasiswa::find($id);
           return view ('master-mahasiswa.ubah',compact('mahasiswa'))->with(array('mhs' =>$mhs));
        }
        public function update_mhs($id, Request $input)
        {
            $this->validate($input,[
                'nama'=>'required',               
                'alamat'=>'required',
                'password'=>'required|min:6',
                'foto'=>'required',
                ]);
        $mahasiswa=Mahasiswa::find($id);
        if(Input::hasFile('foto'))
        $foto = Input::file('foto');
        $img = Image::make($foto);
        Response::make($img->encode('jpeg'));
        $foto->move('uploads', $foto->getClientOriginalName());   
        $fotoname = Input::file('foto')->getClientOriginalName();
        $pengguna = $mahasiswa->pengguna;
        $mahasiswa->nama = $input->nama;
        $mahasiswa->alamat = $input->alamat;
        $mahasiswa->foto = $fotoname;
        $mahasiswa->save();
    
                if(!empty($input->password)){
                    $pengguna->password = $input->password;
                }
                    if($pengguna->save()){
                    $this->informasi = 'Berhasil Simpan Data';
                }else{
                    $this->informasi = 'Gagal Simpan Data';
                }   
        
        return redirect('master-mahasiswa')->with(['informasi'=>$this->informasi]);

    }
    public function aslab_mhs (){
        $mahasiswa= Mahasiswa::where('pengguna_id','=',Auth::user()->id)->get();
        $semuaAslabPratikum = Aslab_Pratikum::all();
        return view('master-mahasiswa.aslab',compact('semuaAslabPratikum','mahasiswa'));
    
    }
    public function dosen_mhs(){
        
         $mahasiswa= Mahasiswa::where('pengguna_id','=',Auth::user()->id)->get();
        $semuaDosenMatakuliah = Dosen_Matakuliah::all();
        return view('master-mahasiswa.dosen',compact('semuaDosenMatakuliah','mahasiswa'));
    
    }
    public function ruangan_mhs()
    {
        $mahasiswa= Mahasiswa::where('pengguna_id','=',Auth::user()->id)->get();
        return view('master-mahasiswa.ruangan',['data'=>Ruangan::all()], compact('mahasiswa'));
    }
    public function nilai_mhs()
    {
            $semuaJadwalPratikum = Jadwal_Pratikum::where('mahasiswa_id','=',Auth::user()->mahasiswa->id)->get();
            $mahasiswa= Mahasiswa::where('pengguna_id','=',Auth::user()->id)->get();
            return view('master-mahasiswa.nilai', compact('semuaJadwalPratikum', 'mahasiswa'));
        }   
}
