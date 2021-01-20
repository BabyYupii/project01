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
            ['Kategoris'=>'keyboard',
            'Keterangan'=>'Segala macam keyboard PC, Laptop, TV']);
            Kategori::create(
            ['Kategoris'=>'Mouse',
            'Keterangan'=>'Segala Macam Mouse Wire maupun Wireless']);
            Kategori::create(
            ['Kategoris'=>'Flashdisk',
            'Keterangan'=>'Segala Macam Merek, ukuran Flashdisk']);
    }
}

