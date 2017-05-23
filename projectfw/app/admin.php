<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table='admin';
    protected $guarded = ['id'];
    public function pengguna(){
   	return $this->belongsTo(Pengguna::class);
   }
}
