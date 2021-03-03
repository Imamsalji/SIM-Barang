<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model

{
    protected $table = 'pinjamans';
    protected $fillable = ['pj','ruang','barang','jumlah','kondisi'];
}
