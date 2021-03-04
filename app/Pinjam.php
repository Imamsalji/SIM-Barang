<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model

{
    protected $table = 'pinjams';
    protected $fillable = ['pj','ruang','barang_id','jumlah','kondisi'];

    public function barangs()
    { 
        // return $this->belongsTo(Barang::class);
        return $this->belongsTo(Barang::class,'barang_id','id');
    }
}
