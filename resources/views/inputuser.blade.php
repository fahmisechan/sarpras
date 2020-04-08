@extends('layouts.sidebar')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Input User</h6>
          </div>
          <form method="post" action="/user/store">
           @csrf
          <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="Nama..">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nis"  placeholder="Nis">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="email"  placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        <select name="role" class="form-control">
                            <option value="admin">Admin</option>
                            <option value="pelanggan">Siswa</option>
                        </select>
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
