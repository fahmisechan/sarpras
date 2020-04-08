@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Barang Yang Sedang Dipinjam</h6>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
                <thead>
                  <tr align="center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Merek Barang</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Nis Peminjam</th>
                    <th scope="col">Quantity</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($pinjam as $p)
                  <tr>
                  <th>{{$p->id}}</th>
                    <td>{{ $p->nama_barang}}</td>
                    <td>{{ $p->merek_barang}}</td>
                    <td>{{$p->nama_peminjam}}</td>
                    <td>{{$p->nis_peminjam}}</td>
                    <td>{{ $p->qty}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
    </div>
</div>
@endsection
