<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jenis_masuk');
            $table->string('nama_pemberi');
            $table->foreignId('dana_id')->nullable();
            $table->foreignId('toko_id')->nullable();
            $table->string('tgl_faktur');
            $table->string('nofaktur');
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
        Schema::dropIfExists('inputs');
    }
}
