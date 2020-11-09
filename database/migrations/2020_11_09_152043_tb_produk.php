<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //bagian restore data
        schema::create('produks',function(blueprint $tb){
            $tb->increments('ID');
            $tb->string('Nama',20);
            $tb->integer('ID Kategori');
            $tb->float('Harga_Beli');
            $tb->float('Harga_Jual');
            $tb->timestamp();
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
    }
}
