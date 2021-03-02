<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $fillable =['klasifikasi_id','noruang','nama_ruang','rayon_id','pjruangan','panjang','lebar','luas'];
    public function rayon()
    {
        return $this->belongsTo(rayon::class);
    }
    public function klasifikasi()
    {
        return $this->belongsTo(klasifikasi::class);
    }
}
