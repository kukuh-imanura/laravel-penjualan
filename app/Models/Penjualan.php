<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'tgl_faktur',
        'no_faktur',
        'nama_konsumen',
        'kode_barang',
        'jumlah',
        'harga_satuan',
        'harga_total',
        'diskon'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');
    }
}
