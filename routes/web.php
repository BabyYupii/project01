<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


route::get('aboutus',function(){
    echo"ini merupakan contoh sebuah page (page about)";
})->name("tentang");

Route::get('/show/{id}', function ($id) {
    echo "Nilai Parameter Adalah ".$id;
});

Route::get('/edit/{nama}', function ($nama) {
    echo "Nilai Parameter Adalah ".$nama;
 })->where('nama','[A-Za-z]+');


route::get('/utama',function() {
    echo "ini page utama";
    echo "<br>";
    echo "<a href='".route('tentang')."'>about</a>";
});

Route::get('/produk', [produkController::class ,'index']);

Route::get('latihanView01',function(){
    return view("latihan01");
});

Route::get('/produk/showproduk', [produkController::class ,'showproduk']);