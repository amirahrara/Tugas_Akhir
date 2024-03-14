<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailProdukController extends Controller
{
    public function detailKemeja(){
        return view('homepage.detailProduk.detailKemeja');
    }
}
