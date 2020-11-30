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
                ['Nama'=>"Flashdisk 4gb Kingstan",
                'ID_KATEGORI'=>"3",
                'qty'=>"210",
                'HARGA_JUAL'=>"60000",
                'HARGA_BELI'=>"45000"]);

                produks::create(
                ['Nama'=>"Flashdisk 8gb Kingstan",
                'ID_KATEGORI'=>"4",
                'qty'=>"200",
                'HARGA_JUAL'=>"80000",
                'HARGA_BELI'=>"60000"]);

                produks::create(
                    ['Nama'=>"MOD Aegis Legend",
                    'ID_KATEGORI'=>"2",
                    'qty'=>"10",
                    'HARGA_JUAL'=>"500000",
                    'HARGA_BELI'=>"450000"]);

                produks::create(
                    ['Nama'=>"Jasa Joki MLBB",
                    'ID_KATEGORI'=>"1",
                    'qty'=>"999",
                    'HARGA_JUAL'=>"20000",
                    'HARGA_BELI'=>"10000"]);

                 produks::create(
                        ['Nama'=>"LCD Vivo Y69",
                        'ID_KATEGORI'=>"1",
                        'qty'=>"20",
                        'HARGA_JUAL'=>"650000",
                        'HARGA_BELI'=>"300000"]);    

        }
    }

