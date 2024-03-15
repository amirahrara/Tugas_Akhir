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
    <section class="alamat spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a class="list-group-item disabled" style="margin-bottom: 20px; " aria-disabled="true">
                        <img src="/assets/img/icon/maleuser.png" style="height:60px;" alt=""><span><b>Amirah</b> <br>nama@gmail.com</span></a>
                    <div class="list-group">
                        <a href="{{route('informasi')}}" class="list-group-item" >
                            <img src="/assets/img/icon/customer.png" style="height:60px;" alt="">
                        <b>Informasi Akun</b>
                        </a>
                        <a href="{{route('alamat')}}" class="list-group-item active" aria-current="true">
                            <img src="/assets/img/icon/alamat.png" style="height:60px;" alt=""><b>Alamat</b></a>
                        <a href="{{route('pesanan')}}" class="list-group-item">
                            <img src="/assets/img/icon/pesanan.png" style="height:60px;" alt=""><b>Pesanan Saya</b></a>
                        {{-- <a href="#" class="list-group-item">
                            <img src="/assets/img/icon/keluar.png" style="height:60px;" alt="">  <b>Keluar</b></a> --}}
                    </div>
                </div>
                <style>
                    .alamat__user h4{
                        margin-bottom: 20px;
                    }
                    .alamat_user_akun{
                        margin-bottom: 6px;
                    }
                    .alamat_user_akun p{
                        color: #111111;
	                    margin-bottom: 12px;
                    }
                    .alamat_user_akun input{
                        height: 50px;
                        width: 100%;
                        border: 1px solid #000000;
                        font-size: 15px;
                        color: #b7b7b7;
                        padding-left: 20px;
                        margin-bottom: 10px;
                        border-radius: 10px;

                    }
                    .alamat_user_akun li{
                        list-style: none;
                        padding-left: 20px;
                        margin-top: 10px;
                        margin-bottom: 10px;
                    }
                </style>
                <div class="col-lg-6">
                    <div class="alamat__user">
                        <div class="card" style="padding: 20px; border-radius:15px; border-color: rgb(114, 108, 108);">
                        <a href="{{route('tamabahAlamat')}}"><span style="float: right">Tambah alamat</span></a>
                        <h4><b>Daftar Alamat</b></h4>
                            <div class="alamat_user_akun">
                                <form class="row g-3">
                                    @foreach ($alamat as $item) 
                                    <div class="col-12">
                                        <div class="card" style="border-radius:10px; border-color: rgb(114, 108, 108);">
                                            <li><b>{{ $item->nama_penerima }} | {{ $item->no_penerima }}</b></li>
                                            <li>{{ $item->alamat }} {{ $item->provinsi }} {{ $item->kota }}</li>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- <div class="col-12">
                                        <div class="card" style="border-radius:10px; border-color: rgb(114, 108, 108);">
                                            <li><b>Nama | No.Telpon</b></li>
                                            <li>alamat lengkap</li>
                                        </div>
                                    </div> --}}
                                    <div class="col-4">

                                        <button type="submit" class="site-btn">Simpan</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
