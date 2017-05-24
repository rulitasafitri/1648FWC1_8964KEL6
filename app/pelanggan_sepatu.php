<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan_sepatu extends Model
{
     protected $table = 'pelanggan_sepatu';
   protected $fillable = ['pelanggan_id','sepatu_id','tanggal_beli','jumlah_barang'];

    public function pelanggan(){
   	return $this->belongsTo(pelanggan::class);
   }


    public function sepatu(){
   	return $this->belongsTo(sepatu::class);
   }

   public function pembayaran(){
    return $this->hasMany(pembayaran::class,'pembayaran_id');
   }

   public function listjumlahbarang(){
      $out =[];
      foreach ($this->all() as $pelangga_sepatu){
        $out[$pelangga_sepatu->id] = "{$pelangga_sepatu->jumlah_barang}";
      }
      return $out;
    }
}
