<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class Prak10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan data dari tabel kategori
        $KData = kategori ::get();
        $JRek = kategori ::count();

        return view('praktikum10.tugas1', compact('KData','JRek') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan form untuk data baru
        return view ('praktikum10.tugas1create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //menerima data dari form buat kategori
        kategori::create([
            'Kategori'=>$request->txkat,
            'Keterangan'=>$request->txdesk,
        ]);
        return redirect()->route('prak10.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan form dan data yang hendak diubah
        $psn = [
            'required'=>'Field harus diisi'
        ];

        $this->validate($request,[
            'txkat'=>'required',
            'txdesk'=>'required'
        ],$psn);
        $eDT = Kategori::where('id',$id)->first();
        return view ('praktikum10.tugas1edit', compact('eDT'));
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
        //Untuk Proses perubahan data
        Kategori::Where('id',$id)->update([
                'Kategori'=>$request->txkat,
                'Keterangan'=>$request->txdesk,
        ]);
        return redirect()->route('prak10.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Menghapus Data
        Kategori::Where('id',$id)->delete();
        return redirect()->route('prak10.index');
    }
}
