<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sepatu extends Model
{
      protected $table = 'sepatu';
   protected $fillable = ['nama_sepatu','ukuran','harga','stok','sepatu_id','admin_id','distributor_id','kategori_id'];

    public function sepatu(){
   	return $this->belongsTo(kategori::class);
   }


    public function distributor(){
   	return $this->belongsTo(distributor::class);
   }

   public function admin(){
   	return $this->belongsTo(admin::class);
   }

   public function pelanggan_sepatu(){
    return $this->hasMany(pelanggan_sepatu::class,'pelanggan_sepatu_id');
   }

   public function listSepatu(){
      $out =[];
      foreach ($this->all() as $sepatu){
        $out[$sepatu->id] = "{$sepatu->nama_sepatu}";
      }
      return $out;
    }

     public function pembayaran(){
    return $this->hasMany(pembayaran::class,'pembayaran_id');
   }

}
