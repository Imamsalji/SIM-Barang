<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    protected $fillable = ['nama_barang','ruang_asal','ruang_tujuan'];
}
