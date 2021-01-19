<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Distributor;

class Distributorseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Distributor::create(
            ['Distributor'=>'PT Intan Permata Sakti',
            'Alamat_Distributor'=>'Jalan Intan Sakti BLok AA']);
        Distributor::create(
            ['Distributor'=>'PT Jaya Kusuka',
            'Alamat_Distributor'=>'Jalan Kunti 1234']);
        Distributor::create(
            ['Distributor'=>'PT Buana Mas',
            'Alamat_Distributor'=>'Jalan Buana Raya xx']);
    }
}
