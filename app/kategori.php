<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable =['name'];
    public function Barangs()
    {
        return $this->hasMany(Barang::class);
    }
}
