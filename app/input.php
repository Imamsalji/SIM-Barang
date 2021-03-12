<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class input extends Model
{
    protected $fillable =['name','jenis_masuk','nama_pemberi','dana_id','toko_id','jumlah','tgl_faktur','nofaktur'];
    public function dana()
    {
        return $this->belongsTo(dana::class);
    }
    public function toko()
    {
        return $this->belongsTo(toko::class);
    }
    public function barang()
    {
        return $this->belongsTo(barang::class,'name','id');
    }
}
