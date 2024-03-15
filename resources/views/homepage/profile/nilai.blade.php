@extends('layouts.main')

@section('content')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
<style>

    .rating {
        direction: rtl;
        unicode-bidi: bidi-override;
        color: #ddd; /* Personal choice */
        font-size: 8px;
        /* margin-left: -15px; */
    }
    .rating input {
        display: none;
    }
    .rating label:hover,
    .rating label:hover ~ label,
    .rating input:checked + label,
    .rating input:checked + label ~ label {
        color: #ffc107; /* Personal color choice. Lifted from Bootstrap 4 */
        font-size: 8px;
    }


    .front-stars, .back-stars, .star-rating {
        display: flex;
      }

      .star-rating {
        align-items: left;
        font-size: 1.5em;
        justify-content: left;
        margin-left: -5px;
      }

      .back-stars {
        color: #CCC;
        position: relative;
      }

      .front-stars {
        color: #FFBC0B;
        overflow: hidden;
        position: absolute;
        top: 0;
        transition: all 0.5s;
      }


      .percent {
        color: #bb5252;
        font-size: 1.5em;
      }
    </style>
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
                        <img src="/assets/img/icon/maleuser.png" style="height:60px;" alt=""><span><b>Amirah</b> <br>nama@gmail.com</span></a>
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
                    .product__cart__item__rating span{
                        cursor: pointer;
                        color: grey;

                    }
                </style>
                <div class="col-lg-6">
                    <div class="pesanan__user">
                        <div class="card" style="padding: 20px; border-radius:15px; border-color: rgb(114, 108, 108);">
                        <h4><b>Beri Penilaian</b></h4>
                            {{-- <div class="card" style="padding: 20px; border-radius:15px; border-color: rgb(114, 108, 108);"> --}}
                            <div class="col-12">

                                <div class="shopping__cart__table" style="margin-bottom: 2px">
                                    <table>
                                        <thead>
                                            {{-- <tr>
                                                <th>Produk</th>

                                            </tr> --}}
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product__cart__item" style="padding-top: 5px; padding-bottom: 5px">
                                                    <div class="product__cart__item__pic">
                                                        <img src="/assets/img/product/dress1.png" alt="" style="max-width: 90px">
                                                    </div>
                                                    <div class="product__cart__item__text" style="padding-top: 5px">
                                                        <h6>T-shirt Contrast Pocket</h6>
                                                        <h6>Ukuran: </h6>
                                                        <h6>Warna: </h6>
                                                    </div>
                                                    {{-- <a href="" class="btn btn-dark btn-sm" style="font-size: 13px; border-radius:10px; float:right">Nilai</a> --}}
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div><br>

                                    <h5><b>Kualitas Produk</b></h5>
                                    <div class="rating" style="width: 10rem; margin-top:10px;">
                                        <input id="rating-5" type="radio" name="rating" value="5"/><label for="rating-5"><i class="fas fa-3x fa-star"></i></label>
                                        <input id="rating-4" type="radio" name="rating" value="4"  /><label for="rating-4"><i class="fas fa-3x fa-star"></i></label>
                                        <input id="rating-3" type="radio" name="rating" value="3"/><label for="rating-3"><i class="fas fa-3x fa-star"></i></label>
                                        <input id="rating-2" type="radio" name="rating" value="2"/><label for="rating-2"><i class="fas fa-3x fa-star"></i></label>
                                        <input id="rating-1" type="radio" name="rating" value="1"/><label for="rating-1"><i class="fas fa-3x fa-star"></i></label>
                                    </div>
                                    <br>
                                    <h5><b>Berikan komentar anda</b></h5>
                                    <textarea class="form-control @error ('komentar') is-invalid @enderror" name="komentar" rows="3" id="komentar" style="color: black; margin-top:10px; border-color:#000000" required placeholder="komentar...." value="{{old ('komentar')}}"></textarea>
                                    @error('komentar')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <button type="submit" class="site-btn">Simpan</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

