<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
   protected $table='ruangan';
   protected $guarded = ['id'];

   public function jadwal_pratikum(){
   	return $this->hasMany(jadwal_pratikum::class);
   }
}
