<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';
    protected $fillable=['id', 'tanggal', 'total_harga', 'metode_pembayaran', 'keterangan'];

    public function DetailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}