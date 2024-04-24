<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Http\Requests\StoreAbsensiRequest;
use App\Http\Requests\UpdateAbsensiRequest;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $absensi = Absensi::all();
    return view('Absensi.index', compact('absensi'));
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Absensi.create');
    }
    
    public function store(StoreAbsensiRequest $request)
    {
        // // Validasi data
        // $request->validate([
        //     // Atur aturan validasi sesuai kebutuhan Anda
        // ]);
    
        // Simpan data absensi baru
        Absensi::create($request->all());
    
        return redirect()->route('Absensi.index')->with('success', 'Absensi berhasil ditambahkan.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAbsensiRequest $request, Absensi $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    
public function destroy(StoreAbsensiRequest $request, Absensi $absensi)
{
    $absensi->delete();

    if ($request->expectsJson()) {
        return response()->json([], Response::HTTP_NO_CONTENT);
    }

    return redirect()->route('Absensi.index')->with('success', 'Data Absensi berhasil dihapus!');
}
    }

