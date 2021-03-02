<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable =['kode_barang','kategori_id','nama_barang','satuan_id','kondisi_baik','kondisi_rusak','total'];
    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
    public function satuan()
    {
        return $this->belongsTo(satuan::class);
    }
}
