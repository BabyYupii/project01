<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbkain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 
        schema::create('Kain',function(Blueprint $tb){
            $tb->increments('ID');
            $tb->string('Nama_Kain',100);
            $tb->varchar('Kategorii',100);
            $tb->integer('qty');
            $tb->varchar('Distributor',100);
            $tb->float('Harga_Jual');
            $tb->float('Harga_Beli');
            $tb->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        schema::dropIfExist('Kain');
    }
}
