@extends('layout/aplikasi')
@section('konten')

<a href='/sesi' class="btn btn-secondary " >mbalik</a>
<h1 style="text-align: center">Tambah akun</h1>
<form action="/sesi/register" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{Session::get('email')}}">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" value="{{Session::get('password')}}">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="nama" class="form-control" id="nama" name="nama" value="{{Session::get('nama')}}">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>
@endsection