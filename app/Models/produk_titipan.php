<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk_titipan extends Model
{
    protected $table = 'produk_titipans';
    protected $fillable = ['nama_produk', 'nama_supplier', 'harga_beli','harga_jual','stock','keterangan'];
}
