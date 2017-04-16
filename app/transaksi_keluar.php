<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi_keluar extends Model
{
    protected $table = "transaksi_keluar";
    protected $fillable = ['kode_barang', 'harga', 'jumlah', 'keterangan'];
}
