<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Siswa::orderBy('nomor_induk','asc')->paginate(4);
        return view('siswa/index')->with('data',$data);

    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/siswa/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nomor_induk',$request->nomor_induk);
        Session::flash('nama',$request->nama);
        Session::flash('alamat',$request->alamat);

        $request->validate(
        [
            'nomor_induk'=>'required|numeric',
            'nama'=>'required',
            'alamat'=>'required',
            'foto'=>'required|mimes:jpg,jpeg,png'
        ],[
            'nomor_induk.required'=>'Nomor induk wajib diisi',
            'nomor_induk.numeric'=>'Nomor induk wajib diisi dengan angka',
            'nama.required'=>'Nama wajib diisi',
            'alamat.required'=>'Alamat wajib diisi',
            'foto.required'=>'Silahkan Pilih Foto Profil',
            'foto.mimes'=>'ekstensi foto hanya jpg, jpeg, dan png'

        ]);
            $data=[
                'nomor_induk'=>$request->input('nomor_induk'),
                'nama'=>$request->input('nama'),
                'alamat'=>$request->input('alamat')
            ];
        Siswa::create($data);
        return redirect('siswa')->with('success','berhasil masuk data yang diinputkan!!');
      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        {
            $data= Siswa::where('nomor_induk',$id)->first();
            return view('siswa/detail')->with('data',$data);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Siswa::where('nomor_induk',$id)->first();
        return view('siswa/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Session::flash('nama',$request->nama);
        Session::flash('alamat',$request->alamat);

        $request->validate(
        [
            'nama'=>'required',
            'alamat'=>'required'
        ],[
            'nama.required'=>'Nama wajib diisi',
            'alamat.required'=>'Alamat wajib diisi'

        ]);
            $data=[
                'nama'=>$request->input('nama'),
                'alamat'=>$request->input('alamat')
            ];
        Siswa::where('nomor_induk',$id)->update($data);
        return redirect('siswa')->with('success','berhasil diupdate datanya!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $data=Siswa::where('nomor_induk',$id)->delete();
        return redirect('siswa')->with('success','berhasil dihapus datanya!!');
    }
}
