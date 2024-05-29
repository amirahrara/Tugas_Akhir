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
                        <a href="{{route('informasi')}}">Profil</a>
                        <span>Pesanan Saya</span>
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
    <section class="pesanan spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a class="list-group-item disabled" style="margin-bottom: 20px; " aria-disabled="true">
                        <img src="/assets/img/icon/maleuser.png" style="height:60px;" alt=""><span><b>{{auth()->user()->nama_depan}} {{auth()->user()->nama_belakang}}</b><br>&emsp; {{auth()->user()->email}}</span></a>
                    <div class="list-group">
                        <a href="{{route('informasi')}}" class="list-group-item" >
                            <img src="/assets/img/icon/customer.png" style="height:60px;" alt="">
                        <b>Informasi Akun</b>
                        </a>
                        <a href="{{route('alamat')}}" class="list-group-item " aria-current="true">
                            <img src="/assets/img/icon/alamat.png" style="height:60px;" alt=""><b>Alamat</b></a>
                        <a href="{{route('pesanan')}}" class="list-group-item active">
                            <img src="/assets/img/icon/pesanan.png" style="height:60px;" alt=""><b>Pesanan Saya</b></a>
                        {{-- <a href="#" class="list-group-item">
                            <img src="/assets/img/icon/keluar.png" style="height:60px;" alt="">  <b>Keluar</b></a> --}}
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
                        <h4><b>Detail Pesanan</b></h4>
                            {{-- <div class="card" style="padding: 20px; border-radius:15px; border-color: rgb(114, 108, 108);"> --}}
                                <a style="font-size: 13px">Status Pemesanan <span style="float: right"><button type="button" class="btn btn-success btn-sm " disabled style="font-size: 13px; border-radius:10px;">Selesai</button></span></a>
                                <a style="font-size: 13px">No.Pesanan <span style="float: right">123456</span></a>
                                <a style="font-size: 13px">Tanggal Pesanan: <span style="float: right">20 Januari 2022</span></a>
                                <br>
                                <h6><b>Detail Pengiriman</b></h6>
                                <table>
                                    <tr>
                                        <td>
                                            <li style="list-style: none; font-size: 13px">Kurir</li>
                                            <li style="list-style: none; font-size: 13px">No.Resi</li>
                                            <li style="list-style: none; font-size: 13px">Alamat</li>

                                        </td>
                                        <td>
                                            <li style="list-style: none; font-size: 13px">JNE </li>
                                            <li style="list-style: none; font-size: 13px">0702212300280643</li>
                                            <li style="list-style: none; font-size: 13px">Alamat Lengkap</li>
                                                {{-- <li style="list-style: none; font-size: 13px">No.telepon</li>
                                                <li style="list-style: none; font-size: 13px">Alamat lengkap</li> --}}
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <h6><b>Detail Produk</b></h6>
                                <div class="shopping__cart__table" style="margin-bottom: 2px">
                                    <table>
                                        {{-- <thead>
                                            <tr>
                                                <th>Produk</th>

                                            </tr>
                                        </thead> --}}
                                        <tbody>
                                            <tr>
                                                <td class="product__cart__item" style="padding-top: 5px; padding-bottom: 5px">
                                                    <div class="product__cart__item__pic">
                                                        <img src="/assets/img/product/dress1.png" alt="" style="max-width: 90px">
                                                    </div>
                                                    <div class="product__cart__item__text"style="padding-top: 5px">
                                                        <h6>T-shirt Contrast Pocket</h6>
                                                        <h6>Ukuran: </h6>
                                                        <h6>Warna: </h6>
                                                        <h6><b> qty Rp. 100.000</b></h6>
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td class="product__cart__item" style="padding-top: 5px; padding-bottom: 5px">
                                                    <div class="product__cart__item__pic">
                                                        <img src="/assets/img/product/kemeja3.png" alt="" style="max-width: 90px">
                                                    </div>
                                                    <div class="product__cart__item__text"style="padding-top: 5px">
                                                        <h6>Diagonal Textured Cap</h6>
                                                        <h6>Ukuran: </h6>
                                                        <h6>Warna: </h6>
                                                        <h6><b>qty Rp. 120.000</b></h6>
                                                    </div>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                    <br>
                                    <h6><b>Detail Pembayaran</b></h6>
                                    <a style="font-size: 13px">SubTotal <span style="float: right">Rp. 220.000</span></a><br>
                                    <a style="font-size: 13px">Ongkos Kirim <span style="float: right">Rp. 0</span></a><br>
                                    <a style="font-size: 13px">Total <span style="float: right"><b>Rp. 220.000</b></span></a>
                                </div>

                            {{-- </div> --}}
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

