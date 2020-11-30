<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbproduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //bagian restore data
        schema::create('produks',function(Blueprint $tb){
            $tb->increments('ID');
            $tb->string('Nama',200);
            $tb->integer('ID_KATEGORI');
            $tb->integer('qty');
            $tb->float('HARGA_BELI');
            $tb->float('HARGA_JUAL');
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
        //bagian drop data
        schema::dropIfExist('produks');
    }
}
