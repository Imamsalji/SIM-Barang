<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class toko extends Model
{
    protected $fillable =['name','alamat','notelp','pimpinan'];
    public function inputs()
    {
        return $this->hasMany(input::class);
    }
    public function barangs()
    {
        return $this->hasMany(barang::class);
    }
}