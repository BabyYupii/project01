<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    //property untuk index
    public function index(){
        $produk = "Makanan sehat";
        return view('produk/index');
    }
    //property showproduk
    public function showproduk(){
        $produk = ["Makanan sayur","buku matematika","Minuman Soda","Headset"];
        return view('produk.showproduk',compact('produk'));

    }
}
