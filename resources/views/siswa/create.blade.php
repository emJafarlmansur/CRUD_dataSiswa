@extends('layout/aplikasi')
@section('konten')

<a href='/siswa' class="btn btn-secondary " >mbalik</a>
<h1 style="text-align: center">Create Data Siswa</h1>
<form action="/siswa" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nomor_induk" class="form-label">Nomor Induk</label>
      <input type="nomor_induk" class="form-control" id="nomor_induk" name="nomor_induk" value="{{Session::get('nomor_induk')}}">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="nama" class="form-control" id="nama" name="nama" value="{{Session::get('nama')}}">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
      <textarea name="alamat" id="alamat" class="form-control" >{{Session::get('alamat')}}</textarea>
          </div>
          <div class="mb-3">
            <label for="foto" class="form-label">Foto Profil</label>
          <input type="foto" name="foto" id="foto" class="form-control" >
              </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>
@endsection