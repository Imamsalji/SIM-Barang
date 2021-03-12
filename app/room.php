<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $fillable =['klasifikasi_id','tanah_id','noruang','nama_ruang','rayon_id','pjruangan','panjang','lebar','luas','regis','dana_id','kondisi_bangunan','bertingkat','beton'];
    public function rayon()
    {
        return $this->belongsTo(rayon::class);
    }
    public function klasifikasi()
    {
        return $this->belongsTo(klasifikasi::class);
    }
    public function tanah()
    {
        return $this->belongsTo(Tanah::class);
    }
    public function dana()
    {
        return $this->belongsTo(dana::class);
    }
    public function barangs()
    {
        return $this->hasMany(barang::class);
    }
    
}
