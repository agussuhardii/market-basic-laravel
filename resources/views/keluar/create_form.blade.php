<?php
/**
 * Created by IntelliJ IDEA.
 * User: Agus Suhardi
 * Date: 6/3/2016
 * Time: 22:16
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
        <form method="post" action="{{ url('keluar') }}">
            {{ csrf_field() }}
            <label>Kode Barang</label><input type="text" name="kode_barang" class="form-control"\>
            <label>Harga</label><input type="number" name="harga" class="form-control" \>
            <label>Jumlah</label><input type="number" name="jumlah" class="form-control" \>
            <label>Keterangan</label><textarea type="text" name="keterangan" class="form-control"></textarea>

            <input type="submit" value="Simpan" class="btn btn-success" \>
        </form>
    </div>
</div>
@endsection



