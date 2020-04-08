@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Barang</h6>
          </div>
          <form method="post" action="/barang/update/{{ $barang->id }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
          <div class="card-body">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control"  value=" {{ $barang->nama_barang }}">
            </div>
            <div class="form-group">
                <label>Merek Barang</label>
                <input type="text" name="merek_barang" class="form-control"  value=" {{ $barang->merek_barang }}">
            </div>
            <div class="form-group">
                <label>Harga Barang</label>
                <input type="text" name="harga_barang" class="form-control" placeholder="Nama barang .." value=" {{ $barang->harga_barang }}">
            </div>
            <div class="form-group">
                <label>Lokasi Barang</label>
                <select name="lokasi_barang" class="form-control">
                    <option value=""></option>
                    @foreach($kelas as $a)
                    <option value="{{$a->nama_kelas}}">{{$a->nama_kelas}}</option>
                    @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="text" name="qty" class="form-control" placeholder="Nama barang .." value=" {{ $barang->qty }}">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>
        </form>
          </div>
    </div>
</div>
@endsection
