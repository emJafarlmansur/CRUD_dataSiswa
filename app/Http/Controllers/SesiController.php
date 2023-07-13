<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
     function index(){
        return view('sesi/index');
    }
     function login(Request $request)
     {
        Session::flash('email',$request->email);
    $request->validate([
        'email'=>'required',
        'password'=>'required|min:3'
    ],[
        'email.required'=>'Email wajib diisi',
        'password.required'=>'Password wajib diisi'
    ]); 
$datalogin=[
    'email'=>$request->email,
    'password'=>$request->password
];
if(Auth::attempt($datalogin)){
    return redirect('/siswa');
}else{
   return redirect('sesi')->withErrors('Data yang kamu masukan gak valid');
}

    }
}
