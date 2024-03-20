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

    public function detailBarang(Data $data){

        return view('homepage.detailProduk.detailKemeja',[
            'data' =>$data
        ]);
    }

    public function produk(){
        $data=Data::all();
        return view('homepage.produk',[
            'data'=>$data
        ]);

    }

    public function tentangkami(){
        return view('homepage.tentangkami');
    }

    public function keranjang(){
        return view('homepage.keranjang');
    }

    public function favorit(){
        return view('homepage.favorit');
    }

    public function kontak(){
        return view('homepage.kontak');
    }

    public function sale(){
        // $data=Data::where('kategori_id', '=', '5')->latest()->get();
        return view('homepage.kategori.sale'
            // 'data' =>$data
        );
    }
    public function kemeja(){
        $barang=Data::where('kategori_id', '=', '3')->latest()->get();
        return view('homepage.kategori.kemeja',[
            'data' =>$barang
        ]);
    }
    public function outer(){
        $data=Data::where('kategori_id', '=', '4')->latest()->get();
        return view('homepage.kategori.outer',[
            'data' =>$data
        ]);
    }
    public function tunik(){
        $data=Data::where('kategori_id', '=', '6')->latest()->get();
        return view('homepage.kategori.tunik',[
            'data' =>$data
        ]);
    }
    public function dress(){
        $data=Data::where('kategori_id', '=', '5')->latest()->get();
        return view('homepage.kategori.dress',[

            'data' =>$data
        ]);
    }
    public function blouse(){
        $data=Data::where('kategori_id', '=', '7')->latest()->get();
        return view('homepage.kategori.blouse',[
            'data' =>$data
        ]);
    }
    public function celana(){
        $data=Data::where('kategori_id', '=', '8')->latest()->get();
        return view('homepage.kategori.celana',[
            'data' =>$data
        ]);
    }
    public function rok(){
        $data=Data::where('kategori_id', '=', '9')->latest()->get();
        return view('homepage.kategori.rok',[
            'data' =>$data
        ]);
    }
    // public function detailKemeja(){
    //     return view('homepage.detailProduk.detailKemeja');
    // }
    public function checkout(){
        return view('homepage.checkout');
    }
    public function informasi(){
        return view('homepage.profile.informasi');
    }

    public function editInformasi(User $user, Request $request){

        $rules = [
            'nama_depan'=>'required|max:255',
            'nama_belakang'=>'required|max:255',
            'no_telp'=>'required|max:255',
            'tgl_lahir'=>'required|max:255'
        ];

        $validatedData = $request->validate($rules);

        dd($validatedData);
        Data::where('id',$user->auth()->user()->id)->update($validatedData);
        return redirect('/informasi');
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
    public function nilai(){
        return view('homepage.profile.nilai');
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

