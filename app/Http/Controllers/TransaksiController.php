<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use App\Http\Requests\TransaksiRequest;
use Exception;
use Illuminate\Database\QueryException;
use PDOException;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Tambahkan kode untuk menampilkan daftar transaksi
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tambahkan kode untuk menampilkan form pembuatan transaksi baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TransaksiRequest $request)
    {


        
        try {

            DB::beginTransaction();


            $today = now()->format('Ymd');
            $last_custom_id = transaksi::where('tanggal', $today)->orderBy('id', 'desc')->first();

            if ($last_custom_id) {
                $last_id = substr($last_custom_id->id, -4);
                $notrans = $today . str_pad((intval($last_id) + 1), 4, '0', STR_PAD_LEFT);
            } else {
                $notrans = $today . '0001';
            }

            $insertTransaksi = transaksi::create([
                'id' => $notrans,
                'tanggal' => date('Y-m-d'),
                'total_harga' => $request->total,
                'metode_pembayaran' => 'cash',
                'keterangan' => 'uji coba',
            ]);


            if (!$insertTransaksi) return 'error';

            // input detail transaksi
            foreach ($request->orderedList as $detail) {
                DetailTransaksi::create([
                    'transaksi_id' => $notrans,
                    'menu_id' => $detail['menu_id'],
                    'jumlah' => $detail['qty'],
                    'subtotal' => $detail['harga'] * $detail['qty'],

                ]);
            }

            DB::commit();
            return response()->json(['status' => true, 'message' => "Pemesanan Berhasil", 'notrans' => $insertTransaksi->id]);
        } catch (Exception | QueryException | PDOException $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage(), 'error' => $e->getMessage()]);

            DB::rollback();
        };
    }
    
    

    public function faktur($nofaktur)
    {
        // dd($nofaktur);
        try {
            $transaksi = transaksi::findOrFail($nofaktur);


            return view('cetak.faktur', compact('transaksi'));
        } catch (Exception | QueryException | PDOException $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
  }


    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        // Tambahkan kode untuk menampilkan detail transaksi
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        // Tambahkan kode untuk menampilkan form edit transaksi
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransaksiRequest $request, Transaksi $transaksi)
    {
        // Tambahkan kode untuk mengupdate transaksi
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        // Tambahkan kode untuk menghapus transaksi
    }
}