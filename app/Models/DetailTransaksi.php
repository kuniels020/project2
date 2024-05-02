<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = 'detail_transaksis';
    protected $fillable = ['transaksi_id', 'menu_id', 'jumlah', 'subtotal', ];

    protected $searchableFields = ['*'];

    public function detailtransaksi(){
        return $this->hasMany(DetailTransaksi::class,'transaksi_id');
    }

    public function menu()
    {
        return $this->hasOne(menu::class,'id','menu_id');
    }
}