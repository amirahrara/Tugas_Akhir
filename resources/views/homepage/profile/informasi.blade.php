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
                        <a href="{{route('informasi')}}" class="list-group-item active" aria-current="true">
                            <img src="/assets/img/icon/customer.png" style="height:60px;" alt="">
                        <b>Informasi Akun</b>
                        </a>
                        <a href="{{route('alamat')}}" class="list-group-item">
                            <img src="/assets/img/icon/alamat.png" style="height:60px;" alt=""><b>Alamat</b></a>
                        <a href="{{route('pesanan')}}" class="list-group-item">
                            <img src="/assets/img/icon/pesanan.png" style="height:60px;" alt=""><b>Pesanan Saya</b></a>
                        {{-- <a href="#" class="list-group-item">
                            <img src="/assets/img/icon/keluar.png" style="height:60px;" alt="">  <b>Keluar</b></a> --}}
                    </div>
                </div>
                <style>
                    .info__user h4{
                        margin-bottom: 20px;
                    }
                    .info_user_akun{
                        margin-bottom: 6px;
                    }
                    .info_user_akun label{
                        color: #111111;
	                    margin-bottom: 12px;
                    }
                    .info_user_akun input{
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
                        <div class="info__user">
                            <h4><b>Informasi Akun</b></h4>
                            <div class="info_user_akun">
                                <form class="row g-3" action="{{ route('edit-informasi') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class=" col-md-6">
                                            <label class="form-label form-dark" for="nama_depan">Nama Depan</label>
                                            <input type="nama_depan" name="nama_depan" id="nama_depan" class="form-control" style="color: black" required value="{{auth()->user()->nama_depan}}"/>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label form-dark" for="nama_belakang">Nama Belakang</label>
                                                <input type="nama_belakang" name="nama_belakang" id="nama_belakang" class="form-control" style="color: black" required value="{{auth()->user()->nama_belakang}}"/>
                                            </div>
                                        <div class="col-12">
                                            <label class="form-label form-dark" for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" style="color: black" required value="{{auth()->user()->email}}"/>
                                        </div>
                                            <div class="col-12">
                                                <label class="form-label form-dark" for="no_telp">No.Telepon</label>
                                                <input type="no_telp" name="no_telp" id="no_telp" class="form-control" style="color: black" required value="{{auth()->user()->no_telp}}"/>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label form-dark" for="tgl_lahir">Tanggal Lahir</label>
                                                <input type="tgl_lahir" name="tgl_lahir" id="tgl_lahir" class="form-control" style="color: black" required value="{{auth()->user()->tgl_lahir}}"/>

                                            </div>
                                            <div class="col-md-4">
                                                <button type="submit" class="site-btn">Simpan</button>
                                            </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                    {{-- </div> --}}
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
