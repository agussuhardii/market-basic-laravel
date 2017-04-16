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
Daftar Barang
@endsection

<!--mengisi content -->
@section('content')
<div class="row">
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>No</th>
                <th>kode</th>
                <th>nama</th>
                <th>harga</th>
                <th>jumlah</th>
                <th>keterangan</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($barang as $b)
            <tr>
                <td>
                    <button class="tombol" id="{{$b->id}}">{{$b->id}}</button>
                </td>
                <td>{{$b->kode_barang}}</td>
                <td>{{$b->nama}}</td>
                <td>{{$b->harga}}</td>
                <td>{{$b->stok}}</td>
                <td>{{$b->keterangan}}</td>

                <td>
                    <a href="{{ url('/barang/'.$b->id.'/edit') }}" class="btn btn-primary"><i
                            class="glyphicon glyphicon-edit"></i></a>
                </td>
                <td>
                    <form action="{{ url('/barang/'.$b->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE"/>
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus')"/>
                        <i class="glyphicon glyphicon-trash"></i>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ url('/barang/create') }}" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Tambah</a>
    </div>
</div>





<!--form modal Lihat-->
<div id="lihat" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <h1>Detail</h1>
            <div class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kode</label>
                    <div class="col-sm-10">
                        <span class="form-control" id="kode" ></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jurusan</label>
                    <div class="col-sm-10">
                        <span class="form-control" id="jurusan" ></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
                    <div class="col-sm-10">
                        <span class="form-control" id="keterangan" ></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--form modal Lihat-->
@endsection