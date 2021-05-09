<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjamans';
    protected $fillable = ['pj','ruang_id','barang_id','jumlah'];

    public function habis()
    { 
        // return $this->belongsTo(Barang::class);
        return $this->belongsTo(Habis::class,'barang_id','id');
    }
    public function rooms()
    { 
        // return $this->belongsTo(Barang::class);
        return $this->belongsTo(room::class,'ruang_id','id');
    }
}
