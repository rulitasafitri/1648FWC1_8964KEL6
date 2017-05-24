<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePelangganSepatu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan_sepatu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pelanggan_id',false,true);
            $table->foreign('pelanggan_id')->references('id')->on('pelanggan');
            $table->integer('sepatu_id',false,true);
            $table->foreign('sepatu_id')->references('id')->on('sepatu');
            $table->date('tanggal_beli');
            $table->string('jumlah_barang',20);
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
        Schema::drop('pelanggan_sepatu');
    }
}
