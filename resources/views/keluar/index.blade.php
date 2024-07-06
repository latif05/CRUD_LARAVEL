@extends('layouts.navbar')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gudang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <h1>Data Barang Keluar</h1>
  </head>
  <body class="bg-light">
    <main class="container">
        
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href="{{ route('keluar.create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-2">Kode</th>
                            <th class="col-md-2">Nama Barang</th>
                            <th class="col-md-2">Stock Keluar</th>
                            <th class="col-md-2">Tanggal Keluar</th>
                            <th class="col-md-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no=1 ?>
                      @foreach($keluar as $keluar)
                        <tr>
                            <td scope="row">{{ $no++ }}</td>
                            <td>{{ $keluar->kode_keluar }}</td>
                            <td>{{ $keluar->barang->nama_barang }}</td>
                            <td>{{ $keluar->stock_keluar }}</td>
                            <td>{{ $keluar->tgl_keluar }}</td>
                            <td>
                                <a href='/keluar/{{ $keluar->id }}/edit/' class="btn btn-warning btn-sm">Edit</a>
                                <form action="/keluar/{{ $keluar->id }}" class="d-inline" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
@endsection