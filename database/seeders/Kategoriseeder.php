<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class Kategoriseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            Kategori::create(
            ['Kategori'=>'keyboard',
            'Keterangan'=>'Segala macam keyboard PC, Laptop, TV']);
            Kategori::create(
            ['Kategori'=>'Mouse',
            'Keterangan'=>'Segala Macam Mouse Wire maupun Wireless']);
            Kategori::create(
            ['Kategori'=>'Flashdisk',
            'Keterangan'=>'Segala Macam Merek, ukuran Flashdisk']);
    }
}

