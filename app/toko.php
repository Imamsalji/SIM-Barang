<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class toko extends Model
{
    protected $fillable =['name','alamat','notelp'];
    public function inputs()
    {
        return $this->hasMany(input::class);
    }
}