<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model

{
    protected $table = 'pinjams';
    protected $fillable = ['pj','ruang_id','barang_id','jumlah','kondisi'];

    public function barangs()
    { 
        // return $this->belongsTo(Barang::class);
        return $this->belongsTo(Barang::class,'barang_id','id');
    }
    public function rooms()
    { 
        // return $this->belongsTo(Barang::class);
        return $this->belongsTo(room::class,'ruang_id','id');
    }
}
