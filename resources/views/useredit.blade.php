@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
          </div>
            <form method="post" action="/user/update/{{ $user->id }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
          <div class="card-body">
            <div class="form-group">
                <label>Nama User</label>
                <input type="text" name="name" class="form-control"  value=" {{ $user->name }}">
            </div>
            <div class="form-group">
                <label>Nis</label>
                <input type="text" name="nis" class="form-control"  value=" {{ $user->nis }}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Nama barang .." value=" {{ $user->email }}">
            </div>
            <div class="form-group">
                <label>Role</label>
                <select name="role" class="form-control" >
                    @if($user->role == 'admin')
                    <option value="admin" selected>Admin</option>
                    <option value="pelanggan" >Siswa Osis</option>
                    @elseif($user->role =='pelanggan')
                    <option value="admin" >Admin</option>
                    <option value="pelanggan" selected>Siswa Osis</option>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
            </div>
        </form>
          </div>
    </div>
</div>
@endsection
