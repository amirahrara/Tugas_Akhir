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
    <section class="alamat spad">
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
                        <a href="{{ route('alamat') }}" class="list-group-item active" aria-current="true">
                            <img src="/assets/img/icon/alamat.png" style="height: 60px;" alt="">
                            <b>Alamat</b>
                        </a>
                        <a href="{{ route('pesanan') }}" class="list-group-item">
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
                    .alamat_user_akun {
                        display: flex;
                        flex-direction: column;
                        gap: 20px;
                    }

                    .address-card {
                        padding: 20px;
                        border-radius: 10px;
                        border: 1px solid rgb(114, 108, 108);
                        min-height: 150px; /* Atur minimum tinggi kartu */
                    }

                    .address-list {
                        list-style-type: none;
                        padding: 0;
                        margin: 0;
                    }

                    .delete-form {
                        display: inline;
                    }

                    .btn-link {
                        background: none;
                        border: none;
                        color: rgb(255, 0, 0);
                        cursor: pointer;
                        margin-left: 15px;
                    }

                    .form-check {
                        text-align: right;

                    }

                    .form-check-label {
                        margin-left: 10px;
                    }
                </style>
                <div class="col-lg-6">
                    <div class="alamat__user">
                        <div class="card" style="padding: 20px; border-radius:15px; border-color: rgb(114, 108, 108);">
                            <h4><b>Daftar Alamat</b></h4>
                            <a href="{{route('tambahAlamat')}}"  class="mb-3"><span style="float: right;"><b>Tambah alamat</b></span></a>
                            <div class="alamat_user_akun">
                                <div class="alamat_user_akun">
                                    <div class="row g-3">
                                        @foreach ($alamat as $item)
                                        <div class="col-12">
                                            <div class="card address-card">
                                                <ul class="address-list">
                                                    <li><b>{{ $item->nama_penerima }} | {{ $item->no_penerima }}</b></li>
                                                    <li>{{ $item->alamat }}, {{ $item->kota }}, {{ $item->provinsi }}, {{ $item->kode_pos }}</li>
                                                </ul>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <form action="/alamat/{{ $item->id }}" method="POST" class="delete-form">
                                                        @csrf

                                                        <button type="submit" class="btn-link" style="background:none; border:none; color:rgb(255, 0, 0); cursor:pointer; margin-left:15px">Hapus</button>
                                                    </form>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" style="width: 40px;
                                                        height: 18px;" id="flexSwitchCheckDefault">
                                                        <label class="form-check-label" for="flexSwitchCheckDefault"><b>Jadikan Alamat Utama</b></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
        function confirmDelete(){
            Swal.fire({
                title: "Apa anda yakin?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!"
                }).then((result) => {
                if (result.isConfirmed) {
                    event.target.submit();
                    Swal.fire({
                    title: "Terhapus!",
                    text: "Alamat berhasil terhapus",
                    icon: "success"
                    });
                }
                });

        }
    </script> --}}
@endsection
