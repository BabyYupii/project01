<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class productController extends Controller
{
    public function index(){
        $product = DB::table('product')->get();
        return view('produk.tugas2', compact('product'));
    }
}
