@extends('layouts.template')
<!-- START FORM -->
@section('konten') 

<form action="{{ route('masuk.store') }}" method='post'>
@csrf 
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href="/masuk" class="btn btn-secondary"> kembali</a>
    <div class="mb-3 row">
        <label for="kode_masuk" class="col-sm-2 col-form-label">Kode</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="kode_masuk">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="barang_id" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
            <select id="barang_id" name="barang_id" required>
                @foreach ($barang as $barang)
                    <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="stock_masuk" class="col-sm-2 col-form-label">Stock Masuk</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="stock_masuk">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
        <div class="col-sm-10">
            <input type="date" class="form_control"name="tgl_masuk">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Stock Masuk" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
</form>
<!-- AKHIR FORM -->
@endsection