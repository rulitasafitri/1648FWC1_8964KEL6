<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
   protected $table = 'admin';
   protected $fillable = ['nama_admin','alamat','no_tlp'];

   public function pengguna(){
   	return $this->hasOne(pengguna::class,'pengguna_id');
   }

   public function sepatu(){
   	return $this->hasOne(sepatu::class,'sepatu_id');
   }

public function listAdmin(){
      $out =[];
      foreach ($this->all() as $admin){
        $out[$admin->id] = "{$admin->nama_admin}";
      }
      return $out;
    }
}
