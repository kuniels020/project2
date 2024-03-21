<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categori';  
    protected $fillable = ['nama']; 

    public function jenis(){
        return $this->hasMany(jenis::class,'jenis_id','id');
  
}
}