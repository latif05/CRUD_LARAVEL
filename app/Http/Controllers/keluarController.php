<?php

namespace App\Http\Controllers;

use App\Models\keluar;
use App\Models\barang;
use Illuminate\Http\Request;

class keluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keluar = keluar::all();
        return view('keluar.index', compact('keluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = barang::all();
        return view('keluar.tambah_data', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $r->validate([
            'barang_id' => 'required|exists:barangs,id'
        ]);
        keluar::create($r->all());
        return redirect()->route('keluar.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(keluar $keluar)
    {
        $barang = barang::all();
        return view('keluar.edit_data', compact('keluar', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, keluar $keluar)
    {
        $r->validate([
            'barang_id' => 'required|exists:barangs,id'
        ]);
        $keluar->update($r->all());
        return redirect()->route('keluar.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(keluar $keluar)
    {
        $keluar->delete();
        return redirect()->route('keluar.index');
    }
}
