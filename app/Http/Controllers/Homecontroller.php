<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemesanan;
use App\Models\DetailTransaksi;
use App\Models\Stock;
use Illuminate\Support\Facades\DB; // Fixed the case for the support namespace

class HomeController extends Controller
{
    public function index()
{
   
    return view('template.home');
}

}

