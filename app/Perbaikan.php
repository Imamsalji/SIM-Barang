<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    protected $table = "perbaikan";
 
    protected $fillable = ['nama','file','ket'];
}
