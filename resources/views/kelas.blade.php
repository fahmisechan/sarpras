@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kelola Kelas</h6>
          </div>
          <div class="card-body">
            <a href="/kelas/create">+ Input Kelas</a>
    <table class="table table-bordered">
        <thead>
          <tr align="center">
            <th scope="col">No</th>
            <th scope="col">Nama Kelas</th>
            <th scope="col">Kapasitas Siswa</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach($kelas as $p)
          <tr>
          <th>{{$p->id}}</th>
            <td>{{ $p->nama_kelas}}</td>
            <td>{{ $p->kapasitas_siswa}}</td>
            <td>
            {{-- href="/tiket/edit/{{ $p->id }} --}}
            <a style="color: white;" href="/kelas/edit/{{ $p->id }}"><button class="btn btn-warning">Edit</button></a>
            <a href="/kelas/destroy/{{ $p->id }}" class="btn btn-danger btn-circle">
                <i class="fas fa-trash"></i>
            </a>
		</td>
          </tr>
          @endforeach
        </tbody>
      </table>
          </div>
    </div>
</div>
@endsection
