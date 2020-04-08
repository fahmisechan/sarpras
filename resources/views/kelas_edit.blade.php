@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Barang</h6>
          </div>
          <form method="post" action="/kelas/update/{{ $kelas->id }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
          <div class="card-body">
            <div class="form-group">
                <label>Nama Kelas</label>
                <input type="text" name="nama_kelas" class="form-control"  value=" {{ $kelas->nama_kelas }}">
            </div>
            <div class="form-group">
                <label>Kapasitas Siswa</label>
                <input type="text" name="kapasitas_siswa" class="form-control"  value=" {{ $kelas->kapasitas_siswa }}">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>
        </form>
          </div>
    </div>
</div>
@endsection
