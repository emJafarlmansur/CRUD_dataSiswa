@extends('layout/aplikasi')
@section('konten')
<a href="/siswa/create" class="btn btn-primary">Tambah Data Siswa</a>
    <table class="table">
        <thead>
            <tr>
                <th>foto</th>
                <th>Nomor Induk</th>
                <th>Nama</th>
                <th>Alamat </th>
                <th>Tindakan</th>
            </tr>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>
                        @if ($item->foto)
                        <img style="max-width: 50px; max-height: 50px" src="{{url('foto').'/'.$item->foto}} ">   
                        @endif
                    </td>
                    <td>{{$item->nomor_induk}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td><a class='btn btn-outline-info btn-sm' href='{{url('/siswa/'.$item->nomor_induk)}}'>Detail</a>
                        <a class='btn btn-outline-secondary btn-sm' href='{{url('/siswa/'.$item->nomor_induk.'/edit')}}'>Edit</a>
                      <form onsubmit="return confirm('dihapus ta {{$item->nama}} ?')" class="d-inline" action="{{'/siswa/'.$item->nomor_induk}}" method="POST">@csrf @method('delete') <button class="btn btn-danger btn-sm">Hapus</button></form>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </thead>
    </table>

  {{ $data->links() }}
@endsection