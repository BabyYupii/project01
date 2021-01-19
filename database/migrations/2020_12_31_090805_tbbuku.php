<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbbuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('Buku',function(Blueprint $tb){
            $tb->increments('Id_Buku');
            $tb->string('Nama_Buku',50);
            $tb->string('Penulis',50);
            $tb->string('Penerbit',50);
            $tb->date('Terbit');
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
        schema::dropIfExist('Buku');
    }
}
