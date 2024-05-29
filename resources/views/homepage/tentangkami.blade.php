@extends('layouts.main')

@section('content')
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Tentang Kami</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ route('index') }}">Beranda</a>

                            <span>Tentang Kami</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__pic">
                        <img src="assets/img/about/about-us.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Siapa Kami ?</h4>
                        <p>Kami adalah sebuah platform ecommerce yang berkomitmen untuk memberikan pengalaman belanja online yang terbaik
                             bagi pelanggan kami. Di sini, Anda akan menemukan beragam produk berkualitas dari berbagai kategori fashion</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Apa yang kami lakukan?</h4>
                        <p>Di era digital, bisnis online menjadi yang utama sehingga kami mencoba untuk mengikuti perkembangan dengan melakukan penjualan secara online.
                            dengan situs website akan sangan membantu kami.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Mengapa harus memilih kami?</h4>
                        <p>Karna kami memiliki produk-produk yang berkualitas dengan harga yang terjangkau.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Tim Kami</span>
                        <h2>Berikut Tim Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mx-auto">
                    <div class="team__item">
                        <img src="assets/img/about/team-1.jpg" alt="">
                        <h4>Orlin</h4>
                        <span>Fashion Design</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mx-auto">
                    <div class="team__item">
                        <img src="assets/img/about/team-2.jpg" alt="">
                        <h4>Fitri</h4>
                        <span>C.E.O</span>
                    </div>
                </div>

            </div>
        </div>
    </section>





@endsection
