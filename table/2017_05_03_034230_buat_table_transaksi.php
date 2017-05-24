<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal_beli');
            $table->integer('jumlah_barang');
            $table->integer('petugas_id',false,true);
            $table->foreign('petugas_id')->references('id')->on('petugas');
            $table->integer('sepatu_id',false,true);
            $table->foreign('sepatu_id')->references('id')->on('sepatu');
            $table->integer('pelanggan_id',false,true);
            $table->foreign('pelanggan_id')->references('id')->on('pelanggan');
            $table->integer('user_id',false,true);
            $table->foreign('user_id')->references('id')->on('user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transaksi');
    }
}
