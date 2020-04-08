@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pilih Barang</h6>
      </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                  <tr align="center">
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Merk Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Lokasi Barang</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($barang as $p)
                  <tr>
                  <th>{{$p->id}}</th>
                    <td>{{ $p->nama_barang}}</td>
                    <td>{{ $p->merek_barang}}</td>
                    <td>{{$p->harga_barang}}</td>
                    <td>{{ $p->lokasi_barang}}</td>
                    <td>{{$p->qty}}</td>
                    <td>
                    {{-- href="/tiket/edit/{{ $p->id }} --}}
                    <a style="color: white;" href="pinjam/pilih/{{ $p->id }}"><button class="btn btn-warning">Pilih</button></a>
                </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
    </div>
    </div>
</div>
@endsection
