<?php

namespace App\Http\Controllers;

use App\Models\masuk;
use App\Models\barang;
use Illuminate\Http\Request;

class masukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $masuk = masuk::all();
        return view('masuk.index', compact('masuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = barang::all();
        return view('masuk.tambah_data', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $r->validate([
            'barang_id' => 'required|exists:barangs,id'
        ]);
        masuk::create($r->all());
        return redirect()->route('masuk.index');
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
    public function edit(masuk $masuk)
    {
        $barang = barang::all();
        return view('masuk.edit_data', compact('masuk', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, masuk $masuk)
    {
        $r->validate([
            'barang_id' => 'required|exists:barangs,id'
        ]);
        $masuk->update($r->all());
        return redirect()->route('masuk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(masuk $masuk)
    {
        $masuk->delete();
        return redirect()->route('masuk.index');
    }
}
