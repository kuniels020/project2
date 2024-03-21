<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $fillable = ['nama', 'harga', 'image', 'deskripsi','jenis_id' ];

    public function jenis(){
    return $this->belongsTO(jenis::class,'jenis_id');
}
}

