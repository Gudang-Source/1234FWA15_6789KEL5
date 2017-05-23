<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aslab_Pratikum extends Model
{
  protected $table= 'aslab_pratikum';
  protected $fillable= ['aslab_id','matakuliah_id'];
  protected $guarded = ['id'];
    //
  public function aslab (){
  	return $this->belongsTo(Aslab::class);
  }
  public function matakuliah(){
  	return $this->belongsTo(matakuliah::class);
  }
  
   public function jadwal_pratikum(){
    return $this->hasMany(jadwal_pratikum::class);
   }
  public function listAslabdanMatakuliah(){
    $out=[];
    foreach ($this->all()as $aslmtk){
      $out[$aslmtk->id]="{$aslmtk->aslab->nama} (Matakuliah {$aslmtk->matakuliah->nama_mk})";
    }
    return $out;
  }
}
