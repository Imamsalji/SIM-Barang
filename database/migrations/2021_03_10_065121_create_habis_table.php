<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang');
            $table->foreignId('kategori_id')->nullable();
            $table->string('nama_barang');
            $table->foreignId('satuan_id')->nullable();
            $table->foreignId('toko_id')->nullable();
            $table->foreignId('dana_id')->nullable();
            $table->foreignId('room_id')->nullable();
            $table->string('spek');
            $table->string('merk');
            $table->string('no_seri');
            $table->string('tgl_masuk');
            $table->string('no_faktur');
            $table->string('harga');
            $table->string('total');
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
        Schema::dropIfExists('habis');
    }
}
