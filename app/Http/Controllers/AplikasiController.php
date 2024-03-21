<?php

namespace App\Http\Controllers;

use App\Models\aplikasi;
use App\Http\Requests\StoreaplikasiRequest;
use App\Http\Requests\UpdateaplikasiRequest;

class AplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('aplikasi.index'); 
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
    public function store(StoreaplikasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(aplikasi $aplikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(aplikasi $aplikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateaplikasiRequest $request, aplikasi $aplikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(aplikasi $aplikasi)
    {
        //
    }
}
