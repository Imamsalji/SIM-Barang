<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjamans';
    protected $fillable = ['pj','ruang','barang_id','jumlah'];

    public function habis()
    { 
        // return $this->belongsTo(Barang::class);
        return $this->belongsTo(Habis::class,'barang_id','id');
    }
}
