<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kain;

class Kainseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kain::create(
            ['Nama_kain'=>"Unione Drill",
            'Id_Kain'=>"780",
            'Kategorii'=>"Kain Bahan lembut",
            'qty'=>"30",
            'Distributor'=>"PT Intan Permata Sakti",
            'Harga_Jual'=>"45000",
            'Harga_Beli'=>"27000"]);
        Kain::create(
            ['Nama_kain'=>"Black Out",
             'Id_Kain'=>"01",
            'Kategorii'=>"In",
            'qty'=>"30",
            'Distributor'=>"PT Intan Permata Sakti",
            'Harga_Jual'=>"45000",
            'Harga_Beli'=>"27000"]);
        Kain::create(
            ['Nama_kain'=>"Unione Drill",
            'Id_Kain'=>"780",
            'Kategorii'=>"Digunakan untuk pakaian seperti seragam, baju formal dan lain-lain",
            'qty'=>"30",
            'Distributor'=>"PT Intan Permata Sakti",
            'Harga_Jual'=>"45000",
            'Harga_Beli'=>"27000"]);
    }
}
