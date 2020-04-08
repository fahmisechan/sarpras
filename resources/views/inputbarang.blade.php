@extends('layouts.sidebar')

@section('content')
<div class="container">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Input Barang</h6>
    </div>
    <form method="post" action="{{ route('barang.insert') }}">
     @csrf
     <div class="card-body">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Merek Barang</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="merek_barang">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Harga Barang</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="harga_barang" placeholder="Rp.">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Lokasi Barang</label>
        <div class="col-sm-10">
          <select name="lokasi_barang" class="form-control">
            <option value=""></option>
            @foreach($kelas as $a)
            <option value="{{$a->nama_kelas}}">{{$a->nama_kelas}}</option>
            @endforeach
          </select>
        </div>

      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Jumlah</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="qty">
        </div>
      </div>
      <div>
        <input type="submit" class="btn btn-primary" value="Simpan">
      </div>
    </form>
  </div>
</div>

</div>
@endsection
