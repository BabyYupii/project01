<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbkategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        schema::create('kategori', function(Blueprint $tb) {
            $tb->id();
            $tb->string('Kategori',200);
            $tb->string('Keterangan',255);
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
        
       
        schema::dropIfExists('Kategori');
    }
}
