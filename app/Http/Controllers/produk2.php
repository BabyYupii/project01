<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\produkController;

class produk2 extends Controller
{
    //property untuk index
    public function index(){
        $x = new produkcontroller();

        return $x->index();
        }
    }