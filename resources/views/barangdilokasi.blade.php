@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Barang di Ruangan</h6>
          </div>
          <div class="card-body">
    <table class="table table-bordered">
        <thead>
          <tr align="center">
            <th scope="col">Nama Kelas</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Merek Barang</th>
            <th scope="col">Harga Barang</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              @foreach($kelas as $kelas)
            <td>{{ $kelas->nama_kelas}}</td>
            <td>{{ $kelas->nama_barang}}</td>
            <td>{{ $kelas->merek_barang}}</td>
            <td>{{ $kelas->harga_barang}}</td>
            <td>{{ $kelas->qty}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
          </div>
    </div>
</div>
@endsection
