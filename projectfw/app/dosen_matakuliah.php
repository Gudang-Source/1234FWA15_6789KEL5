<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
{
  protected $table= 'dosen_matakuliah';
  protected $fillable= ['dosen_id','matakuliah_id'];
  protected $guarded = ['id'];
    //
  public function dosen (){
  	return $this->belongsTo(Dosen::class);
  }
  public function matakuliah(){
  	return $this->belongsTo(Matakuliah::class);
  }
  public function listDosendanMatakuliah(){
    $out=[];
    foreach ($this->all()as $dsnMtk){
      $out[$dsnMtk->id]="{$dsnMtk->dosen->nama} (Matakuliah {$dsnMtk->matakuliah->nama_mk})";
    }
    return $out;
  }
}
