<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use App\Http\Requests\StoretransaksiRequest;
use App\Http\Requests\UpdatetransaksiRequest;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretransaksiRequest $request)
    {
        try{
            $last_id = Transaksi::where('tanggal',date('Y.m.d'))->orderBy('tanggal','desc')->select('id')->select('id')->frist();
            $notrans = $last_id = null ? date('ymd').'001' :date('ymd').sprintf('%04d',substr($last_id,8,4));
       
            $inserTransaksi = Transaksi::create([
                'id' =>$notrans,
                'tanggal' => date('Y-m-d'),
                'total_harga' => $request->total,
                'metode_pembayaran'=>'cash',
                'keterangan' => ''
            ]);

            }catch(Exception | QueryException | PDOException $e){
                return $e;
                DB::rollback();
            }
            return $insertTransaksi;

    }

    /**
     * Display the specified resource.
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetransaksiRequest $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transaksi $transaksi)
    {
        //
    }
}
