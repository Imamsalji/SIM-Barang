<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanahs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tanah');
            $table->string('register');
            $table->string('luas');
            $table->string('thn_pengadaan');
            $table->string('status_tanah');
            $table->string('no_sertifikat');
            $table->string('tgl_sertifikat');
            $table->string('penggunaan');
            $table->string('asal_usul');
            $table->string('harga');
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
        Schema::dropIfExists('tanahs');
    }
}
