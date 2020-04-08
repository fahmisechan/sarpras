<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    protected $table = 'kerusakan';
    protected $fillable = ['id','nama_peminjam','nama_barang','kerusakan','lokasi_barang','tanggal','jumlah'];
}
