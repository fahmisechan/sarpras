@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pilih kelas</h6>
          </div>
          <div class="card-body">
            <div class="row">
                @foreach($kelas as $p)
                <a href="/lokasi/cek/{{$p->id}}" style="text-decoration:none;">
                    <div class="col-sm-6" style="margin-top:10px;">
                        <div class="card">
                          <div class="card-body">
                          <h5 class="card-title">{{$p->nama_kelas}}</h5>
                            <a href="#" class="btn btn-primary">Cek</a>
                          </div>
                        </div>
                      </div>
                </a>
                @endforeach

           <!-- <a href="/lokasi/bahasainggris" style="text-decoration:none;">
                <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                      <h5 class="card-title">Bahasa Inggris</h5>
                        <a href="#" class="btn btn-primary">Cek</a>
                      </div>
                    </div>
                  </div>
            </a>

            <a href="/lokasi/bahasaindonesia" style="text-decoration:none;">
                <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                      <h5 class="card-title">Bahasa Indonesia</h5>
                        <a href="/lokasi/bahasaindonesia" class="btn btn-primary">Cek</a>
                      </div>
                    </div>
                  </div>
            </a>
            <br>
            <a href="/lokasi/matematika" style="text-decoration:none;">
                <div class="col-sm-6" style="margin-top:20px;">
                    <div class="card">
                      <div class="card-body">
                      <h5 class="card-title">Matematika</h5>
                        <a href="/lokasi/matematika" class="btn btn-primary">Cek</a>
                      </div>
                    </div>
                  </div>
            </a>
            <a href="/lokasi/ruangtu" style="text-decoration:none;">
                <div class="col-sm-6" style="margin-top:20px;">
                    <div class="card">
                      <div class="card-body">
                      <h5 class="card-title">Ruang TU</h5>
                        <a href="/lokasi/ruangtu" class="btn btn-primary">Cek</a>
                      </div>
                    </div>
                  </div>
            </a>
            -->

        </div>
          </div>
    </div>

</div>
@endsection
