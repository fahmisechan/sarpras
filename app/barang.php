<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = "barangs";

    protected $fillable = ['nama_barang', 'merek_barang', 'harga_barang','lokasi_barang','qty'];
}
