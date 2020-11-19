<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\product;

class tugas2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            product::create(
            ['Kategori'=>'keyboard',
            'Keterangan'=>'Segala macam keyboard PC, Laptop, TV']);
            product::create(
            ['Kategori'=>'Mouse',
            'Keterangan'=>'Segala Macam Mouse Wire maupun Wireless']);
            product::create(
            ['Kategori'=>'Flashdisk',
            'Keterangan'=>'Segala Macam Merek, ukuran Flashdisk']);
    }
}

