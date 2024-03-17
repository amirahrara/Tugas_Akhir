@extends('layouts.main')

@section('content')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Tentang Kami</h4>
                    <div class="breadcrumb__links">
                        <a href="{{route('index')}}">Beranda</a>

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
                    <h4>Who We Are ?</h4>
                    <p>Contextual advertising programs sometimes have strict policies that need to be adhered too.
                    Let’s take Google as an example.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Who We Do ?</h4>
                    <p>In this digital generation where information can be easily obtained within seconds, business
                    cards still have retained their importance.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Why Choose Us</h4>
                    <p>A two or three storey house is the ideal way to maximise the piece of earth on which our home
                    sits, but for older or infirm people.</p>
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
                    <h4>John Smith</h4>
                    <span>Fashion Design</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mx-auto">
                <div class="team__item">
                    <img src="assets/img/about/team-2.jpg" alt="">
                    <h4>Christine Wise</h4>
                    <span>C.E.O</span>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
