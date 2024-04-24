<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Jenis;
use App\Models\category;
use App\Http\Requests\StoreJenisRequest;
use App\Http\Requests\UpdateJenisRequest;
use Iluminate\Support\Facades\DB;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis = jenis::with(['categori'])->latest()->get();
        $categori = Category::pluck('nama','id');

        return view(('jenis.index'), compact('jenis', 'categori'));
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
    public function store(StoreJenisRequest $request)
    {
        // dd($request);
        Jenis::create($request->all());

        return redirect('jenis')->with('success',   'Data Jenis berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jenis)
{
    // Remove the following line, as it's not necessary
    // $jenis = Jenis::find($jenis);
    
    // Load all Jenis data for the view
    $jenisData = Jenis::all();
    
    return view('jenis.edit', compact('jenis', 'jenisData'));
}


    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateMenuRequest $request, Menu $menu)
    // {
    //     try {
    //         DB::beginTransaction();
    //         $validate = $request->validated();
    //         $menu->update($validate);
    //         DB::commit();
    //         return redirect('menu')->with('succes', 'data berhasil di ubah');
    //     } catch (\Exception $e) {
    //         return redirect('menu')->withErrors(['message' => 'terjadi kesalahan']);
    //     }
    // }
    public function update(UpdateJenisRequest $request, Jenis $jeni)
    {
        $jeni->update($request->all());
    
        return redirect()->route('jenis.index')->with('success', 'Data Jenis berhasil diupdate!');
    }



    /**
     * Remove the specified resource from storage.
     */
   
     public function destroy(Request $request, Jenis $jeni)
     {
        $jeni->delete();

    if ($request->expectsJson()) {
        return response()->json([], Response::HTTP_NO_CONTENT);
    }

    return redirect()->route('jenis.index')->with('success', 'Data jenis berhasil dihapus!');
}
     

}