<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aslab extends Model
{
    protected $table='aslab';
    protected $guarded = ['id'];
    public function pengguna(){
   	return $this->belongsTo(Pengguna::class);
   }
    public function aslab_pratikum(){
   	return $this->hasMany(Aslab_Pratikum::class);
   }

   public function listAslabDanNim(){
        $out = [];
        foreach ($this->all() as $asl) {
             $out[$asl->id] = "{$asl->nama} ({$asl->nim})";
         }  
         return $out;
    }
}
