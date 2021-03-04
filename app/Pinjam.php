<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model

{
    protected $table = 'pinjams';
    protected $fillable = ['pj','ruang','barang','jumlah','kondisi'];
}
