<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_pratikum extends Model
{
   protected $table='jadwal_pratikum';
   protected $guarded = ['id'];

   public function mahasiswa(){
   	return $this->belongsTo(mahasiswa::class);
   }
   public function ruangan(){
   	return $this->belongsTo(ruangan::class);
   }
   public function aslab_pratikum(){
   	return $this->belongsTo(aslab_pratikum::class);
   }

}
