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
        <form method="post" action="{{ url('barang/'.$barang->id) }}">
            <input type="hidden" name="_method" value="PUT"/>
            {{ csrf_field() }}
            <label>Kode</label><input type="text" name="kode_barang" class="form-control" value="{{$barang->kode_barang}}" \>
            <label>Nama</label><input type="text" name="nama" class="form-control" value="{{$barang->nama}}"\>
            <label>Harga</label><input type="number" name="harga" class="form-control" value="{{$barang->harga}}"\>
            <label>Jumlah</label><input type="number" name="stok" class="form-control" value="{{$barang->stok}}"\>
            <label>Keterangan</label><textarea type="text" name="keterangan" class="form-control">{{$barang->keterangan}}</textarea>

            <input type="submit" value="Simpan" class="btn btn-success" \>
        </form>
    </div>
</div>
@endsection

























