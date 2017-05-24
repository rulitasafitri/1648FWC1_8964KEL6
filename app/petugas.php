<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
   protected $table = 'petugas';
   protected $fillable = ['nama_petugas'];

   public function pengguna(){
   	return $this->hasOne(pengguna::class,'pengguna_id');
   }
}
