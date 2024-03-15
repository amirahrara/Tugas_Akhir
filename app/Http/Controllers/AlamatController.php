<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlamatController extends Controller
{
    public function alamat(){
        return view('homepage.profile.alamat');
    }
    public function tambahAlamat(){
        return view('homepage.profile.tambahAlamat');
    }
    
}
