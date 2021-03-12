<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->string('regis')->after('luas');
            $table->foreignId('tanah_id')->after('klasifikasi_id');
            $table->foreignId('sumber_dana')->after('regis');
            $table->string('kondisi_bangunan')->after('sumber_dana');
            $table->string('bertingkat')->after('kondisi_bangunan');
            $table->string('beton')->after('bertingkat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropColumn('regis');
            $table->dropColumn('sumber_dana');
            $table->dropColumn('kondisi_bangunan');
            $table->dropColumn('bertingkat');
            $table->dropColumn('beton');
        });
    }
}
