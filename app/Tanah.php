<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanah extends Model
{
    protected $fillable =['kode_tanah','register','luas','thn_pengadaan','status_tanah','no_sertifikat','tgl_sertifikat','penggunaan','asal_usul','harga'];
    public function rooms()
    {
        return $this->hasMany(room::class);
    }
}
