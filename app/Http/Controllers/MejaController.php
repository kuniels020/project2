<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Http\Requests\StoreMejaRequest;
use App\Http\Requests\UpdateMejaRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $mejas = Meja::all();

        if ($request->expectsJson()) {
            return response()->json(['mejas' => $mejas], Response::HTTP_OK);
        }

        return view('meja.index', compact('mejas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meja.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMejaRequest $request)
    {
        $meja = Meja::create($request->validated());

        if ($request->expectsJson()) {
            return response()->json(['meja' => $meja], Response::HTTP_CREATED);
        }

        return redirect()->route('meja.index')->with('success', 'Data Meja berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Meja $meja)
    {
        if ($request->expectsJson()) {
            return response()->json(['meja' => $meja], Response::HTTP_OK);
        }

        return view('meja.show', compact('meja'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meja $meja)
    {
        return view('meja.edit', compact('meja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMejaRequest $request, Meja $meja)
    {
        $meja->update($request->all());

        return redirect()->route('meja.index')->with('success', 'Data Category berhasil diupdate!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Meja $meja)
    {
        $meja->delete();

        if ($request->expectsJson()) {
            return response()->json([], Response::HTTP_NO_CONTENT);
        }

        return redirect()->route('meja.index')->with('success', 'Data Meja berhasil dihapus!');
    }
}
