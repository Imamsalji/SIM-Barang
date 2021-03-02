<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rayon extends Model
{
    protected $fillable =['name'];
    public function rooms()
    {
        return $this->hasMany(room::class);
    }
}
