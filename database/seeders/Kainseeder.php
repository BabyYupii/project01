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
            'Kategorii'=>"Kordem",
            'qty'=>"45",
            'Distributor'=>"PT Jaya Kusukai",
            'Harga_Jual'=>"60000",
            'Harga_Beli'=>"50000"]);
        Kain::create(
            ['Nama_kain'=>"Kanvas WR",
            'Id_Kain'=>"30",
            'Kategorii'=>"Tebal",
            'qty'=>"60",
            'Distributor'=>"'PT Buana Mas",
            'Harga_Jual'=>"75000",
            'Harga_Beli'=>"60000"]);
    }
}
