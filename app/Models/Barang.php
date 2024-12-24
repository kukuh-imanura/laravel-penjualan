<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'nama_barang',
        'harga_jual',
        'harga_beli',
        'satuan',
        'kategori',
        'stok'
    ];

    protected $primaryKey = 'kode_barang';
}
