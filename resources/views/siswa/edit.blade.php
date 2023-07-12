@extends('layout/aplikasi')
@section('konten')

<a href='/siswa' class="btn btn-secondary">mbalik</a>
<h1 style="text-align: center">Edit Data Siswa</h1>
<form action="{{'/siswa/'.$data->nomor_induk}}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
   <h1>Nim : {{$data->nomor_induk}} </h1> </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="nama" class="form-control" id="nama" name="nama" value="{{$data->nama}}">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
      <textarea name="alamat" id="alamat" class="form-control" >{{$data->alamat}}</textarea>
          </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>
@endsection