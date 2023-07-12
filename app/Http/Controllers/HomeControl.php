<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControl extends Controller
{
    public function index()
     {
        return view('/halaman/index');
    }

    public function tentang()
     {
        $data=[
            'judul'=>'halaman tentang',
            'kontak'=>[
                'email'=>'javr@friendster.co',
                'alamat'=>'MoxerCty'
            ]
            ];  //lebih jelas tentang array ini kunjungi laman youtube =https://www.youtube.com/watch?v=gDcDeZQC-JE&list=PLzt0WdHR1Z3nCCIom7LiXaqCXZcaol8q-&index=3
        return view('/halaman/tentang')->with($data);
    }

    public function kontak()
     {
        return view('/halaman/kontak');
    }
    public function dummy()
    {
        return view('/halaman/dumidxabs');
        {
            
        }
    }
}
