<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register()
    {
        return view('auth/register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) // YT : registerSave
    {
       Validator::make($request->all(),  
       [
        'name'=>'requiured',
        'email'=>'rquired|email',
        'password'=>'rquired|password'
       ])->validate();

       User::create([
        'nama'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make( $request->password),
        'level'=>'Admin'

       ]);
       
       return redirect()->route('login');
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
