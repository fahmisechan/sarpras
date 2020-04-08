@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pilih Barang</h6>
      </div>
        <div class="card-body">
            <form method="post" action="/pinjam/input">
                {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control"  value=" {{ $barang->nama_barang }}" readonly>
                </div>
                <div class="form-group">
                    <label>id barang</label>
                    <input type="text" name="id_barang" class="form-control"  value=" {{ $barang->id }}" readonly>
                </div>
                <div class="form-group">
                <label>Nama Peminjam</label>
                <input type="text" name="nama_peminjam" class="form-control"  value=" {{ Auth::user()->name }}" readonly>
                </div>
                <div class="form-group">
                <label>Nis Peminjam</label>
                <input type="text" name="nis_peminjam" class="form-control"  value=" {{ Auth::user()->nis }}" readonly>
                </div>
                <div class="form-group">
                    <label>Merek Barang</label>
                    <input type="text" name="merek_barang" class="form-control"  value=" {{ $barang->merek_barang }}" readonly>
                </div>
                <div class="form-group">
                    <label>Harga Barang</label>
                    <input type="text" name="harga_barang" class="form-control" placeholder="Nama barang .." value=" {{ $barang->harga_barang }}" readonly>
                </div>
                <div class="form-group">
                    <label>Lokasi Barang</label>
                    <input type="text" name="lokasi_barang" class="form-control" placeholder="Nama barang .." value=" {{ $barang->lokasi_barang }}" readonly>
                </div>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" name="qty" class="form-control" placeholder="Jumlah Barang..">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
