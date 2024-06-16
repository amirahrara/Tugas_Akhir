<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class AlamatController extends Controller
{
    public function alamat(){
        $user = auth()->user()->id;
        $alamat = Alamat::where('user_id', $user)->latest()->get();
        return view('homepage.profile.alamat',[

            'alamat'=>$alamat
        ]);
    }
    public function hapusAl(Alamat $alamat)
    {
        Alamat::destroy($alamat->id);
        return redirect('/alamat');
    }
    public function tambahAlamat(){
        return view('homepage.profile.tambahAlamat');
    }

    public function createAlamat(Request $request){

    //dd($request);
    $validatedData = $request->validate([
        'nama_penerima' => 'required',
        'no_penerima' => 'required|max:255',
        'alamat' => 'required',
        'provinsi' => 'required',
        'kota' => 'required',
        'kecamatan' => 'required',
        'kelurahan' => 'required',
        'kode_pos' => 'required',
        'utama' => 'required' // Pastikan field utama ada di form HTML
    ]);

    // Menentukan nilai untuk kolom alamat_utama berdasarkan status toggle
    $alamat_utama = $request->input('utama') === 'ya' ? 'ya' : 'tidak';

    // Menambahkan user_id ke data yang akan disimpan
    $validatedData['user_id'] = auth()->user()->id;

    // Menambahkan nilai alamat_utama ke dalam data yang akan disimpan
    $validatedData['alamat_utama'] = $alamat_utama;

    // Membuat entri alamat baru dalam database
    Alamat::create($validatedData);

    // Redirect ke halaman alamat setelah entri berhasil dibuat
    return redirect('/alamat');
}



}
