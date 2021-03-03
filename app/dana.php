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
}
