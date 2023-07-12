@extends('layout/aplikasi')
@section('konten')

   <div class=" ">
    <a href='/siswa' class="btn btn-secondary">mbalik</a>
    <h1>{{$data->nama}} </h1> 
    <p>
        <b>nomor induk </b>{{$data->nomor_induk}}
      </p>
      <p>
        <b>alamat </b> {{$data->alamat}}
      </p>
</div> 

  
@endsection