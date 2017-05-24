<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableSepatu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepatu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_sepatu');
            $table->integer('ukuran');
            $table->integer('harga');
            $table->integer('stok');
            $table->integer('kategori_id',false,true);
            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->integer('admin_id',false,true);
            $table->foreign('admin_id')->references('id')->on('admin');
            $table->integer('distributor_id',false,true);
            $table->foreign('distributor_id')->references('id')->on('distributor');
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
        Schema::drop('sepatu');
    }
}
