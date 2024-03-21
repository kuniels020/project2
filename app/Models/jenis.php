<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    use HasFactory;

    protected $table = 'jenis';
    protected $guarded = ['id'];

    public function menu(){
        return $this->hasMany(Menu::class,'jenis_id','id');
    }
   public function categori(){
    return $this->belongsTo(category::class);
   } 
}


