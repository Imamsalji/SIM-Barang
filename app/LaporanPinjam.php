<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanPinjam extends Model
{
    protected $table = 'laporanpinjams';
    protected $fillable = ['pj','ruang','barang','jumlah','kondisi','created_at'];

    public function laporan()
    { 
        // return $this->belongsTo(Barang::class);
        return $this->belongsTo(Barang::class,'barang','id');
    }
}
