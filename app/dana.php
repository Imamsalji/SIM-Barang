<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dana extends Model
{
    protected $fillable =['pemberi'];
    public function inputs()
    {
        return $this->hasMany(input::class);
    }
    public function rooms()
    {
        return $this->hasMany(room::class);
    }
    public function barangs()
    {
        return $this->hasMany(barang::class);
    }
}
