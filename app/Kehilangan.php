<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehilangan extends Model
{
    protected $table = 'kehilangan';

    protected $fillable = ['id','nama_peminjam','nama_barang','tanggal','jumlah'];
}
