<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
   protected $table = 'kategori';
   protected $fillable = ['nama_kategori'];

   public function sepatu(){
   	return $this->hasOne(sepatu::class,'sepatu_id');
   }

    public function listKategori(){
      $out =[];
      foreach ($this->all() as $kategori){
        $out[$kategori->id] = "{$kategori->nama_kategori}";
      }
      return $out;
    }
}
