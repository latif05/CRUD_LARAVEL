<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\masuk;
use App\Models\keluar;

class LaporanController extends Controller
{
    public function index()
    {
        // Ambil data barang
        $barang = barang::all();

        // Hitung total barang masuk dan keluar untuk setiap barang
        $dataBarang = $barang->map(function ($item) {
            $totalMasuk = masuk::where('barang_id', $item->id)->sum('stock_masuk');
            $totalKeluar = keluar::where('barang_id', $item->id)->sum('stock_keluar');
            $sisa = $totalMasuk - $totalKeluar;

            return [
                'id' => $item->id,
                'nama_barang' => $item->nama_barang,
                'total_masuk' => $totalMasuk,
                'total_keluar' => $totalKeluar,
                'sisa' => $sisa,
            ];
        });

        return view('laporan.index', compact('dataBarang'));
    }
}