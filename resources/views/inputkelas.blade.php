@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input kelas</h6>
          </div>
          <form method="post" action="/kelas/store">
           @csrf
          <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Kelas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_kelas" placeholder="Nama Kelas">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kapasitas Siswa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kapasitas_siswa"  placeholder="Kapasitas Siswa">
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
