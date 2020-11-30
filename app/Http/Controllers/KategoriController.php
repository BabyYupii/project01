<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KategoriController extends Controller
{
    public function index(){
        $Kategori = DB::table('Kategori')->get();
        return view('produk.tugas2', compact('Kategori'));
    }
}
