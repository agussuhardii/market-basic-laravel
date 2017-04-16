<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransaksiMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_masuk', function (Blueprint $table) {
            $table->increments('id');
            $table->char('kode_barang', 4);
                $table->foreign('kode_barang')->references('kode_barang')->on('barang');
            $table->integer("jumlah");
            $table->string("keterangan");
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
        Schema::drop('transaksi_masuk');
    }
}
