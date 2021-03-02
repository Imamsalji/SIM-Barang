<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId("klasifikasi_id")->nullable();
            $table->integer("noruang");
            $table->string("nama_ruang");
            $table->foreignId("rayon_id")->nullable();
            $table->string("pjruangan");
            $table->integer("panjang");
            $table->integer("lebar");
            $table->integer("luas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
