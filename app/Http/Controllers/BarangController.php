<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Barang;

class BarangController extends Controller
{

    //menampilkan semua data
    public function index(){
        $barang = Barang::all();
        return view('barang.daftar_barang')->with("barang", $barang);
    }

    //memanggil form simpan
    public function create(){
        return view('barang.create_barang');
    }

    //simpan
    public function store(Request $request){
        Barang::create($request->all());
        return redirect('barang');
    }

    //edit
    public function edit($id){
        $barang = Barang::find($id);
        return view('barang.edit_barang')->with('barang', $barang);
    }

    //update
    public function update(Request $request, $id){
        Barang::find($id)->update($request->all());
        return redirect('barang');
    }

    //delete
    public function destroy($id){
        Barang::find($id)->delete();
        return redirect('barang');
    }

    //detail
    public function show($id){
        $barang = Barang::find($id);
        return $barang;
    }
}