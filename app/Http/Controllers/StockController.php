<?php

namespace App\Http\Controllers;

use App\Models\stock;
use App\Models\Menu;
use App\Http\Requests\StorestockRequest;
use App\Http\Requests\UpdatestockRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class stockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $stock = Stock::with('menu')->get();
        $menu = Menu::all();

        return view('stock.index', compact('stock', 'menu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stock.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestockRequest $request)
{
    $validatedData = $request->validated();
    $stock = Stock::create($validatedData);

    // Mengarahkan kembali ke halaman index dengan pesan sukses
    return redirect()->route('stock.index')->with('success', 'Data Stock berhasil ditambahkan!');
}


    /**
     * Display the specified resource.
     */
    
     public function showModal()
     {
         $menu = Menu::all(); // Ambil data menu dari database
         return view('path.to.modalfromstock', ['menu' => $menu]); // Kirim data ke tampilan
     }
     
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stock $stock)
    {
        return view('stock.edit', compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestockRequest $request, stock $stock)
    {
        $stock->update($request->all());
    
        return redirect()->route('stock.index')->with('success', 'Data Stock berhasil diupdate!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, stock $stock)
    {
        $stock->delete();

        if ($request->expectsJson()) {
            return response()->json([], Response::HTTP_NO_CONTENT);
        }

        return redirect()->route('stock.index')->with('success', 'Data Stok berhasil dihapus!');
    }
}
