<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
    function registrasi(){
        return view('register');
    }

    function submit(Request $request){
        $user = new User();
        $user->email = $request->email;
        $user->kategori = 'partner';
        $user->name = $request->nama;
        $user->telp = $request->telp;
        $user->alamat = $request->alamat;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('partner');
    }

    function login(){
        return view('partner');
    }

    function sigin(Request $request){
        $data = $request->only('email', 'password');

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('ppartner');
        }
        else{
            return redirect()->back()->with('gagal', 'Masukkan Email dan Password yang Benar');
        }
    }
}
