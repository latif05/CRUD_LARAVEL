@extends('layouts.template')
<!-- START FORM -->
@section('konten') 

<form action="{{ route('barang.store') }}" method='post'>
@csrf 
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href="/barang" class="btn btn-secondary"> kembali</a>
    <div class="mb-3 row">
        <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="kode_barang">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_barang">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="kategori">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="kategori" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
</form>
<!-- AKHIR FORM -->
@endsection