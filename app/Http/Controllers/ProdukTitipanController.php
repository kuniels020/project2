<?php

namespace App\Http\Controllers;

use App\Models\produk_titipan;
use App\Http\Requests\Storeproduk_titipanRequest;
use App\Http\Requests\Updateproduk_titipanRequest;

class ProdukTitipanController extends Controller
{
        
    
    public function index()
    {
        
        $data['produk_titipan'] = produk_titipan::get();
        return view('produk_titipan.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeproduk_titipanRequest $request)
    {
        produk_titipan::create($request->all());
            return redirect('produk_titipan');
    }

    /**
     * Display the specified resource.
     */
    public function show(produk_titipan $produk_titipan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk = ProdukTitipan::findOrFail($id);
        return view('produk_titipan.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'nama_supplier' => 'required',
            // Validasi untuk kolom lainnya sesuai kebutuhan
        ]);

        $produk_titipans = ProdukTitipan::findOrFail($id);
        $produk_titipans->nama_produk = $request->nama_produk;
        $produk_titipans->nama_supplier = $request->nama_supplier;
        // Update kolom lainnya sesuai kebutuhan
        $produk_titipans->save();

        return redirect()->route('produk_titipan.index')
                         ->with('success', 'Produk berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $produk_titipans = produk_titipan::findOrFail($id);
    $produk_titipans->delete();

    return redirect()->route('produk_titipan.index')
                     ->with('success', 'Produk berhasil dihapus.');
}

}
