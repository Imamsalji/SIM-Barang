<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->foreignId('toko_id')->after('satuan_id');
            $table->foreignId('dana_id')->after('toko_id');
            $table->foreignId('room_id')->after('dana_id');
            $table->string('spek')->after('room_id');
            $table->string('merk')->after('spek');
            $table->string('no_seri')->after('merk');
            $table->string('tgl_masuk')->after('no_seri');
            $table->string('no_faktur')->after('tgl_masuk');
            $table->string('harga')->after('no_faktur');
            $table->dropColumn('kondisi_baik');
            $table->dropColumn('kondisi_rusak');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->dropColumn('toko_id');
            $table->dropColumn('dana_id');
            $table->dropColumn('room_id');
            $table->dropColumn('spek');
            $table->dropColumn('merk');
            $table->dropColumn('no_seri');
            $table->dropColumn('tgl_masuk');
            $table->dropColumn('no_faktur');
            $table->dropColumn('harga');
            
        });
    }
}
