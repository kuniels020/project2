<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Menu;
use App\Models\jenis;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::with('jenis')->get();
        $jenis = jenis::all();

        return view('menu.index', compact('jenis', 'menu'));
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
    public function store(StoreMenuRequest $request)
    {
        // dd($request);
        Menu::create($request->all());

        return redirect('menu')->with('success',   'Data Menu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
{
    $categories = Category::all();
    return view('menu.edit', compact('menu', 'categories'));
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
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu->update($request->all());
    
        return redirect()->route('menu.index')->with('success', 'Data Menu berhasil diupdate!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Menu $menu)
{
    $menu->delete();

    if ($request->expectsJson()) {
        return response()->json([], Response::HTTP_NO_CONTENT);
    }

    return redirect()->route('menu.index')->with('success', 'Data Menu berhasil dihapus!');
}

}
