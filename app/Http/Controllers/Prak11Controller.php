<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Produks;


class Prak11Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan data dari produks
        $KData = produks::get();
        $JRek = produks::count();

        return view('praktikum11.index', compact('KData','JRek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan data tambahan dari data produk
        $DKat = kategori::get();

        return view('praktikum11.create', compact('DKat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //membuat validasi data
        $aturan = [
            'txProduk'=>'required',
            'txHargaBeli'=>'required|numeric',
            'txHargaJual'=>'required|numeric',
            'txStok'=>'required|numeric',
            'txKat'=>'required|numeric',
        ];
        $msg = [
            'requred'=>'wajib diisi',
            'numeric'=>'diisi dengan data angka',
        ];
        //lakukan validasi form
        $this->validate($request,$aturan,$msg);

        //menambahkan data baru
        produks::create([
            'Nama'=>$request->txProduk,
            'HARGA_BELI'=>$request->txHargaBeli,
            'HARGA_JUAL'=>$request->txHargaJual,
            'qty'=>$request->txStok,
            'ID_KATEGORI'=>$request->txKat,
        ]);
        return redirect()->route ('prak11.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Menampilkan Data Berdasarkan Kreteria
        $kreteria = "%".$id."%";
        $KData = produks::where('Nama','like',$kreteria)->get();
        $JRek = produks::where('Nama','like',$kreteria)->count();
        return view('prak11.index', compact('KData','JRek'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
