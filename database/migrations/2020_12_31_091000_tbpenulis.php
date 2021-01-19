<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbpenulis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('Penulis', function(Blueprint $tb) {
            $tb->increments('Id_Penulis');
            $tb->string('Penulis',100);
            $tb->string('Nama_Buku',50);
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
        schema::dropIfExist('Penulis');
    }
}
