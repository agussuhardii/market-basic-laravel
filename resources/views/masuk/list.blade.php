<?php
/**
 * Created by IntelliJ IDEA.
 * User: Agus Suhardi
 * Date: 6/3/2016
 * Time: 16:31
 */
?>
<!--memanggil layout-->
@extends('layout')

<!--mengisi title -->
@section('title')
Barang Masuk
@endsection

<!--mengisi content -->
@section('content')
<div class="row">
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>Kode Barang</th>
                <th>jumlah</th>
                <th>keterangan</th>
                <th>Waktu Transaksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($transaksiMasuk as $m)
            <tr>
                <td>{{$m->kode_barang}}</td>
                <td>{{$m->jumlah}}</td>
                <td>{{$m->keterangan}}</td>
                <td>{{$m->created_at}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ url('/masuk/create') }}" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Tambah</a>
    </div>
</div>
@endsection