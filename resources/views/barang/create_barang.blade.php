<?php
/**
 * Created by IntelliJ IDEA.
 * User: Agus Suhardi
 * Date: 6/3/2016
 * Time: 18:07
 */
?>
<!--memanggil layout-->
@extends('layout')

<!--mengisi title -->
@section('title')
    Form Barang
@endsection

<!--mengisi content -->
@section('content')
<div class="row">
    <div>
        <form method="post" action="{{ url('barang') }}">
            {{ csrf_field() }}
            <label>Kode</label><input type="text" name="kode_barang" class="form-control"\>
            <label>Nama</label><input type="text" name="nama" class="form-control" \>
            <label>Harga</label><input type="number" name="harga" class="form-control" \>
            <label>Jumlah</label><input type="number" name="stok" class="form-control" \>
            <label>Keterangan</label><textarea type="text" name="keterangan" class="form-control"></textarea>

            <input type="submit" value="Simpan" class="btn btn-success" \>
        </form>
    </div>
</div>
@endsection

























