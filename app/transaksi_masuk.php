<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi_masuk extends Model
{
    protected $table = "transaksi_masuk";
    protected $fillable = ['kode_barang', 'jumlah', 'keterangan'];
}
