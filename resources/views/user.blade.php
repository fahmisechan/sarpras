@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List User</h6>
          </div>
          <div class="card-body">
          <a href="/user/create">+ Tambah User</a>
    <table class="table table-bordered">
        <thead>
          <tr align="center">
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nis</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach($user as $p)
          <tr>
          <th>{{$p->id}}</th>
            <td>{{ $p->name}}</td>
            <td>{{ $p->nis}}</td>
            <td>{{$p->email}}</td>
            <td>{{ $p->role}}</td>
            <td>
            {{-- href="/tiket/edit/{{ $p->id }} --}}
			<a style="color: white;" href="/user/edit/{{$p->id}}"><button class="btn btn-warning">Edit</button></a>
			<a style="color: white;" href="/user/destroy/{{$p->id}}"><button class="btn btn-danger">Hapus</button></a>
		</td>
          </tr>
          @endforeach
        </tbody>
      </table>
          </div>
        </div>
    </div>
</div>
@endsection
