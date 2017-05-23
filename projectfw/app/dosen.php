<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
   protected $table='dosen';
   protected $guarded = ['id'];
   public function pengguna(){
   	return $this->belongsTo(Pengguna::class);
   }
   public function dosen_matakuliah(){
   	return $this->hasMany(Dosen_Matakuliah::class);
   }

   public function listDosenDanNip(){
        $out = [];
        foreach ($this->all() as $dsn) {
             $out[$dsn->id] = "{$dsn->nama} ({$dsn->nip})";
         }  
         return $out;
    }
}

