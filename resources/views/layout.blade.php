<?php
/**
 * Created by IntelliJ IDEA.
 * User: Agus Suhardi
 * Date: 6/3/2016
 * Time: 16:42
 */
?>
<DOCTYPE html>
    <html>
    <head>
        <title>
            @yield('title')
        </title>
        <!--jquery-->
        <script src="{{asset('jquery/jquery-1.12.3.min.js')}}"></script>
        <script src="{{asset('form.lihat.barang.js')}}"></script>


        <!--bootsrap-->
        <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('starter-template.css')}}">
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>


    </head>
    <body>
    <div>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Shadow Market</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('keluar') }}"><i class="glyphicon glyphicon-shopping-cart"></i>
                                Transaksi</a></li>
                        <li><a href="{{ url('barang') }}"><i class="glyphicon glyphicon-th-list"></i> Barang</a></li>
                        <li><a href="{{ url('masuk') }}"><i class="glyphicon glyphicon-plus-sign"></i> Stok</a></li>
                    </ul>
                    <div class="navbar-form navbar-right">
                        <input type="text" class="form-control" placeholder="Search..." id="cariKode">
                        <button class="btn btn-success" data-toggle="modal" data-target="#lihat" id="tombolCari"><i
                                class="glyphicon glyphicon-zoom-in icon-white"></i> Cari
                        </button>
                    </div>
                </div><!--/.nav-collapse -->
            </div>
        </nav>


    </div>


    <!--pop up-->
    <div id="lihat" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h1>Detail</h1>
                <div class="form-horizontal">
                    <div class="form-group">
                        <div>
                            <span class="form-control">
                                Id : <label class="id"></label>
                            </span>
                            <span class="form-control">
                                Kode : <label class="kodeBarang"></label>
                            </span>
                            <span class="form-control">
                                Nama : <label class="nama"></label>
                            </span>
                            <span class="form-control">
                                Harga : <label class="harga"></label>
                            </span>
                            <span class="form-control">
                                Stok : <label class="stok"></label>
                            </span>
                            <span class="form-control">
                                Keterangan : <label class="keterangan"></label>
                            </span>
                            <span class="form-control">
                                Pertama Input : <label class="created_at"></label>
                            </span>
                            <span class="form-control">
                                Terakhir Update : <label class="updated_at"></label>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="starter-template">
            @yield('content')
        </div>
    </div>

    <div class="container">@copyright agus suhardi</div>
    </body>
    </html>