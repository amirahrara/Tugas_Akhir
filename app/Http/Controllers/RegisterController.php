<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function store(Request $request){
        $validatedData = $request ->validate([
            'email'=>'required|email:dns|unique:users',
            'nama_depan'=>'required|max:255',
            'nama_belakang'=>'required|max:255',
            'password'=>'required|min:5|max:255',
            'no_telp'=>'required|max:255',
            'tgl_lahir'=>'required|max:255'

        ]);

        // $validatedData['password']= bcrypt($validatedData['password']);
        $validatedData['password']= Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('berhasil', 'Daftar akun berhasil!!');
    }
}
