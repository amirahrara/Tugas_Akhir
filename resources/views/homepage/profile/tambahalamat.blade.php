@extends('layouts.main')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Profil</h4>
                    <div class="breadcrumb__links">
                        <a href="{{route('index')}}">Beranda</a>
                        <a href="{{route('produk')}}">Produk</a>
                        <span>Profil</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .list-group {
        display: flex;
        flex-direction: column;
        max-width: 380px;
        /* position: relative; */
        /* left: 230px; */

        /* gap: 10px; */
    }

    .list-group-item {
        display: block;
        padding: 20px;
        color: #000000;
        text-decoration: none;
        background-color: #f8f9fa;
        border: 1px solid #000000;
        /* border-radius: 5px; */
        transition: background-color 0.3s;

    }

    .list-group-item:hover {
        background-color: #e2e6ea;
    }

    .list-group-item.active {
        background-color: #919191;
        color: #000000;
    }

    .list-group-item.disabled {
        background-color: #f8f9fa;
        color: #6c757d;
        pointer-events: none;
        border-radius: 10px;
    }
    .list-group-item-action {
        background-color: #f8f9fa;
    }
</style>


{{-- <div> --}}
    <section class="informasi spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a class="list-group-item disabled" style="margin-bottom: 20px; text-transform:capitalize " aria-disabled="true">
                        <img src="/assets/img/icon/maleuser.png" style="height:60px;" alt=""><span><b>{{auth()->user()->nama_depan}} {{auth()->user()->nama_belakang}}</b> <br>{{auth()->user()->email}}</span></a>
                    <div class="list-group">
                        <a href="{{route('informasi')}}" class="list-group-item" aria-current="true">
                            <img src="/assets/img/icon/customer.png" style="height:60px;" alt="">
                        <b>Informasi Akun</b>
                        </a>
                        <a href="{{route('alamat')}}" class="list-group-item active">
                            <img src="/assets/img/icon/alamat.png" style="height:60px;" alt=""><b>Alamat</b></a>
                        <a href="{{route('pesanan')}}" class="list-group-item">
                            <img src="/assets/img/icon/pesanan.png" style="height:60px;" alt=""><b>Pesanan Saya</b></a>
                        {{-- <a href="#" class="list-group-item">
                            <img src="/assets/img/icon/keluar.png" style="height:60px;" alt="">  <b>Keluar</b></a> --}}
                    </div>
                </div>
                <style>
                    .tambah__alamat h4{
                        margin-bottom: 20px;
                    }
                    .tambah_alamat_user{
                        margin-bottom: 6px;
                    }
                    .tambah_alamat_user label{
                        color: #111111;
	                    margin-bottom: 12px;
                    }
                    .tambah_alamat_user input{
                        height: 50px;
                        width: 100%;
                        border: 1px solid #000000;
                        font-size: 15px;
                        color: #b7b7b7;
                        padding-left: 20px;
                        margin-bottom: 10px;
                        border-radius: 10px;

                    }
                </style>
                <div class="col-lg-6">
                    {{-- <div class="card-body"> --}}
                        <div class="tambah__alamat">
                            <div class="card" style="padding: 20px; border-radius:15px; border-color: rgb(114, 108, 108);">
                            <h4><b>Tambah Alamat</b></h4>
                            <div class="tambah_alamat_user">
                                    <form class="row g-3" action="{{ route('createAlamat') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                            <div class="col-12">
                                                <h5><b>Kontak Penerima</b></h5>
                                            </div>
                                            <div class=" col-12">
                                                <label class="form-label form-dark" for="nama_penerima">Nama</label>
                                                <input type="nama_penerima" placeholder="contoh: Ayu" name="nama_penerima" id="nama_penerima" class="form-control @error ('nama_penerima') is-invalid @enderror" style="color: black" required value="{{old('nama_penerima')}}"/>
                                                @error('nama_penerima')
                                                <div class="invalid-feedback">
                                                {{ $message }}
                                                </div>
                                                @enderror
                                                </div>
                                            <div class="col-12">
                                                <label class="form-label form-dark" for="no_penerima">No.Telepon</label>
                                                <input type="no_penerima" placeholder="contoh: 082228663003" name="no_penerima" id="no_penerima" class="form-control @error ('no_penerima') is-invalid @enderror" style="color: black" required value="{{old('no_penerima')}}"/>
                                                @error('no_penerima')
                                                <div class="invalid-feedback">
                                                {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <h5><b>Detail Alamat</b></h5>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label form-dark" for="alamat">Alamat</label>
                                                <input type="alamat" placeholder="contoh: perumahan/jl, blok, RT, RW" name="alamat" id="alamat" class="form-control @error ('alamat') is-invalid @enderror" style="color: black" required value="{{old('alamat')}}"/>
                                                @error('alamat')
                                                <div class="invalid-feedback">
                                                {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label form-dark" for="provinsi">Provinsi</label>
                                                <input type="provinsi" placeholder="contoh: Jawa Timur" name="provinsi" id="provinsi" class="form-control @error ('provinsi') is-invalid @enderror" style="color: black" required value="{{old('provinsi')}}"/>
                                                @error('provinsi')
                                                <div class="invalid-feedback">
                                                {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label form-dark" for="kota">Kota/Kabupaten</label>
                                                <input type="kota" placeholder="contoh: Sidoarjo" name="kota" id="kota" class="form-control @error ('kota') is-invalid @enderror" style="color: black" required value="{{old ('kota')}}"/>
                                                @error('kota')
                                                <div class="invalid-feedback">
                                                {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label form-dark" for="kecamatan">Kecamatan</label>
                                                <input type="kecamatan" placeholder="contoh: Kec.Candi" name="kecamatan" id="kecamatan" class="form-control @error ('kecamatan') is-invalid @enderror" style="color: black" required value="{{old ('kecamatan')}}"/>
                                                @error('kecamatan')
                                                <div class="invalid-feedback">
                                                {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label form-dark" for="kode_pos">Kode Pos</label>
                                                <input type="kode_pos" placeholder="contoh: 11111" name="kode_pos" id="kode_pos" class="form-control @error ('kode_pos') is-invalid @enderror" style="color: black" required value="{{old ('kode_pos')}}"/>
                                                @error('kode_pos')
                                                <div class="invalid-feedback">
                                                {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label form-dark" for="kecamatan">Jadikan alamat utama</label>
                                                <input type="text" name="utama" id="utama" class="form-control @error ('kode_pos') is-invalid @enderror" style="color: black" required value="{{old ('utama')}}"/>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="submit" class="site-btn">Simpan</button>
                                            </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        {{-- </div> --}}
                </div>
            </div>
        </div>
     </div>
    </section>

    {{-- <ul class="list-group">
        <li class="list-group-item"></li>
        <li class="list-group-item active" aria-current="true">An active item</li>
        <li class="list-group-item">A second item</li>
        <li class="list-group-item">A third item</li>
        <li class="list-group-item">A fourth item</li>
        <li class="list-group-item">And a fifth one</li>
    </ul> --}}
{{-- </div> --}}

@endsection

