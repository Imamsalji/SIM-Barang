<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $fillable =['kode_barang','kategori_id','nama_barang','satuan_id','toko_id','dana_id','room_id','spek','merk','no_seri','tgl_masuk','no_faktur','harga','total'];
    // relasi nya geys ini geys @imam Ganteng
    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }
    public function satuan()
    {
        return $this->belongsTo(satuan::class);
    }
    public function toko()
    {
        return $this->belongsTo(toko::class);
    }
    public function dana()
    {
        return $this->belongsTo(dana::class);
    }
    public function room()
    {
        return $this->belongsTo(room::class);
    }

    //ini juga relasi nya tapi bukan gw yang bikin @imam Ganteng
    public function barangs()
    {
        return $this->hasMany(Pinjam::class);
    }
    public function laporan()
    {
        return $this->hasMany(LaporanPinjam::class);
    }
    public function input()
    {
        return $this->hasMany(input::class);
    }

}
