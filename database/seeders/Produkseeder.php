<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\produks;

class Produkseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        produks::create(
            ['namaproduk'=>"Flashdisk 4gb Kingstan",
            'id_kat'=>"3",
            'qty'=>"210",
            'harga_jual'=>"60000",
            'harga_beli'=>"45000"],
            ['namaproduk'=>"Flashdisk 8gb Kingstan",
            'id_kat'=>"3",
            'qty'=>"210",
            'harga_jual'=>"80000",
            'harga_beli'=>"60000"],
        );
    }
}

