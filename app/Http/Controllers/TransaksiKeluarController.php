<?php

namespace App\Http\Controllers;

use App\transaksi_keluar;
use Illuminate\Http\Request;

use App\Http\Requests;

class TransaksiKeluarController extends Controller
{
    //menampilkan semua data
    public function index(){
        $transaksiKeluar = transaksi_keluar::all();
        return view('keluar.list')->with('transaksiKeluar', $transaksiKeluar);
    }

    //memanggil form simpan
    public function create(){
        return view('keluar.create_form');
    }

    //simpan
    public function store(Request $request){
        transaksi_keluar::create($request->all());
        return redirect('keluar');
    }

    //edit
    public function edit($id){
        $transaksiKeluar = transaksi_keluar::find($id);
        return view('keluar.edit_form')->with('transaksiKeluar', $transaksiKeluar);
    }

    //update
    public function update(Request $request, $id){
        transaksi_keluar::find($id)->update($request->all());
        return redirect('keluar');
    }

    //delete
    public function destroy($id){
        transaksi_keluar::find($id)->delete();
        return redirect('keluar');
    }
}
