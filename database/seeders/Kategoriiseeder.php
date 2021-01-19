<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategorii;

class Kategoriiseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kategorii::create(
            ['Kategori'=>'Unione Drill',
            'Keterangan'=>'Digunakan untuk pakaian seperti seragam, baju formal dan lain-lain']);
        Kategorii::create(
            ['Kategori'=>'Black Out',
            'Keterangan'=>'Digunakan untuk membuat korden']);
        Kategorii::create(
            ['Kategori'=>'Kanvas WR',
            'Keterangan'=>'Digunakan untuk membuat seperti Payung Pantai Karena material ini cukup tahan air']);
    }
}
