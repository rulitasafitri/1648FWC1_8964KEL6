<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
   protected $table = 'pelanggan';
   protected $fillable = ['nama_pelanggan','alamat','email','no_hp'];

    public function sepatu(){
    return $this->hasMany(sepatu::class);
   }

   public function pelanggan_sepatu(){
    return $this->hasMany(pelanggan_sepatu::class,'pelanggan_sepatu_id');
   }

    public function listpelanggan(){
      $out =[];
      foreach ($this->all() as $pelanggan){
        $out[$pelanggan->id] = "{$pelanggan->nama_pelanggan}";
      }
      return $out;
    }

}
