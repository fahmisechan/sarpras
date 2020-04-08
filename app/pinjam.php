<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pinjam extends Model
{
    protected $table = "pinjams";

    protected $fillable = ['id_barang','nama_barang','merek_barang','nama_peminjam','nis_peminjam','qty'];
}
