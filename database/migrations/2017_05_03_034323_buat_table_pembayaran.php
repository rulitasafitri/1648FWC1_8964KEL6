<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTablePembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('id');
             $table->string('status');
            $table->integer('total_harga');
            $table->integer('sepatu_id',false,true);
            $table->foreign('sepatu_id')->references('id')->on('sepatu');
            $table->integer('pelanggan_sepatu_id',false,true);
            $table->foreign('pelanggan_sepatu_id')->references('id')->on('pelanggan_sepatu_id');
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
        Schema::drop('pembayaran');
    }
}
