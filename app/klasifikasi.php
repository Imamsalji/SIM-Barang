<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class klasifikasi extends Model
{
    protected $fillable =['name','klasifikasi'];
    public function rooms()
    {
        return $this->hasMany(room::class);
    }
}
