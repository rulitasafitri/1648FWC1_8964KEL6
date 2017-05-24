<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
   protected $table = 'pembayaran';
   protected $fillable = ['status','total_harga','sepatu_id','pelanggan_sepatu_id'];

   

    public function pelanggan_sepatu(){
   	return $this->belongsTo(pelanggan_sepatu::class);
   }

    public function sepatu(){
   	return $this->belongsTo(sepatu::class);
   }
}
