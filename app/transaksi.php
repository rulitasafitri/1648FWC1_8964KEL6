<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
   protected $table = 'transaksi';
   protected $fillable = ['tanggal_beli','jumlah_barang','petugas_id','sepatu_id','pelanggan_id','pengguna_id'];

}
