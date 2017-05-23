<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Auth;
use Validator;
use App\Dosen;
use App\Aslab;
use App\Jadwal_Pratikum;
use App\Aslab_Pratikum;
use App\Dosen_Matakuliah;
use App\Ruangan;
use Image;
use Response;

class MdosenController extends Controller
{
	public function dosen(){
            $dosen = Dosen::where('pengguna_id','=',Auth::user()->id)->get();
            return view('master-dosen.awal',compact('dosen'));
        }
    public function dosen_dsn(){
        
         $dosen= Dosen::where('pengguna_id','=',Auth::user()->id)->get();
        $semuaDosenMatakuliah = Dosen_Matakuliah::all();
        return view('master-dosen.dosen',compact('semuaDosenMatakuliah','dosen'));
    
    }
     public function dosen_matakuliah_dsn()
    {
           $semuaJadwalDosen = Dosen_Matakuliah::where('dosen_id','=',Auth::user()->dosen->id)->get();
           $dosen= Dosen::where('pengguna_id','=',Auth::user()->id)->get();
           return view('master-dosen.jadwal_dosen', compact('semuaJadwalDosen','dosen'));
 }
  public function ruangan_dsn()
    {
        $dosen= Dosen::where('pengguna_id','=',Auth::user()->id)->get();
        return view('master-dosen.ruangan',['data'=>Ruangan::all()], compact('dosen'));
    }
    public function aslab_dsn (){
        $dosen= Dosen::where('pengguna_id','=',Auth::user()->id)->get();
        $semuaAslabPratikum = Aslab_Pratikum::all();
        return view('master-dosen.aslab',compact('semuaAslabPratikum','dosen'));
    
    }
    public function edit_dsn($id){
           $dosen= Dosen::where('pengguna_id','=',Auth::user()->id)->get();
           $dsn=Dosen::find($id);
           return view ('master-dosen.ubah',compact('dosen'))->with(array('dsn' =>$dsn));
        }
        public function update_dsn($id, Request $input)
        {
           $this->validate($input,[
               'nama'=>'required',
               'password'=>'required|min:6',
               'foto'=>'required',
               ]);
        if(Input::hasFile('foto'))
        $foto = Input::file('foto');
        $img = Image::make($foto);
        Response::make($img->encode('jpeg'));
        $foto->move('uploads', $foto->getClientOriginalName());   
        $fotoname = Input::file('foto')->getClientOriginalName();

        $dosen=Dosen::find($id);
        $pengguna = $dosen->pengguna;
        $dosen->nama = $input->nama;	
        $dosen->foto=$fotoname;
        $dosen->save();
        
                if(!empty($input->password)){
                    $pengguna->password = $input->password;
                }
                    if($pengguna->save()){
                    $this->informasi = 'Berhasil Simpan Data';
                }else{
                    $this->informasi = 'Gagal Simpan Data';
                }   
            
        
        return redirect('master-dosen')->with(['informasi'=>$this->informasi]);
}
}


 

