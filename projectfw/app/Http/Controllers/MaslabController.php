<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Auth;
use Validator;
use App\Aslab;
use App\Mahasiswa;
use App\Jadwal_Pratikum;
use App\Aslab_Pratikum;
use App\Dosen_Matakuliah;
use App\Ruangan;
use Image;
use Response;

class MaslabController extends Controller
{
	public function aslab(){
            $aslab = Aslab::where('pengguna_id','=',Auth::user()->id)->get();
            return view('master-aslab.awal',compact('aslab'));
        }
    public function ruangan_aslb()
    {
        $aslab= Aslab::where('pengguna_id','=',Auth::user()->id)->get();
        return view('master-aslab.ruangan',['data'=>Ruangan::all()], compact('aslab'));
    }
    public function dosen_aslb()
    {
        $aslab= Aslab::where('pengguna_id','=',Auth::user()->id)->get();
        $semuaDosenMatakuliah = Dosen_Matakuliah::all();
        return view('master-aslab.dosen',compact('semuaDosenMatakuliah','aslab'));
    
    }
    public function jadwal_pratikum_aslb()
    {
           $semuaJadwalPratikum = Jadwal_Pratikum::where('aslab_pratikum_id','=',Auth::user()->aslab->id)->get();
            $aslab= Aslab::where('pengguna_id','=',Auth::user()->id)->get();
            return view('master-aslab.jadwal_pratikum', compact('semuaJadwalPratikum','aslab'));
 }
   public function nilai_pratikum_aslb()
    {
           $semuaJadwalPratikum = Jadwal_Pratikum::where('aslab_pratikum_id','=',Auth::user()->aslab->id)->get();
            $aslab= Aslab::where('pengguna_id','=',Auth::user()->id)->get();
            return view('master-aslab.nilai', compact('semuaJadwalPratikum','aslab'));
 } 
 public function edit_nilai ($id)
    {
        $aslab= Aslab::where('pengguna_id','=',Auth::user()->id)->get();
        $jadwal_pratikum = Jadwal_Pratikum::find($id);
        $mahasiswa = new Mahasiswa;
        $aslab_pratikum = new aslab_pratikum;
        return view('master-aslab.tambah_nilai',compact('mahasiswa','aslab','aslab_pratikum','jadwal_pratikum'));

    }
    public function update_nilai ($id, Request $input)
    {
        $jadwal_pratikum = Jadwal_Pratikum::find($id);
        $jadwal_pratikum->fill($input->only('aslab_pratikum_id','mahasiswa_id'));
        $jadwal_pratikum->nilai=$input->nilai;
        if($jadwal_pratikum->save())$this->informasi='jadwal mahasiswa berhasil diperbarui';
        return redirect('nilai_aslab')->with(['informasi'=>$this->informasi]);
    }
    public function aslab_aslb (){
        $aslab= Aslab::where('pengguna_id','=',Auth::user()->id)->get();
        $semuaAslabPratikum = Aslab_Pratikum::all();
        return view('master-aslab.aslab',compact('semuaAslabPratikum','aslab'));
    
    }
     public function edit_aslb($id){
           $aslab= Aslab::where('pengguna_id','=',Auth::user()->id)->get();
           $aslb=aslab::find($id);
           return view ('master-aslab.ubah',compact('aslab'))->with(array('aslb' =>$aslb));
        }
        public function update_aslb ($id, Request $input)
        {
           $this->validate($input,[
               'nama'=>'required',
               'password'=>'required|min:6',
               'foto'=>'required',
               ]);
         if(Input::hasFile('foto'));
        $foto = Input::file('foto');
        $img = Image::make($foto);
        Response::make($img->encode('jpeg'));
        $foto->move('uploads', $foto->getClientOriginalName());   
        $fotoname = Input::file('foto')->getClientOriginalName();

        $aslab=Aslab::find($id);
        $pengguna = $aslab->pengguna;
        $aslab->nama = $input->nama;
        $aslab->foto=$fotoname;
        $aslab->save();
                if(!empty($input->password)){
                    $pengguna->password = $input->password;
                }
                    if($pengguna->save()){
                    $this->informasi = 'Berhasil Simpan Data';
                }else{
                    $this->informasi = 'Gagal Simpan Data';
                }   
            
        return redirect('master-aslab')->with(['informasi'=>$this->informasi]);
    }
}
