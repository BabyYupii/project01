<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    //property untuk index
    public function index(){
        $isi = "Ini merupakan isi dari property Index dalam controller ProdukController";
        return $isi;
    }
}
