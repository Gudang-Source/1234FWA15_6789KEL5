<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class pengguna extends Model implements AuthenticatableContract
{
   use Authenticatable;
   protected $table='pengguna';
   protected $fillable = ['username','password','level'];
   protected $guarded = ['id'];
   public function mahasiswa(){
   		return $this->hasOne(Mahasiswa::class);
   }
   public function dosen(){
   		return $this->hasOne(Dosen::class);
   }
   public function aslab(){
   		return $this->hasOne(Aslab::class);
   }
   public function admin(){
   		return $this->hasOne(Admin::class);
   }
}
