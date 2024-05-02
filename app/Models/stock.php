<?php

namespace App\Models;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['menu_id', 'jumlah'];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}

    