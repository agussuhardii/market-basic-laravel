<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\transaksi_masuk;

class TransaksiMasukController extends Controller
{
    //menampilkan semua data
    public function index(){
        $transaksiMasuk = transaksi_masuk::all();
        return view('masuk.list')->with('transaksiMasuk', $transaksiMasuk);
    }

    //memanggil form simpan
    public function create(){
        return view('masuk.create_form');
    }

    //simpan
    public function store(Request $request){
        transaksi_masuk::create($request->all());
        return redirect('masuk');
    }

    //edit
    public function edit($id){
        $transaksiMasuk = transaksi_masuk::find($id);
        return view('masuk.edit_form')->with('transaksiMasuk', $transaksiMasuk);
    }

    //update
    public function update(Request $request, $id){
        transaksi_masuk::find($id)->update($request->all());
        return redirect('masuk');
    }

    //delete
    public function destroy($id){
        Barang::find($id)->delete();
        return redirect('barang');

        transaksi_masuk::find($id)->delete();
        redirect('masuk');
    }
}















