<?php

namespace App\Models;
use App\Models\stock;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $fillable = ['nama', 'harga', 'image', 'deskripsi', 'jenis_id', 'jumlah_pesanan'];

    public function jenis()
    {
        return $this->belongsTO(Jenis::class, 'jenis_id');
    }

    public function stock()
    {
        return $this->hasMany(Stock::class, 'menu_id');
    }
}
