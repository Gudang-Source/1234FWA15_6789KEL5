<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
   protected $guarded = ['id'];
   protected $table='mahasiswa';

   public function pengguna(){
   	return $this->belongsTo(Pengguna::class);
   }
   public function listMahasiswaDanNim(){
        $out = [];
        foreach ($this->all() as $mhs) {
             $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
         }  
         return $out;
    }
    
   public function jadwal_pratikum(){
   	return $this->hasMany(jadwal_pratikum::class);
   }
}
