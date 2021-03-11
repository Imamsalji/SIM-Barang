<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rayon extends Model
{
    protected $fillable =['name','pjrayon'];
    public function rooms()
    {
        return $this->hasMany(room::class);
    }
}
