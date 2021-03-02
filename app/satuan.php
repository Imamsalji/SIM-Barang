<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class satuan extends Model
{
    protected $fillable =['name','jumlah'];
    public function Barangs()
    {
        return $this->hasMany(Barang::class);
    }
}
