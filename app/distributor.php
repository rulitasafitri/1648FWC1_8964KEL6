<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class distributor extends Model
{
    protected $table = 'distributor';
   protected $fillable = ['nama_distributor','no_hp','alamat'];

public function sepatu(){
   	return $this->hasOne(sepatu::class,'sepatu_id');
   }

   public function listDistributor(){
      $out =[];
      foreach ($this->all() as $distributor){
        $out[$distributor->id] = "{$distributor->nama_distributor}";
      }
      return $out;
    }
}
