<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.tambah_data');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $data = [
            'kode_barang' => $r->input('kode_barang'),
            'nama_barang' => $r->input('nama_barang'),
            'kategori' => $r->input('kategori')
        ];
        barang::create($data);
        return redirect()->route('barang.index');
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
    public function edit(barang $barang)
    {
        return view('barang.edit_data', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, barang $barang)
    {
        $data = [
            'kode_barang' => $r->input('kode_barang'),
            'nama_barang' => $r->input('nama_barang'),
            'kategori' => $r->input('kategori')
        ];
        $barang->update($data);
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
