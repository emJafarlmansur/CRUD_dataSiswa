@extends('layout/aplikasi')
@section('konten')
  <h1>{{$judul}}</h1>  
  <p>
    <ul>
        <li>Email : {{$kontak['email']}}</li>
        <li>Alamat : {{$kontak['alamat']}}</li>
    </ul>
  </p>
@endsection