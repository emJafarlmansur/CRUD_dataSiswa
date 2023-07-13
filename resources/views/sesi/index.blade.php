@extends('layout/aplikasi')
@section('konten')

    <div class="w-60 center border rounded px-5 py-5">
        <h1>this is Login</h1>
        <form action="/sesi/login" method="POST">
            @csrf
        <div class="mb-3">
            <input type="email" class="form_control" name="email" id="email" placeholder="massukkan email" value="{{Session::get('email')}}">
        </div>
        <div class="mb-3">
            <input type="password" class="form_control" name="password" id="password" placeholder="massukkan password">
        </div>
   <div class="mb-3" >
    <input type="submit" class="btn btn-outline-info">
</div> 
</form>
    </div>
@endsection