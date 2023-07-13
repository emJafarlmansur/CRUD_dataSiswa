@extends('layout/aplikasi')
@section('konten')

<a href='/siswa' class="btn btn-secondary">mbalik</a>
<h1 style="text-align: center">Edit Data Siswa</h1>
<form action="{{'/siswa/'.$data->nomor_induk}}" method="POST" enctype="multipart/form-data"> <!-- form action merujuk pada fungsi update yang berhubungan dengan @ method put dibawah csrf-->
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
          @if ($data->foto)
              <div class="mb-3">
                <img style="max-width: 50px ; max-height:50px" src="{{url('foto').'/'.$data->foto}}">
              </div>
          @endif
          <div class="mb-3">
            <label for="foto" class="form-label">Foto Baru</label> <!--foto baru yang akan dimasukkan -->
            <input type="file" class="form-control" id="foto" name="foto">
          </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button> <!--sebelum menggganti foto lama, alurnya foto lama harus dihapus terlebih dahulu kemudan foto baru diaupload -->
      </div>
</form>
@endsection