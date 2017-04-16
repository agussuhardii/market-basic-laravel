<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransaksiKeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_keluar', function (Blueprint $table) {
            $table->increments('id');
            $table->char('kode_barang', 4)->index();
                $table->foreign('kode_barang')->references('kode_barang')->on('barang');
            $table->bigInteger("harga");
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
        Schema::drop('transaksi_keluar');
    }
}
