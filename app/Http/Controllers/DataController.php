<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Data;

class DataController extends Controller
{
    public function index(){

        return view('homepage.index');
    }

    public function produk(){
        return view('homepage.produk');
    }

    public function keranjang(){
        return view('homepage.keranjang');
    }

    public function favorit(){
        return view('homepage.favorit');
    }

    public function sale(){
        return view('homepage.kategori.sale');
    }
    public function kemeja(){
        return view('homepage.kategori.kemeja');
    }
    public function outer(){
        return view('homepage.kategori.outer');
    }
    public function tunik(){
        return view('homepage.kategori.tunik');
    }
    public function dress(){

        return view('homepage.kategori.dress',[

            'data' =>Data::all()
        ]);
    }
    public function blouse(){
        return view('homepage.kategori.blouse');
    }
    public function celana(){
        return view('homepage.kategori.celana');
    }
    public function rok(){
        return view('homepage.kategori.rok');
    }
    public function detailKemeja(){
        return view('homepage.detailProduk.detailKemeja');
    }
    public function checkout(){
        return view('homepage.checkout');
    }
    public function informasi(){
        return view('homepage.profile.informasi');
    }
    public function pesanan(){
        return view('homepage.profile.pesanan');
    }
    public function lihatDetail(){
        return view('homepage.profile.lihatDetail');
        return redirect('/penilaian');
    }
    public function penilaian(){
        return view('homepage.profile.penilaian');
    }

    public function Tambahdata(){

        return view('tambahdata',[
            'kategori' => Kategori::all()
        ]);
    }

    public function createdata(Request $request){

        $validatedData = $request->validate([
            'kategori_id' => 'required',
            'nama_produk' => 'required',
            'caption' => 'required',
            'cover_produk' => 'image|file|max:2048',
            'gambar1' => 'image|file|max:2048',
            'gambar2' => 'image|file|max:2048',
            'gambar3' => 'image|file|max:2048',
            'harga' => '',
            'sale' => '',
            'deskripsi' => 'required',
            'spesifikasi' => 'required',
            'ukuran' => '',
            'warna' => '',
            'jumlah_produk' => ''
        ]);

        if ($request->file('cover_produk')) {
            $validatedData['cover_produk'] = $request->file('cover_produk')->store('post-images');
        }
        if ($request->file('gambar1')) {
            $validatedData['gambar1'] = $request->file('gambar1')->store('post-images');
        }
        if ($request->file('gambar2')) {
            $validatedData['gambar2'] = $request->file('gambar2')->store('post-images');
        }
        if ($request->file('gambar3')) {
            $validatedData['gambar3'] = $request->file('gambar3')->store('post-images');
        }

        Data::create($validatedData);

        return redirect('/tambah')->with('berhasil', 'Daftar akun berhasil!!');
    }

}

