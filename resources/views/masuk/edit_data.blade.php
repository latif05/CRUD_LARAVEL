@extends('layouts.template')
<!-- START FORM -->
@section('konten') 

<form action="{{ route('masuk.update', $masuk->id) }}" method='post'>
@csrf 
@method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href="/masuk" class="btn btn-secondary">kembali</a>
    <div class="mb-3 row">
        <label for="kode_masuk" class="col-sm-2 col-form-label">Kode</label>
        <div class="col-sm-10">
            <input type="text" name="kode_masuk" value="{{ $masuk->kode_masuk }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
            <select id="barang_id" name="barang_id" required>
                @foreach($barang as $barang)
                    <option value="{{ $barang->id }}" {{ $masuk->barang_id == $barang->id ? 'selected' : '' }}>{{ $barang->nama_barang }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="stock_masuk" class="col-sm-2 col-form-label">Stock Masuk</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='stock_masuk' value="{{ $masuk->stock_masuk }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name='tgl_masuk' value="{{ $masuk->tgl_masuk }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="tgl_masuk" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
</form>
<!-- AKHIR FORM -->
@endsection