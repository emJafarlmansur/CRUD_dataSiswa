<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            return redirect('/siswa')->with('success','Login Berhasil!');
        }else{
            return redirect('sesi')->withErrors('Data yang kamu masukan gak valid');
        }
            }
    
   
function register(){
return view('sesi/register');
}
function create(Request $request)
{
    Session::flash('email');
    Session::flash('nama');
    Session::flash('password');


   $request->validate ([
    'email'=>'required|email|unique:users',
    'nama'=>'required',
    'password'=>'required|min:5'
],[
    'email.required'=>'Email wajib diisi',
    'email.unique'=>'Email sudah pernah digunakan',
    'email.email'=>'Masukan email yang valid',
    'password.required'=>'password wajib diisi',
    'password.min'=>'password minimal 5 karakter'
    ]);

    $data=[
        'name'=>$request->nama,
        'email'=>$request->email,
        'password'=>Hash::make($request->password)
    ];

    User::create($data);
    return redirect('sesi')->with('succes','Akun berhasil ditambahkan');
}

function logout(){
    Auth::logout();
    return redirect('sesi');
}
}
