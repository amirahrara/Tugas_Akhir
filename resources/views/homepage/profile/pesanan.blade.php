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
        background-color: #ffffff;
        border: 1px solid #000000;
        /* border-radius: 5px; */
        transition: background-color 0.3s;
        align-items: center;
        justify-content: flex-start;
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
    <section class="pesanan spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a class="list-group-item disabled mb-4" >
                        <div class="d-flex align-items-center">
                            <img src="/assets/img/icon/maleuser.png" style="height: 60px;" alt="">
                            <div class="ms-3">
                                <span><b>{{ auth()->user()->nama_depan }} {{ auth()->user()->nama_belakang }}</b></span><br>
                                <span>{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </a>
                    <div class="list-group">
                        <a href="{{ route('informasi') }}" class="list-group-item">
                            <img src="/assets/img/icon/customer.png" style="height: 60px;" alt="">
                            <b>Informasi Akun</b>
                        </a>
                        <a href="{{ route('alamat') }}" class="list-group-item" aria-current="true">
                            <img src="/assets/img/icon/alamat.png" style="height: 60px;" alt="">
                            <b>Alamat</b>
                        </a>
                        <a href="{{ route('pesanan') }}" class="list-group-item active">
                            <img src="/assets/img/icon/pesanan.png" style="height: 60px;" alt="">
                            <b>Pesanan Saya</b>
                        </a>
                        {{-- <a href="#" class="list-group-item">
                            <img src="/assets/img/icon/keluar.png" style="height: 60px;" alt="">
                            <b>Keluar</b>
                        </a> --}}
                    </div>
                </div>
                <style>
                    .pesanan__user h4{
                        margin-bottom: 20px;
                    }
                    .pesanan_user_akun{
                        margin-bottom: 6px;
                    }
                    .pesanan_user_akun p{
                        color: #111111;
	                    margin-bottom: 12px;
                    }
                    .pesanan_user_akun input{
                        height: 50px;
                        width: 100%;
                        border: 1px solid #000000;
                        font-size: 15px;
                        color: #b7b7b7;
                        padding-left: 20px;
                        margin-bottom: 10px;
                        border-radius: 10px;

                    }
                    .pesanan_user_akun li{
                        list-style: none;
                        padding-left: 20px;
                        margin-top: 10px;
                        margin-bottom: 10px;
                    }
                </style>
                <div class="col-lg-6">
                    <div class="pesanan__user">
                        <div class="card" style="padding: 20px; border-radius:15px; border-color: rgb(114, 108, 108);">
                        <h4><b>Pesanan Saya</b></h4>
                            <div class="card" style="padding: 20px; border-radius:15px; border-color: rgb(114, 108, 108);">
                                <a style="font-size: 13px">Status Pemesanan <span style="float: right"><button type="button" class="btn btn-success btn-sm " disabled style="font-size: 13px; border-radius:10px;">Selesai</button></span></a>
                                <a style="font-size: 13px">No.Pesanan <span style="float: right">123456</span></a>

                                <div class="shopping__cart__table" style="margin-bottom: 2px">
                                    <table>
                                        <thead>
                                            {{-- <tr>
                                                <th>Produk</th>

                                            </tr> --}}
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product__cart__item">
                                                    <div class="product__cart__item__pic">
                                                        <img src="/assets/img/product/dress1.png" alt="" style="max-width: 90px">
                                                    </div>
                                                    <div class="product__cart__item__text" style="padding-top: 5px">
                                                        <h6>T-shirt Contrast Pocket</h6>
                                                        <h6>Ukuran: </h6>
                                                        <h6>Warna: </h6>
                                                        <h6><b>Rp. 120.000</b></h6>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="product__cart__item">
                                                    <div class="product__cart__item__pic">
                                                        <img src="/assets/img/product/kemeja3.png" alt="" style="max-width: 90px">
                                                    </div>
                                                    <div class="product__cart__item__text" style="padding-top: 5px">
                                                        <h6>Diagonal Textured Cap</h6>
                                                        <h6>Ukuran: </h6>
                                                        <h6>Warna: </h6>
                                                        <h6><b>Rp. 120.000</b></h6>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                    <br>
                                    <p style="font-size: 13px">Total Rp. 220.000 <span style="float: right"><a href="{{route('lihatDetail')}}">Lihat Detail Pesanan</a></span></p>
                                    <a href="{{route('penilaian')}}" class="btn btn-dark btn-sm" style="font-size: 13px; border-radius:10px; float:right">Beri Penilaian</a>
                                    {{-- <button type="button" class="btn btn-dark btn-sm" style="font-size: 13px; border-radius:10px; float:right">Beri Penilaian</button> --}}
                                </div>
                                {{-- <form class="row g-3">
                                    <div class="col-12">
                                        <div class="card" style="border-radius:10px; border-color: rgb(114, 108, 108); padding-left:2px; padding-top:8px; padding-bottom:8px">
                                            <a style="font-size: 13px">Status Pemesanan <span style="float: right"><button type="button" class="btn btn-secondary btn-sm me-md-2" disabled style="font-size: 13px; border-radius:10px;">Menunggu Pembayaran</button></span></a>
                                            <div class="col-md-3">
                                                <img src="/assets/img/product/dress1.png" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <img src="/assets/img/product/dress1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card" style="border-radius:10px; border-color: rgb(114, 108, 108);">
                                            <li><b>Nama | No.Telpon</b></li>
                                            <li>alamat lengkap</li>
                                        </div>
                                    </div>
                                    <div class="col-4">

                                        <button type="submit" class="site-btn">Simpan</button>
                                    </div>
                                </form> --}}
                            </div>
                            </div>
                    </div>
                    {{-- <div class="pesanan__user">
                        <div class="card" style="padding: 20px; border-radius:15px; border-color: rgb(114, 108, 108);">
                        <h4><b>Pesanan Saya</b></h4>
                            <div class="pesanan_user_akun">
                                <form class="row g-3">
                                    <div class="col-12">
                                        <div class="card" style="border-radius:10px; border-color: rgb(114, 108, 108); padding-left:2px; padding-top:8px; padding-bottom:8px">
                                            <a style="font-size: 13px">Status Pemesanan <span style="float: right"><button type="button" class="btn btn-secondary btn-sm me-md-2" disabled style="font-size: 13px; border-radius:10px;">Menunggu Pembayaran</button></span></a>
                                            <div class="col-md-3">
                                                <img src="/assets/img/product/dress1.png" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                <img src="/assets/img/product/dress1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card" style="border-radius:10px; border-color: rgb(114, 108, 108);">
                                            <li><b>Nama | No.Telpon</b></li>
                                            <li>alamat lengkap</li>
                                        </div>
                                    </div>
                                    <div class="col-4">

                                        <button type="submit" class="site-btn">Simpan</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

@endsection

