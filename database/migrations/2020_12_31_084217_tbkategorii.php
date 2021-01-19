<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbkategorii extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        schema::create('Kategorii', function( Blueprint $tb) {
            $tb->increments('Id_Kat');
            $tb->string('Kategori',150);
            $tb->string('Keterangan',150);
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
        schema::dropIfExist('Kategorii');
    }
}
