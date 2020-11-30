<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Prak9Controller extends Controller
{
    //menampilkan jumlah data count()
    public function QB_tugas1(){
        $JRekProduk = DB::table('produks')->count(); 
        $JRekKategori = DB::table('Kategori')->count();

        return view('produk.praktikum9.tugas1',compact('JRekProduk','JRekKategori') );

    }

    public function QB_Tugas2(){
        $ID_KATEGORI = 1;
        $PData = DB::table('produks')
        ->where('ID_KATEGORI',$ID_KATEGORI)
        ->get();
        $JRek = DB::table('produks')
        ->where('ID_KATEGORI',$ID_KATEGORI)
        ->count();

        return view('produk.praktikum9.tugas2',compact('ID_KATEGORI','PData','JRek') );
    }

    public function QB_Tugas3(){
        $PData = DB::table('produks')
        ->join('Kategori','produks.ID_KATEGORI','=','Kategori.id')
        ->get();
        $JRek = DB::table('produks')
        ->join('Kategori','produks.ID_KATEGORI','=','Kategori.id')
        ->count();

        return view('produk.praktikum9.tugas3',compact('JRek','PData') );
    }   
    }