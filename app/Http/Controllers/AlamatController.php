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
    public function tambahAlamat(){
        return view('homepage.profile.tambahAlamat');
    }

    public function createAlamat(Request $request)
    {

        $validatedData = $request->validate([
            'nama_penerima'=> 'required',
            'no_penerima'=>'required|max:255',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'kode_pos' => 'required',
            'utama' => ''

        ]);
        $validatedData['user_id'] = auth()->user()->id;
        // dd($validatedData);
        Alamat::create($validatedData);
        return redirect('/alamat');
    }


}
